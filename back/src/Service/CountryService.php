<?php

namespace App\Services;

use App\Entity\Country;
use App\Repository\CountryRepository;
use Doctrine\ORM\EntityManagerInterface;

class CountryService
{
    private $entityManagerInterface;
    private $countryRepository;

    public function __construct(
        EntityManagerInterface $entityManagerInterface,
        CountryRepository $countryRepository
    ) {
        $this->entityManagerInterface = $entityManagerInterface;
        $this->countryRepository = $countryRepository;
    }

    public function getById(int $id): Country
    {
        return $this->countryRepository->find($id);
    }

    public function getAll(): array
    {
        return $this->countryRepository->findAll();
    }
}