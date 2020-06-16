<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProjetContollerController extends AbstractController
{
    /**
     * @Route("/projet/contoller", name="projet_contoller")
     */
    public function index()
    {
        return $this->render('projet_contoller/index.html.twig', [
            'controller_name' => 'ProjetContollerController',
        ]);
    }
}
