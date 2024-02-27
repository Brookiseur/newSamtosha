<?php

namespace App\Controller\Front;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactezmoiController extends AbstractController
{

    #[Route('/contactez-moi', name: 'contactezmoi')]
    public function contactezmoi(): Response
    {  
        return  $this->render('/front/contactezmoi.html.twig');
    }

}