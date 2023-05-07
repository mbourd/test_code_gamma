<?php

namespace App\DataFixtures;

use App\Entity\Genre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class GenreFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $repo = $manager->getRepository('App\Entity\Genre');

        $listGenres = [
            [
                "label" => "pop rock",
            ],
            [
                "label" => "rock",
            ],
            [
                "label" => "grunge",
            ],
            [
                "label" => "trip hop",
            ],
        ];

        foreach ($listGenres as $value) {
            $e = new Genre();
            $e->setLabel($value["label"]);

            $manager->persist($e);
        }

        $manager->flush();
    }
}
