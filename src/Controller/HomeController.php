<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', 
            [
                'controller_name' => 'HomeController',
                'num_matricule'=>'2022-23',
                'note_recu'=>'12/20',
            ]);
    }

    /**
     * @Route("/apropos", name="app_apropos")
     */
    public function apropos(): Response
    {
        //l'envoi d'un Message à l'écran sans passer par une page
        return new Response("PAGE/ UNDERCONSTRUCTION");
    }
    
    
    /**
     * @Route("/contact", name="app_contact")
     */
    public function contact(): Response
    {
        
       //Affiche du contact avec balise HTML
        return new Response("

            <html>
                <body>
                    <h1> PAGE CONTACT</h1>
                </body>
            </html>"
    );
    }

    /**
     * @Route("/actualites/{name}", name="app_actuality")
     */
    public function actualites($name): Response
    {
    $response = $this->forward('App\Controller\HomeController::actualites', [
        'name'  => $name,
        'color' => 'green',
    ]);

    // ... further modify the response or return it directly

    return $response;
    }

    /**
     * @Route("/municipalites", name="app_apr")
     */
    public function municipalites()
    {
        //redirection sur une Route de mon application
        return $this->redirectToRoute('app_apropos');

        // return $this->generateUrl('https://fr.wikipedia.org/wiki/Listes_des_communes_de_Francehome');

    }


    
}
