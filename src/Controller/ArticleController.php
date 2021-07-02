<?php
namespace App\Controller;

use phpDocumentor\Reflection\Types\AbstractList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
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
//creation d un tableau avec les infos
        $articles = [
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
//creation d'une variable article pour designer la key qui va permettre de recuperer un article en fonction de son id
       // $article = $articles[$id];
//renvoi de la reponse en affichant le titre de l article en fonction de l id ajouté à l url
       // return new Response($article['title']);
        return $this->render('article.html.twig' , ['article'=>$articles[$id]]);
    }

}

?>