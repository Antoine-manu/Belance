<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    #[Route('/projects', name: 'app_projects')]
    public function index(): Response
    {
        return $this->render('projects/index.html.twig', [
            'controller_name' => 'ProjectsController',
        ]);
    }

    #[Route('/projects/add_widget', name: 'app_projects_add_widget')]
    public function addWidget(Request $request)
    {
        $data = $request->request->all();
        $type = $data['type'];
        $rand = uniqid();
        return $this->render('widgets_template/' . $type . '.html.twig', [
            'random' => $rand,
        ]);
    }
}
