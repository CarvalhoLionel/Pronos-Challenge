<?php
// src/Pronos/PronosticsBundle/DataFixtures/ORM/LoadChampionnat.php

namespace Pronos\PronosticsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pronos\PronosticsBundle\Entity\Championnats;
use Pronos\PronosticsBundle\Entity\Equipes;
use Pronos\PronosticsBundle\Entity\Journees;

class LoadChampionnat implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        //création du championnat
        $championnat = new Championnats();
        $championnat->setNom('Ligue 1');
        //création des équipes & ajout de l'équipe dans la liste des équipes du championnat
        $equipe = new Equipes(); $equipe->setNom("bastia")->setLogo("bastia.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $equipe = new Equipes(); $equipe->setNom("bordeaux")->setLogo("bordeaux.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $equipe = new Equipes(); $equipe->setNom("caen")->setLogo("caen.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $equipe = new Equipes(); $equipe->setNom("evian tg")->setLogo("eviantg.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $equipe = new Equipes(); $equipe->setNom("guingamp")->setLogo("guingamp.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $equipe = new Equipes(); $equipe->setNom("lens")->setLogo("lens.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $equipe = new Equipes(); $equipe->setNom("lille")->setLogo("lille.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $equipe = new Equipes(); $equipe->setNom("lorient")->setLogo("lorient.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $equipe = new Equipes(); $equipe->setNom("lyon")->setLogo("lyon.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $equipe = new Equipes(); $equipe->setNom("marseille")->setLogo("marseille.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $equipe = new Equipes(); $equipe->setNom("metz")->setLogo("metz.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $equipe = new Equipes(); $equipe->setNom("monaco")->setLogo("monaco.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $equipe = new Equipes(); $equipe->setNom("montpellier")->setLogo("montpellier.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $equipe = new Equipes(); $equipe->setNom("nantes")->setLogo("nantes.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $equipe = new Equipes(); $equipe->setNom("nice")->setLogo("nice.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $equipe = new Equipes(); $equipe->setNom("paris")->setLogo("paris.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $equipe = new Equipes(); $equipe->setNom("reims")->setLogo("reims.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $equipe = new Equipes(); $equipe->setNom("rennes")->setLogo("rennes.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $equipe = new Equipes(); $equipe->setNom("saint-etienne")->setLogo("saint-etienne.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $equipe = new Equipes(); $equipe->setNom("toulouse")->setLogo("toulouse.png");
        $championnat->addEquipe($equipe); $manager->persist($equipe);
        $manager->persist($championnat);

        //création des journées du championnat
        for($i=1; $i<=38; $i++) {
            $journee = new Journees();
            $journee->setNom('Journée '.$i)->setDiminutif('J'.$i)->setChampionnat($championnat);
            $manager->persist($journee);
        }

        // On déclenche l'enregistrement de toutes les catégories
        $manager->flush();
    }
}