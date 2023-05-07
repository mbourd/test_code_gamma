<?php

namespace App\Services;

use App\Entity\Ville;
use App\Repository\VilleRepository;
use Doctrine\ORM\EntityManagerInterface;

class VilleService
{
    private $entityManagerInterface;
    private $villeRepository;

    public function __construct(
        EntityManagerInterface $entityManagerInterface,
        VilleRepository $villeRepository
    ) {
        $this->entityManagerInterface = $entityManagerInterface;
        $this->villeRepository = $villeRepository;
    }

    public function getById(int $id): Ville
    {
        return $this->villeRepository->find($id);
    }

    public function getAll(): array
    {
        return $this->villeRepository->findAll();
    }
}