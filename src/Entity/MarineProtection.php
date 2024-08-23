<?php

namespace App\Entity;

use App\Repository\MarineProtectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MarineProtectionRepository::class)]
class MarineProtection
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $year = null;

    #[ORM\Column(nullable: true)]
    private ?float $nationwide_percent = null;

    #[ORM\Column(nullable: true)]
    private ?float $västerhavet_percent = null;

    #[ORM\Column(nullable: true)]
    private ?float $östersjön_percent = null;

    #[ORM\Column(nullable: true)]
    private ?float $bottniska_viken_percent = null;

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

    public function getNationwidePercent(): ?float
    {
        return $this->nationwide_percent;
    }

    public function setNationwidePercent(?float $nationwide_percent): static
    {
        $this->nationwide_percent = $nationwide_percent;

        return $this;
    }

    public function getVästerhavetPercent(): ?float
    {
        return $this->västerhavet_percent;
    }

    public function setVästerhavetPercent(?float $västerhavet_percent): static
    {
        $this->västerhavet_percent = $västerhavet_percent;

        return $this;
    }

    public function getöstersjönPercent(): ?float
    {
        return $this->östersjön_percent;
    }

    public function setöstersjönPercent(?float $östersjön_percent): static
    {
        $this->östersjön_percent = $östersjön_percent;

        return $this;
    }

    public function getBottniskaVikenPercent(): ?float
    {
        return $this->bottniska_viken_percent;
    }

    public function setBottniskaVikenPercent(?float $bottniska_viken_percent): static
    {
        $this->bottniska_viken_percent = $bottniska_viken_percent;

        return $this;
    }
}
