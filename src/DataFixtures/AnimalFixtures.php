<?php

namespace App\DataFixtures;

use App\Entity\Continent;
use App\Entity\Animal;
use App\Entity\Famille;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $continent1=new Continent();
        $continent1->setLibelle("Europe");
        $manager->persist($continent1);
        $continent2=new Continent();
        $continent2->setLibelle("Asie");
        $manager->persist($continent2);
        $continent3=new Continent();
        $continent3->setLibelle("Afrique");
        $manager->persist($continent3);
        $continent4=new Continent();
        $continent4->setLibelle("Océanie");
        $manager->persist($continent4);
        $continent5=new Continent();
        $continent5->setLibelle("Amérique");
        $manager->persist($continent5);

        $c1 = new Famille();
        $c1->setLibelle("mamiefréres")
            ->setDescription("Animaux vertébrés nourissant leur petis du lait");
            
 $manager->persist($c1);


        $c2 = new Famille();
        $c2->setLibelle("reptiles")
        ->setDescription("Animaux vertébrés qui rampent");

        $manager->persist($c2);

        $c3 = new Famille();
        $c3->setLibelle("poissons")
        ->setDescription("Animaux invertébrés du mois aquatique");

        $manager->persist($c3);



        $a1= new Animal();
        $a1->setNom("chien")
            ->setDescription ("un animal domistique")
            ->setImage ("chien.png")
            ->setPoids(10)
            ->setDangereux(false)
            ->setFamille($c1)

        ;
 $manager->persist($a1);

        $a2= new Animal();
        $a2->setNom("cochon")
            ->setDescription ("un animal d'élevage")
            ->setImage ("cochon.png")
            ->setPoids(50)
            ->setDangereux(true)
            ->setFamille($c1)
        ;
        $manager->persist($a2);

        $a3= new Animal();
        $a3->setNom("Serpent")
            ->setDescription ("un animal dangeureux")
            ->setImage ("Serpent.png")
            ->setPoids(100)
            ->setDangereux(false)
            ->setFamille($c2)
        ;
        $manager->persist($a3);

        $a4= new Animal();
        $a4->setNom("croco")
            ->setDescription ("un animal trés dangeureux")
            ->setImage ("croco.png")
            ->setPoids(500)
            ->setDangereux(true)
            ->setFamille($c2)
        ;
        $manager->persist($a4);


        $a5= new Animal();
        $a5->setNom("requin")
            ->setDescription ("un animal marin trés dangeureux")
            ->setImage ("requin.png")
            ->setPoids(400)
            ->setDangereux(false)
            ->setFamille($c3)

        ;
        $manager->persist($a5);


        $manager->flush();
    }
}
