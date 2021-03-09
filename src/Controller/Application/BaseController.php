<?php
namespace App\Controller\Application;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseController extends AbstractController
{
    public function renderDefault(): array
    {
        return [
            'title' => 'Заявки'
        ];

    }
}