<?php

namespace App\Entity;

use App\Repository\PlanteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlanteRepository::class)]
class Plante
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?float $time_to_grow = null;

    #[ORM\ManyToOne(inversedBy: 'plant')]
    private ?Item $item = null;

    #[ORM\ManyToOne(inversedBy: 'plant')]
    private ?Blog $blog = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getTimeToGrow(): ?float
    {
        return $this->time_to_grow;
    }

    public function setTimeToGrow(float $time_to_grow): self
    {
        $this->time_to_grow = $time_to_grow;

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

    public function getBlog(): ?Blog
    {
        return $this->blog;
    }

    public function setBlog(?Blog $blog): self
    {
        $this->blog = $blog;

        return $this;
    }
}
