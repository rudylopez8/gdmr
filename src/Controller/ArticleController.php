<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

    class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="app_article")
     */
    public function index(): Response
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }


    /**
     * @Route("/article/17", name="app_article_affichage")
     * 
     */
    public function affichage()
    {    
        return $this->render('article/affichage.html.twig', [

        ]);

    }

    /**
     * @Route("/catalogue", name="app_catalogue")
     */
    public function catalogue(): Response
    {
        return $this->render('article/catalogue.html.twig', [

        ]);
    }
    /**
     * @Route("/abonnements", name="app_abonnements")
     */
    public function abonnements(): Response
    {
        return $this->render('article/abonnement.html.twig', [

        ]);
    }

}
