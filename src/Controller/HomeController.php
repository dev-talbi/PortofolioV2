<?php

namespace App\Controller;

use App\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $repoProject = $this->getDoctrine()->getRepository(Project::class);
        $projects = $repoProject->findAll();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'ProjectController',
            'projects' => $projects
        ]);
    }
}
