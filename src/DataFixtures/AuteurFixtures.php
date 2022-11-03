<?php

namespace App\DataFixtures;
use App\Entity\Auteur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AuteurFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        // Utiliser la Bibliotheque Fakar
        $faker = \Faker\Factory::create('fr_FR');

        
        // Creation de 10 Auteur
        for ($i=0; $i<10; $i++){
            $auteur = new Auteur();
            $auteur->setNoms($faker->lastName)
                    ->setPrenoms($faker->firstName())
                    ->setAdresse($faker->streetAddress())
                    ->setPhone($faker->phoneNumber());
            
                $manager->persist($auteur);
        }


        $manager->flush();
    }
}
