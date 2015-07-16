<?php
// src/Pronos/PronosticsBundle/DataFixtures/ORM/LoadChampionship.php

namespace Pronos\PronosticsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pronos\PronosticsBundle\Entity\Championship;
use Pronos\PronosticsBundle\Entity\Team;
use Pronos\PronosticsBundle\Entity\Daytime;

class LoadChampionship implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $championship = new Championship();
        $championship->setName('Ligue 1');
        $championship->setSlug('Ligue-1');
		
        $team = new Team(); $team->setName("bastia")->setSlug("bastia")->setLogo("bastia.png");
        $championship->addTeam($team); $manager->persist($team);
        $team = new Team(); $team->setName("bordeaux")->setSlug("bordeaux")->setLogo("bordeaux.png");
        $championship->addTeam($team); $manager->persist($team);
        $team = new Team(); $team->setName("caen")->setSlug("caen")->setLogo("caen.png");
        $championship->addTeam($team); $manager->persist($team);
        $team = new Team(); $team->setName("troyes")->setSlug("troyes")->setLogo("troyes.png");
        $championship->addTeam($team); $manager->persist($team);
        $team = new Team(); $team->setName("guingamp")->setSlug("guingamp")->setLogo("guingamp.png");
        $championship->addTeam($team); $manager->persist($team);
        $team = new Team(); $team->setName("angers")->setSlug("angers")->setLogo("angers.png");
        $championship->addTeam($team); $manager->persist($team);
        $team = new Team(); $team->setName("lille")->setSlug("lille")->setLogo("lille.png");
        $championship->addTeam($team); $manager->persist($team);
        $team = new Team(); $team->setName("lorient")->setSlug("lorient")->setLogo("lorient.png");
        $championship->addTeam($team); $manager->persist($team);
        $team = new Team(); $team->setName("lyon")->setSlug("lyon")->setLogo("lyon.png");
        $championship->addTeam($team); $manager->persist($team);
        $team = new Team(); $team->setName("marseille")->setSlug("marseille")->setLogo("marseille.png");
        $championship->addTeam($team); $manager->persist($team);
        $team = new Team(); $team->setName("gazelec ajaccio")->setSlug("gazelec ajaccio")->setLogo("gazelec.png");
        $championship->addTeam($team); $manager->persist($team);
        $team = new Team(); $team->setName("monaco")->setSlug("monaco")->setLogo("monaco.png");
        $championship->addTeam($team); $manager->persist($team);
        $team = new Team(); $team->setName("montpellier")->setSlug("montpellier")->setLogo("montpellier.png");
        $championship->addTeam($team); $manager->persist($team);
        $team = new Team(); $team->setName("nantes")->setSlug("nantes")->setLogo("nantes.png");
        $championship->addTeam($team); $manager->persist($team);
        $team = new Team(); $team->setName("nice")->setSlug("nice")->setLogo("nice.png");
        $championship->addTeam($team); $manager->persist($team);
        $team = new Team(); $team->setName("paris")->setSlug("paris")->setLogo("paris.png");
        $championship->addTeam($team); $manager->persist($team);
        $team = new Team(); $team->setName("reims")->setSlug("reims")->setLogo("reims.png");
        $championship->addTeam($team); $manager->persist($team);
        $team = new Team(); $team->setName("rennes")->setSlug("rennes")->setLogo("rennes.png");
        $championship->addTeam($team); $manager->persist($team);
        $team = new Team(); $team->setName("saint-etienne")->setSlug("saint-etienne")->setLogo("saint-etienne.png");
        $championship->addTeam($team); $manager->persist($team);
        $team = new Team(); $team->setName("toulouse")->setSlug("toulouse")->setLogo("toulouse.png");
        $championship->addTeam($team); $manager->persist($team);
        $manager->persist($championship);

        for($i=1; $i<=38; $i++) {
            $daytime = new Daytime();
            $daytime->setName('Journée '.$i)->setDiminutive('J'.$i)->setChampionship($championship);
            $manager->persist($daytime);
        }

        $manager->flush();
    }
}