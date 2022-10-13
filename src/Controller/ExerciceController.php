<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExerciceController extends AbstractController
{
    /**
     * @Route("/exercice", name="app_exercice")
     */
    public function index(): Response
    {
        return $this->render('exercice/index.html.twig', [
            'controller_name' => 'ExerciceController',
            'article'=>[
                    'titre'=>'Developpeur 2.0',
                    'auteur'=>'Georges Locas',
                    'resume'=>'Ce livre est basé sur le Developpment en Java EE',
                    'commentaire'=>'2',
            ],

            'stagiaires'=>[
                [
                    'pseudo'=>'stag1',
                    'nom'=>'Ouahs',
                    'prenom'=>'Khalil',
                    'promo'=>'22-23',
                ],

                [
                    'pseudo'=>'stag2',
                    'nom'=>'Sekkai',
                    'prenom'=>'Marwan',
                    'promo'=>'22-23',
                ],

                                [
                    'pseudo'=>'stag3',
                    'nom'=>'Bojs',
                    'prenom'=>'Quentin',
                    'promo'=>'22-23',
                ],


            
            ],
        ]);
    }
}