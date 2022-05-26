<?php

namespace App\DataFixtures;

use App\Entity\Projects;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
         for ($i = 0; $i < 5; $i++) {
            $projet = new Projects();
            // $projet->setProjectname("Ma boutique ecommerce ");
            // $projet->setContent("Un projet réalisé sous le framework Angular. Le but est de mettre mes compétences dans la pratique.");
            // $projet->setImage("https://picsum.photos/200/300");
            // $projet->setCategorie("travail personnel");
            // $projet->setDatedebut(new DateTime());
            // $projet->setDatefin(new DateTime());
            // $projet->setAuthor("Daouda CAMARA"); 
            // $projet->setTechno("Framework Angular"); 
            // $projet->setLienGit("https://github.com/camara92/Maboutique-GP-Angular-Ecommerce-");
            // partie Symfony project en dur 

            
            $projet->setProjectname("YesCode ");
            $projet->setContent("Un projet réalisé sous le framework Symfony. Le but est de mettre mes compétences dans la pratique.");
            $projet->setImage("https://picsum.photos/200/300");
            $projet->setCategorie("travail pratique");
            $projet->setDatedebut(new DateTime());
            $projet->setDatefin(new DateTime());
            $projet->setAuthor("Formation"); 
            $projet->setTechno("Framework Symfony"); 
            $projet->setLienGit("https://github.com/camara92/YesCode/");


            $manager->persist($projet);
       }

        $manager->flush();

       
}
}