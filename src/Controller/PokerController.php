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
    //creation de la nouvelle page pour non majeur
        //création de la page devoir pour les non majeurs
        /**
         * @Route("/devoir" , name="devoir")
         */
        public function devoir()
        {
           return new Response('Allez hop vas faire tes devoirs') ;
        }


       /* ANCIENNE VERSION
       structure conditionnelle pour determiner l accès si l utilisateur a plus de 18 ans ou non
        //si moins de 18 ans :refus d acces
        if ($age <18)
        {
            return new Response('Retourne faire tes devoirs tout de suite...');
        }
        //si plus de 18 ans :bienvenue
        else
        {
            return new Response('bienvenue dans l\'univers du poker');
        }*/
    
}


?>