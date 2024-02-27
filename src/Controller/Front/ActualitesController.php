<?php

namespace App\Controller\Front;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ActualitesController extends AbstractController
{

    #[Route('/actualites', name: 'actualites')]
    public function actualites(): Response
    {  
        return  $this->render('/front/actualites.html.twig');
    }

}