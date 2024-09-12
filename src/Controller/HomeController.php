<?php

namespace App\Controller;

use App\Entity\Status;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        //dd(Status::IN_PROGRESS); dump and die. Un point d'arrêt, il arrête le code dès qu'il rencontre le dd
        //là on demande la valeur du status in progress. Quand on exécute home, il n'exécute pas le render

        dump(Status::IN_PROGRESS); //la page s'exécute correctement mais affiche la valeur du status

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
