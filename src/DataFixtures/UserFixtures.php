<?php

namespace App\DataFixtures;
use App\Entity\User;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        // Utiliser la Bibliotheque Fakar
        $faker = \Faker\Factory::create('fr_FR');

        
        // Creation de 10 Article
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
            
                $manager->persist($user);
        }


        $manager->flush();
    }
}
