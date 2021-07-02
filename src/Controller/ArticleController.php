<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /*Annotation pour lier avec url*/
    /**
     * @Route("/liste" , name="liste")
     */
    public function liste()
    {
        /*envoi de la reponse http avec la classe Response hhtpfoundation*/
        return new Response('Ma liste d\'article');
    }

    //création de la page article  pour afficher les articles
    /**
     * @Route ("/article/{id}" , name="article")
     */
    public function article($id)
    {
        return new Response($id);
    }


}

?>