<?php

namespace App\Controller;
use App\Entity\User;
use App\Repository\UserRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    /**
     * @Route("/users", name="app_users")
     */
    
     public function index(UserRepository $usersRepository): Response
    {
        // $repo = $this->getDoctrine()->getRepository(User::class);
        //$users => $repo;

        return $this->render('users/index.html.twig', [
            'users' => $usersRepository->findAll(),

        ]);

    }

    /**
     * @Route("/user/{id}", name="app_user_affichage")
     * 
     */
    public function affichage($id)
    {    
        $repo = $this->getDoctrine()->getRepository(User::class);
        $users= $repo->find($id);
        
        return $this->render('users/affichage.html.twig', [

            'users'=>$users

        ]);

    }

}
