<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Projet;
use App\Repository\ProjetRepository;

class ProjetController extends AbstractController
{

    private $projetRepository;

    public function __construct(ProjetRepository $projetRepository){
        $this->projetRepository = $projetRepository;
    }

    public function index()
    {

        $projets = $this->projetRepository->ordreProjets();

        return $this->render('pages/projets.html.twig', [
            'projets' => $projets,
        ]);
    }

    public function projetSportAction(){

        return $this->render('projets/sport/projet-sport.html.twig');

    }
}
