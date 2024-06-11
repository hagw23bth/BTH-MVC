<?php

namespace App\Card;

class Card
{
    private string $suit;
    private int $value;

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

    public function __toString(): string
    {
        return $this->getValue() . ' of ' . $this->getSuit();
    }

    /**
     * @return array<string, int|string>
     */
    public function toArray(): array
    {
        return [
            'suit' => $this->suit,
            'value' => $this->value
        ];
    }
}
