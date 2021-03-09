<?php

namespace App\Form;

use App\Entity\ECourse;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ECourseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('NameCourse',TextareaType::class, array('label'=>'Нзвание курса'))
            ->add('StatusCourse',TextType::class, array('label'=>'Стоимость'))
            ->add('save',SubmitType::class, array('label'=> 'Сохранить'))
            ->add('delete',SubmitType::class, array('label'=> 'Удалить'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ECourse::class,
        ]);
    }
}
