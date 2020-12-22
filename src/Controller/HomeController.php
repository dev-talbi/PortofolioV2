<?php

namespace App\Controller;

use App\Entity\Design;
use App\Entity\Project;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $repoProject = $this->getDoctrine()->getRepository(Project::class);
        $projects = $repoProject->findAll();

        $designs = $this->getDoctrine()->getRepository(Design::class)
        ->findAll();
        
        return $this->render('home/index.html.twig', [
            'controller_name' => 'ProjectController',
            'projects' => $projects,
            'designs'=> $designs
        ]);
    }
}
