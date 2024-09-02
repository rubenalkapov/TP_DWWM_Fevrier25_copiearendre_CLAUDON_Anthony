<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $image_id = null;

    #[ORM\Column(type: Types::BLOB)]
    private $image_data;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageId(): ?int
    {
        return $this->image_id;
    }

    public function setImageId(int $image_id): static
    {
        $this->image_id = $image_id;

        return $this;
    }

    public function getImageData()
    {
        return $this->image_data;
    }

    public function setImageData($image_data): static
    {
        $this->image_data = $image_data;

        return $this;
    }
}
