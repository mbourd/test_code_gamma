<?php

namespace App\Services;

use App\Entity\Musicien;
use App\Repository\MusicienRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class MusicienService
{
    private $entityManagerInterface;
    private $musicienRepository;

    public function __construct(
        EntityManagerInterface $entityManagerInterface,
        MusicienRepository $musicienRepository
    ) {
        $this->entityManagerInterface = $entityManagerInterface;
        $this->musicienRepository = $musicienRepository;
    }

    public function getById(int $id): Musicien
    {
        return $this->musicienRepository->find($id);
    }

    public function getAll(): array
    {
        return $this->musicienRepository->findAll();
    }

    public function createMusicien($data): Musicien
    {
        if ($data instanceof Musicien) {
            return $this->musicienRepository->add($data);
        } else if (is_array($data)) {
            $musicien = new Musicien();
            $musicien->setLabel($data["label"]);
            $musicien->setDateDebut($data["dateDebut"]);
            $musicien->setDateSeparation($data["dateSeparation"]);
            $musicien->setFondateur($data["fondateur"]);
            $musicien->setNombreMembre($data["nombreMembre"]);
            $musicien->setPresentation($data["presentation"]);
            $musicien->setPaysOrigine($data["paysOrigine"]);
            $musicien->setVille($data["ville"]);
            $musicien->setGenre($data["genre"]);

            return $this->musicienRepository->add($musicien);
        }
    }

    public function updateMusicien(Musicien $musicien)
    {
        return $this->musicienRepository->add($musicien);
    }

    public function deleteMusicien(Musicien $musicien)
    {
        $this->musicienRepository->remove($musicien);
    }
}