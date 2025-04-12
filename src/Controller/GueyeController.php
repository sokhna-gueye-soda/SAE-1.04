<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GueyeController extends AbstractController
{
    #[Route('/gueye', name: 'app_gueye')]
    public function gueye(): Response
    {
        return $this->render('gueye/index.html.twig', [
            'controller_name' => 'GueyeController',
        ]);
    }


    #[Route('/index', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('gueye/index.html.twig', [
            
        ]);
    }


    #[Route('/CV', name: 'app_CV')]
    public function CV(): Response
    {
        return $this->render('/CV.html.twig', [
            
        ]);
    }


    #[Route('/E_portfolio', name: 'app_E_portfolio')]
    public function E_portfolio(): Response
    {
        return $this->render('gueye/E_portfolio.html.twig', [
            
        ]);
    }


    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('gueye/about.html.twig', [
           
        ]);
    }

    #[Route('/loisirs', name: 'app_loisirs')]
    public function loisirs(): Response
    {
        return $this->render('gueye/loisirs.html.twig', [
           
        ]);
    
    }
    
    #[Route('/le parcours de mon choix', name: 'app_le parcours de mon choix')]
    public function leparcoursdemonchoix(): Response
    {
        return $this->render('gueye/le parcours de mon choix.html.twig', [
           
        ]);
    
    }
}
    