<?php

namespace App\Card;

class Card
{
    private $suit;
    private $value;

    public function __construct(string $suit, int $value)
    {
        $this->suit = $suit;
        $this->value = $value;
    }

    public function getSuit(): string
    {
        return $this->suit;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->getValue() . ' of ' . $this->getSuit();
    }

    public function toArray(): array
    {
        return [
            'suit' => $this->suit,
            'value' => $this->value
        ];
    }
}
