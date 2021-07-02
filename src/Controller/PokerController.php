<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PokerController extends AbstractController
{
//annotation pour indiquer la route URL
    /**
     * @Route("/poker" , name="home")
     */
//declaration de la methode requete avec autowire pour instancier automatiquement la class Request
    public function poker(Request $requete)
    {
//utilisation de la classe Request du composant httpfoundation avec createFromGlobal pour recuperer les elements saisis par l utilisateur
        //$requete = Request::createFromGlobals();

//creation d une variable pour stoker l age recuperé
        $age = $requete->query->get('age');

//structure conditionnelle pour determiner les droits d acces au site ou la redirection vers une autre page en cas ko
        if ($age >= 18) {
            return new Response('bienvenue sur notre site de poker');
        } else {
            return $this->redirectToRoute('devoir');
        }
    }

//création de la page devoir pour les non majeurs
        /**
         * @Route("/devoir" , name="devoir")
         */
        public function devoir()
        {
           return new Response('Allez hop vas faire tes devoirs') ;
        }

}


?>