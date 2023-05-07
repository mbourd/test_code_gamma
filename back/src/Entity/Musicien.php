<?php

namespace App\Entity;

use App\Repository\MusicienRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MusicienRepository::class)]
class Musicien
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $label = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateSeparation = null;

    #[ORM\Column(length: 255)]
    private ?string $fondateur = null;

    #[ORM\Column(nullable: true)]
    private ?int $nombreMembre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $presentation = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Country $paysOrigine = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Ville $ville = null;

    #[ORM\ManyToOne]
    private ?Genre $genre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateSeparation(): ?\DateTimeInterface
    {
        return $this->dateSeparation;
    }

    public function setDateSeparation(?\DateTimeInterface $dateSeparation): self
    {
        $this->dateSeparation = $dateSeparation;

        return $this;
    }

    public function getFondateur(): ?string
    {
        return $this->fondateur;
    }

    public function setFondateur(string $fondateur): self
    {
        $this->fondateur = $fondateur;

        return $this;
    }

    public function getNombreMembre(): ?int
    {
        return $this->nombreMembre;
    }

    public function setNombreMembre(?int $nombreMembre): self
    {
        $this->nombreMembre = $nombreMembre;

        return $this;
    }

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(?string $presentation): self
    {
        $this->presentation = $presentation;

        return $this;
    }

    public function getPaysOrigine(): ?Country
    {
        return $this->paysOrigine;
    }

    public function setPaysOrigine(?Country $paysOrigine): self
    {
        $this->paysOrigine = $paysOrigine;

        return $this;
    }

    public function getVille(): ?Ville
    {
        return $this->ville;
    }

    public function setVille(?Ville $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getGenre(): ?Genre
    {
        return $this->genre;
    }

    public function setGenre(?Genre $genre): self
    {
        $this->genre = $genre;

        return $this;
    }
}
