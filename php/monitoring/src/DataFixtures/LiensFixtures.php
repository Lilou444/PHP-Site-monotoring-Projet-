<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Sites;

class LiensFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 3; $i++){
            $Liens = new Sites();
            $Liens->setLiens("Le lien du site est n°$i");

            $manager->persist($Liens);
        }

        $manager->flush();
    }
}
