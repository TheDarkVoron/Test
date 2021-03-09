<?php


namespace App\Controller\Course;

use App\Entity\ECourse;

use App\Form\ECourseType;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class CourseHomeController extends BaseCourseController
{
    /**
     * @Route("/course", name="course_home")
     * @return Response
     */
    public function index(): \Symfony\Component\HttpFoundation\Response
    {
        $Cour = $this->getDoctrine()->getRepository(ECourse::class)->findAll();
        $forRender = parent::renderDefault();
        $forRender['Cour'] = $Cour;
        return $this->render('course/index.html.twig',$forRender);
    }
    /**
     * @Route("/course", name="course_home")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function create(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $Cour = new ECourse();
        $form = $this->createForm(ECourseType::class, $Cour);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()){
            $em->persist($Cour);
            $em->flush();
            $this->addFlash('success', 'Курс добавлен');
            return $this->redirectToRoute('course_home');
        }
        $forRender = parent::renderDefault();
        $forRender['title'] = 'Создание курсов';
        $forRender['form'] = $form->createView();
        return $this->render('course/index.html.twig',$forRender);

    }
    /**
     * @Route("/course/update", name="course_home_update")
     * @param int $id
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function update(int $id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $Cour = $this->getDoctrine()->getRepository(ECourse::class)->find($id);
        $form = $this->createForm(ECourseType::class, $Cour);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()){
            $em->flush();
            $this->addFlash('success', 'Курс обновлен');
            return $this->redirectToRoute('course_home');
        }
        $forRender = parent::renderDefault();
        $forRender['title'] = 'Редактирование курсов';
        $forRender['form'] = $form->createView();
        return $this->render('course/index.html.twig',$forRender);
    }
}