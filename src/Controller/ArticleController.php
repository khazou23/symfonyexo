<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /*Annotation pour lier avec url*/
    /**
     * @Route("/articles" , name="article")
     */
    public function listeArticles()
    {
        /*envoi de la reponse http avec la classe Response hhtpfoundation*/
        return Response('Ma liste d\'article');
    }


}

?>