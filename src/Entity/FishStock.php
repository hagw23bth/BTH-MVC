<?php

namespace App\Entity;

use App\Repository\FishStockRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FishStockRepository::class)]
class FishStock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $year = null;

    #[ORM\Column(nullable: true)]
    private ?float $sustainable_percent = null;

    #[ORM\Column(nullable: true)]
    private ?int $sustainable_count = null;

    #[ORM\Column(nullable: true)]
    private ?int $total_count = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): static
    {
        $this->year = $year;

        return $this;
    }

    public function getSustainablePercent(): ?float
    {
        return $this->sustainable_percent;
    }

    public function setSustainablePercent(?float $sustainable_percent): static
    {
        $this->sustainable_percent = $sustainable_percent;

        return $this;
    }

    public function getSustainableCount(): ?int
    {
        return $this->sustainable_count;
    }

    public function setSustainableCount(?int $sustainable_count): static
    {
        $this->sustainable_count = $sustainable_count;

        return $this;
    }

    public function getTotalCount(): ?int
    {
        return $this->total_count;
    }

    public function setTotalCount(?int $total_count): static
    {
        $this->total_count = $total_count;

        return $this;
    }
}
