<?php

namespace App\Controller\Front;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EvenementsController extends AbstractController
{

    #[Route('/evenements', name: 'evenements')]
    public function evenements(): Response
    {  
        return  $this->render('/front/evenements.html.twig');
    }

}