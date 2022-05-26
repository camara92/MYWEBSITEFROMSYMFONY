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
        for ($i = 0; $i < 7; $i++) {
            $projet = new Projects();
            $projet->setProjectname("Ma boutique ecommerce ");
            $projet->setContent("Un projet réalisé sous le framework Angular. Le but est de mettre mes compétences dans la pratique.");
            $projet->setImage("https://picsum.photos/200/300");
            $projet->setCategorie("travail personnel");
            $projet->setDatedebut(new DateTime(rand()));
            $projet->setDatefin(new DateTime(rand()));
            $projet->setAuthor("Daouda CAMARA"); 
            $projet->setTechno("Framework Angular"); 
            $projet->setLienGit("");


            $manager->persist($projet);
        }

        $manager->flush();

       
}
}