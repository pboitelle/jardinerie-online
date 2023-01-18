<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\NiveauRepository;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource()]
#[ORM\Entity(repositoryClass: NiveauRepository::class)]
class Niveau
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $niveau_name = null;

    #[ORM\Column(length: 255)]
    private ?string $color = null;

    #[ORM\Column]
    private ?int $taux_drop = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Item $item = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNiveauName(): ?string
    {
        return $this->niveau_name;
    }

    public function setNiveauName(string $niveau_name): self
    {
        $this->niveau_name = $niveau_name;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getTauxDrop(): ?int
    {
        return $this->taux_drop;
    }

    public function setTauxDrop(int $taux_drop): self
    {
        $this->taux_drop = $taux_drop;

        return $this;
    }

    public function getItem(): ?Item
    {
        return $this->item;
    }

    public function setItem(?Item $item): self
    {
        $this->item = $item;

        return $this;
    }
}
