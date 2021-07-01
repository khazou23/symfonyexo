<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PokerController
{
    //annotation pour indiquer la route URL
    /**
     * @Route("/poker" , name="home")
     */
    //methode pour la requete
    public function poker()
    {
        //utilisation de la classe Request du composant httpfoundation avec createFromGlobal pour recuperer les elements saisis par l utilisateur
        $requete = Request::createFromGlobals();
       //creation d une variable pour
       $age = $requete->query->get('age');

       // structure conditionnelle pour determiner l accès si l utilisateur a plus de 18 ans ou non
        //si moins de 18 ans :refus d acces
        if ($age <18)
        {
            return new Response('Retourne faire tes devoirs tout de suite...');
        }
        //si plus de 18 ans :bienvenue
        else
        {
            return new Response('bienvenue dans l\'univers du poker');
        }
    }
}


?>