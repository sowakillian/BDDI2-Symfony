<?php
// src/Controller/FirstController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FirstController extends AbstractController
{
    /**
    * @Route("/first")
    */
    public function toto(): Response
    {
        $number = random_int(0, 100);

        $contents =  $this->renderView('base.html.twig');

        $this->addFlash('error', 'Test Flash Error');

        return new Response($contents);
    }
}