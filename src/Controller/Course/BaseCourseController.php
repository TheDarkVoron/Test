<?php
namespace App\Controller\Course;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseCourseController extends AbstractController
{
    public function renderDefault(): array
    {
        return [
            'title' => 'Заявки'
        ];

    }
}