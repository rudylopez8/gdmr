<?php

namespace App\Controller;
use App\Entity\Auteur;
use App\Repository\AuteurRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuteurController extends AbstractController
{
    /**
     * @Route("/auteurs", name="app_auteurs")
     */
    
     public function index(auteurRepository $auteurRepository): Response
    {
        // $repo = $this->getDoctrine()->getRepository(Auteur::class);
        //$auteur => $repo;

        return $this->render('auteur/index.html.twig', [
            'auteur' => $auteurRepository->findAll(),

        ]);

    }

    /**
     * @Route("/auteur/{id}", name="app_auteur_affichage")
     * 
     */
    public function affichage($id)
    {    
        $repo = $this->getDoctrine()->getRepository(Auteur::class);
        $auteur= $repo->find($id);
        
        return $this->render('auteur/affichage.html.twig', [

            'auteur'=>$auteur

        ]);

    }


}
