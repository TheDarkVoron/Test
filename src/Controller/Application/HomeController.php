<?php


namespace App\Controller\Application;

use App\Entity\EApplic;
use App\Form\EapplicType;
use http\Env\Response as ResponseAlias;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class HomeController extends BaseController
{
    /**
     * @Route("/", name="home")
     * @return RedirectResponse|Response
     */
      public function index(): Response
      {
          $Applic = $this->getDoctrine()->getRepository(EApplic::class)->findAll();
          $forRender = parent::renderDefault();
          $forRender['Applic'] = $Applic;
          return $this->render('application/index.html.twig',$forRender);
      }

    /**
     * @Route("/", name="home")
     * @param Request $request
     * @return RedirectResponse|Response
     */
      public function create(Request $request)
      {
          $em = $this->getDoctrine()->getManager();
          $Applic = new EApplic();
          $form = $this->createForm(EapplicType::class, $Applic);
          $form->handleRequest($request);
          if ($form->isSubmitted()&&$form->isValid()){
              $Applic->setCreateAtVelue();
              $Applic->setUpdateAtVelue();
              $em->persist($Applic);
              $em->flush();
              $this->addFlash('success', 'Заявка добавлена');
              return $this->redirectToRoute('home');
          }
          $forRender = parent::renderDefault();
          $forRender['title'] = 'Создание заявки';
          $forRender['form'] = $form->createView();
          return $this->render('application/index.html.twig',$forRender);

      }

    /**
     * @Route("/update", name="home_update")
     * @param int $id
     * @param Request $request
     * @return RedirectResponse|Response
     */
      public function update(int $id, Request $request)
      {
          $em = $this->getDoctrine()->getManager();
          $Applic = $this->getDoctrine()->getRepository(EApplic::class)->find($id);
          $form = $this->createForm(EapplicType::class, $Applic);
          $form->handleRequest($request);
          if ($form->isSubmitted()&&$form->isValid()){
              if($form->get('save')->isClicked()){
                  $Applic->setUpdateAtVelue();
                  $this->addFlash('success', 'Заявка обновлена');
              }
              if($form->get('delete')->isClicked()){
                  $em->remove($Applic);
              }


              $em->flush();
              return $this->redirectToRoute('home');
          }
          $forRender = parent::renderDefault();
          $forRender['title'] = 'Редактирование заявки';
          $forRender['form'] = $form->createView();
          return $this->render('application/index.html.twig',$forRender);
      }
}