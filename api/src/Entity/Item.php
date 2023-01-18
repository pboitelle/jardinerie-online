<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ItemRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource()]
#[ORM\Entity(repositoryClass: ItemRepository::class)]
class Item
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'item')]
    private ?Inventory $inventory = null;

    #[ORM\Column]
    private ?bool $sterile = null;

    #[ORM\ManyToOne(inversedBy: 'items')]
    private ?Market $market = null;

    #[ORM\OneToMany(mappedBy: 'item', targetEntity: Plante::class)]
    private Collection $plant;

    #[ORM\OneToMany(mappedBy: 'item', targetEntity: Niveau::class)]
    private Collection $niveau;

    public function __construct()
    {
        $this->plant = new ArrayCollection();
        $this->niveau = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInventory(): ?Inventory
    {
        return $this->inventory;
    }

    public function setInventory(?Inventory $inventory): self
    {
        $this->inventory = $inventory;

        return $this;
    }

    public function isSterile(): ?bool
    {
        return $this->sterile;
    }

    public function setSterile(bool $sterile): self
    {
        $this->sterile = $sterile;

        return $this;
    }

    public function getMarket(): ?Market
    {
        return $this->market;
    }

    public function setMarket(?Market $market): self
    {
        $this->market = $market;

        return $this;
    }

    /**
     * @return Collection<int, Plante>
     */
    public function getPlant(): Collection
    {
        return $this->plant;
    }

    public function addPlant(Plante $plant): self
    {
        if (!$this->plant->contains($plant)) {
            $this->plant->add($plant);
            $plant->setItem($this);
        }

        return $this;
    }

    public function removePlant(Plante $plant): self
    {
        if ($this->plant->removeElement($plant)) {
            // set the owning side to null (unless already changed)
            if ($plant->getItem() === $this) {
                $plant->setItem(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Niveau>
     */
    public function getNiveau(): Collection
    {
        return $this->niveau;
    }

    public function addNiveau(Niveau $niveau): self
    {
        if (!$this->niveau->contains($niveau)) {
            $this->niveau->add($niveau);
            $niveau->setItem($this);
        }

        return $this;
    }

    public function removeNiveau(Niveau $niveau): self
    {
        if ($this->niveau->removeElement($niveau)) {
            // set the owning side to null (unless already changed)
            if ($niveau->getItem() === $this) {
                $niveau->setItem(null);
            }
        }

        return $this;
    }
}
