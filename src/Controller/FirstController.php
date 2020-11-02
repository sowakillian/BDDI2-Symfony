<?php
// src/Controller/FirstController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController
{
    /**
    * @Route("/first")
    */
    public function toto(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Random number: '.$number.'</body></html>'
        );
    }
}