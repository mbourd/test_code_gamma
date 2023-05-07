<?php

namespace App\DataFixtures;

use App\Entity\Ville;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class VilleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $repo = $manager->getRepository('App\Entity\Ville');

        $listVilles = [
            [
                "label" => "Paris",
            ],
            [
                "label" => "LLiverpool",
            ],
            [
                "label" => "Bordeaux",
            ],
            [
                "label" => "Aberdeen",
            ],
            [
                "label" => "Londres",
            ],
            [
                "label" => "Basildon",
            ],
            [
                "label" => "Bristol",
            ],
        ];

        foreach ($listVilles as $value) {
            $e = new Ville();
            $e->setLabel($value["label"]);

            $manager->persist($e);
        }

        $manager->flush();
    }
}
