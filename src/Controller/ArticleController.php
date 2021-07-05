<?php
namespace App\Controller;

use phpDocumentor\Reflection\Types\AbstractList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    public $articles = [
        1 => [
            "title" => "La vaccination c'est trop géniale",
            "content" => "bablablblalba",
            "id" => 1
        ],
        2 => [
            "title" => "La vaccination c'est pas trop géniale",
            "content" => "blablablabla",
            "id" => 2
        ],
        3 => [
            "title" => "Balkany c'est trop génial",
            "content" => "balblalblalb",
            "id" => 3
        ],
        4 => [
            "title" => "Balkany c'est pas trop génial",
            "content" => "balblalblalb",
            "id" => 4
        ]
    ];

    /*Annotation pour lier avec url*/
    /**
     * @Route("/liste" , name="liste")
     */
    public function liste()
    {
        //Mise en place des connexions twig
        return $this->render('liste.html.twig', ['articles' => $this->articles]);
    }

    //création de la page article  pour afficher les articles

    /**
     * @Route ("/article/{id}" , name="article")
     */
    public function article($id)
    {
//creation d un tableau avec les infos
        //il est possible et meme recommander de le mettre en prorpiété au dessus des methodes .

//creation d un renvoi en lien avec le twig article pour pouvoir afficher les infos de l article en fonction de l id ajouté à l url
        return $this->render('article.html.twig', ['article'=>$this->articles[$id]]);
        //}
    }
}