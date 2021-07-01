<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/articles" , name="article")
     */
    public function listeArticles()
    {
        var_dump('liste d article');
        die;
    }


}

?>