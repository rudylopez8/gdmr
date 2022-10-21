<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// use Doctrine\Common\Persistance\ObjectManager;



    class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="app_article")
     */
    public function index(ArticleRepository $articlesRepository): Response
    {
        // $repo = $this->getDoctrine()->getRepository(Article::class);
        //$articles => $repo;

        return $this->render('article/index.html.twig', [

            'articles' => $articlesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/article/{id}", name="app_article_affichage")
     * 
     */
    public function affichage($id)
    {    
        $repo = $this->getDoctrine()->getRepository(Article::class);
        $articles= $repo->find($id);
        
        return $this->render('article/affichage.html.twig', [

            'articles'=>$articles

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
     * @Route("/catalogueAdmin", name="app_catalogueAdmin")
     */
    public function catalogueAdmin(): Response
    {
        return $this->render('article/catalogueAdmin.html.twig', [

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
    /**
     * @Route("/abonnementsAdmin", name="app_abonnementsAdmin")
     */
    public function abonnementsAdmin(): Response
    {
        return $this->render('article/abonnementAdmin.html.twig', [

        ]);
    }



    /**
     * @Route("/adherents", name="app_adherents")
     */
    public function adherent(): Response
    {
        return $this->render('article/adherent.html.twig', [

        ]);
    }
    /**
     * @Route("/adherentsAdmin", name="app_adherentsAdmin")
     */
    public function adherentAdmin(): Response
    {
        return $this->render('article/adherentAdmin.html.twig', [

        ]);
    }
    /**


    /**
     * @Route("/payment", name="app_payment")
     */
    public function payment(): Response
    {
        return $this->render('article/payment.html.twig', [

        ]);
    }
    /**
     * @Route("/articleAdmin", name="app_indexAdmin")
     */
    public function indexAdmin(ArticleRepository $articlesRepository): Response
    {
        // $repo = $this->getDoctrine()->getRepository(Article::class);
        //$articles => $repo;

        return $this->render('article/indexAdmin.html.twig', [

            'articles' => $articlesRepository->findAll(),
        ]);
    }



}
