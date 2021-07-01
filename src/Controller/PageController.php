<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController
{
    /*annotation */
    /**
     * @Route("/" , name="home")
     */
    public function home()
    {
        /*envoi de la reponse http*/
        return new Response('accueil de la mort qui tue');
    }

    /**
     * @Route("/mentions-legales", name="mentionslegales")
     */
    public function mentionsLegales()
    {
        var_dump('mentions légales');
        die;
    }
}

?>