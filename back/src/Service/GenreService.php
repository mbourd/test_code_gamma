<?php

namespace App\Services;

use App\Entity\Genre;
use App\Repository\GenreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class GenreService
{
    private $entityManagerInterface;
    private $genreRepository;

    public function __construct(
        EntityManagerInterface $entityManagerInterface,
        GenreRepository $genreRepository
    ) {
        $this->entityManagerInterface = $entityManagerInterface;
        $this->genreRepository = $genreRepository;
    }

    public function getById(int $id): Genre
    {
        return $this->genreRepository->find($id);
    }

    public function getAll(): array
    {
        return $this->genreRepository->findAll();
    }
}