<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\User;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use PhpParser\Node\Expr\New_;
use Doctrine\Common\Collections\ArrayCollection;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void

    {
$tabAuteur=new ArrayCollection();
        // Utiliser la Bibliotheque Fakar
        $faker = \Faker\Factory::create('fr_FR');
        for ($i=0; $i<100; $i++){
            $user = new User();
            $user->setNom($faker->lastName)
                    ->setPrenom($faker->firstName())
                    ->setPseudo($faker->word())
                    ->setPhoto($faker->imageUrl(350, 350))
                    ->setAdresse($faker->streetAddress())
                    ->setCodePostal($faker->postcode())
                    
                    ->setVille($faker->city())
                    ->setPays($faker->country())
                    ->setTelephone($faker->phoneNumber())
                    ->setMail($faker->email());
            $tabAuteur->add($user);
                $manager->persist($user);
        }



         // je mets en place 5 categories
         for ($i=0; $i<6; $i++){
            $categorie = New Categorie();
            $categorie -> setTitre($faker->word())
                       ->setResume($faker->text());        
            $manager->persist($categorie);

       
        // Creation de 10 Article
        for ($i=0; $i<12; $i++){
            $article = new Article();
            $article->setTitre($faker->sentence($nb = 5, $asText = false))
                    ->setAuteur($tabAuteur->get(mt_rand(1,count($tabAuteur))))
                    ->setImage($faker->imageUrl(350, 350))
                    ->setResume($faker->text())
                    ->setContenu($faker->realText($maxNbChars = 200, $indexSize = 2))
                    ->setDate(new \DateTime())
->setComentaire($faker->text)
->setCategorie($categorie)
                    ;
            
                $manager->persist($article);
        }
    }
    $manager->flush();
    }
}