<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController
{
    /*annotation pour lier la methode suivante à sa page*/
    /**
     * @Route("/" , name="home")
     */
    public function home()
    {
        /*envoi de la reponse http avec la classe Response hhtpfoundation*/
        return new Response('accueil de la mort qui tue');
    }
    /*annotation pour lier la methode suivante à sa page*/
    /**
     * @Route("/mentions-legales", name="mentionslegales")
     */
    public function mentionsLegales()
    {
        /*envoi de la reponse http avec la classe Response hhtpfoundation*/
        return Response('mes mentions légales à moi toute seule');
    }
}

?>