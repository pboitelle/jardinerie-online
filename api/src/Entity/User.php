<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Get;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

// #[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Entity]
#[ApiResource]
// #[ORM\Table(name: '`user`')]
// #[Patch(
//     uriTemplate: '/users/achat-coins/{id}',
//     normalizationContext: ['groups' => ['user:read']],
//     denormalizationContext: ['groups' => ['user:write']],
//     name: 'app_user_achat_coins',
// )]

class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column]
    private ?int $nb_coin = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;


    public function __construct()
    {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getNbCoin(): ?int
    {
        return $this->nb_coin;
    }

    public function setNbCoin(int $nb_coin): self
    {
        $this->nb_coin = $nb_coin;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }
}
