<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $tasks = [
            [
                'title' => 'Faire la vaisselle',
                'description' => 'Il faut faire la vaisselle avant de manger',
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Faire le ménage',
                'description' => 'Il faut faire le ménage avant de manger',
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Faire les courses',
                'description' => 'Il faut faire les courses avant de manger',
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Faire la vaisselle',
                'description' => 'Il faut faire la vaisselle avant de manger',
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Faire le ménage',
                'description' => 'Il faut faire le ménage avant de manger',
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Faire les courses',
                'description' => 'Il faut faire les courses avant de manger',
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Faire la vaisselle',
                'description' => 'Il faut faire la vaisselle avant de manger',
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Faire le ménage',
                'description' => 'Il faut faire le ménage avant de manger',
                'created_at' => new \DateTime(),
            ],
            [
                'title' => 'Faire les courses',
                'description' => 'Il faut faire les courses avant de manger',
                'created_at' => new \DateTime(),
            ],
        ];

        return $this->render('home.html.twig', [
            'tasks' => $tasks,
            'controller_name' => 'HomeController',
        ]);
    }
}
