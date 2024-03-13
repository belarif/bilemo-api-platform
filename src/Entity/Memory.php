<?php

namespace App\Entity;

use App\Repository\MemoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MemoryRepository::class)]
class Memory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $memoryCapacity = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMemoryCapacity(): ?string
    {
        return $this->memoryCapacity;
    }

    public function setMemoryCapacity(string $memoryCapacity): static
    {
        $this->memoryCapacity = $memoryCapacity;

        return $this;
    }
}
