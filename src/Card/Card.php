<?php

namespace App\Card;

/**
 * Class representing a single card in a deck.
 */
class Card
{
    /**
     * @var string The suit of the card.
     */
    private string $suit;
    /**
     * @var int The value of the card.
     */
    private int $value;

    /**
     * Card constructor.
     *
     * @param string $suit The suit of the card.
     * @param int $value The value of the card.
     */
    public function __construct(string $suit, int $value)
    {
        $this->suit = $suit;
        $this->value = $value;
    }

    /**
     * Gets the suit of the card.
     *
     * @return string The suit of the card.
     */
    public function getSuit(): string
    {
        return $this->suit;
    }

    /**
     * Gets the value of the card.
     *
     * @return int The value of the card.
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * Retusns a string description of the card in the format "value of suit"
     *
     * @return string Description of the card.
     */
    public function __toString(): string
    {
        return $this->getValue() . ' of ' . $this->getSuit();
    }

    /**
     * Convert the card to an array representation.
     *
     * @return array<string, int|string> The card as an associative array with keys 'suit' and 'value'.
     */
    public function toArray(): array
    {
        return [
            'suit' => $this->suit,
            'value' => $this->value
        ];
    }
}
