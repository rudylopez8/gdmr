<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Categorie;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use PhpParser\Node\Expr\New_;


class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void

    {
        // Utiliser la Bibliotheque Fakar
        $faker = \Faker\Factory::create('fr_FR');

         // je mets en place 5 categories
         for ($i=0; $i<2; $i++){
            $categorie = New Categorie();
            $categorie -> setTitre($faker->sentence($nb = 5, $asText = false))
                       ->setResume($faker->text());        
            $manager->persist($categorie);

       
        // Creation de 10 Article
        for ($i=0; $i<12; $i++){
            $article = new Article();
            $article->setTitre($faker->sentence($nb = 5, $asText = false))
                    ->setAuteur($faker->name)
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