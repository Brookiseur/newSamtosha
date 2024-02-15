<?php

namespace App\Controller;

use Twig\Environment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    /**
    * @Route("/", name= "main")
    */
    public function main(Environment $twig): Response
    {  

        return $twig->render('main.html.twig');
        

    }

}




