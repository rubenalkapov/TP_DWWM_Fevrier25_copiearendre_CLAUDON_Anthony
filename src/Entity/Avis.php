<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $avis_id = null;

    #[ORM\Column(length: 50)]
    private ?string $pseudo = null;

    #[ORM\Column(length: 50)]
    private ?string $comments = null;

    #[ORM\Column]
    private ?bool $isVisible = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAvisId(): ?int
    {
        return $this->avis_id;
    }

    public function setAvisId(int $avis_id): static
    {
        $this->avis_id = $avis_id;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): static
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(string $comments): static
    {
        $this->comments = $comments;

        return $this;
    }

    public function isVisible(): ?bool
    {
        return $this->isVisible;
    }

    public function setVisible(bool $isVisible): static
    {
        $this->isVisible = $isVisible;

        return $this;
    }
}
