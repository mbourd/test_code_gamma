<?php

namespace App\DataFixtures;

use App\Entity\Country;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class CountryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $repo = $manager->getRepository('App\Entity\Country');

        $listCountrys = [
            [
                "label" => "France",
            ],
            [
                "label" => "Royaume-Uni",
            ],
            [
                "label" => "Etats-Unis",
            ],
        ];

        foreach ($listCountrys as $value) {
            $e = new Country();
            $e->setLabel($value["label"]);

            $manager->persist($e);
        }

        $manager->flush();
    }
}
