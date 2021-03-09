<?php

namespace App\Form;

use App\Entity\EApplic;
use App\Entity\ECourse;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EapplicType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('FName',TextareaType::class, array('label'=>'Имя'))
            ->add('SName',TextareaType::class, array('label'=>'Фамилия'))
            ->add('TName',TextareaType::class, array('label'=>'Отчество'))
            ->add('Phone',TextareaType::class, array('label'=>'Номер телефона'))
            ->add('CourseName',EntityType::class,array(
        'label'=>'Курсы',
        'class'=>ECourse::class,
        'choice_label'=>'title'
    ))
            ->add('save',SubmitType::class, array('label'=> 'Сохранить'))
            ->add('delete',SubmitType::class, array('label'=> 'Удалить'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EApplic::class,
        ]);
    }
}
