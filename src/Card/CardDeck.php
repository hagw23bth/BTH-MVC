<?php

namespace App\Card;

/**
 * Class representing a deck of cards.
 * Provides methods to initialize, shuffle, sort, and draw cards from the deck.
 */
class CardDeck
{
   /**
     * @var CardGraphic[] Array of cards in the deck.
     */
    private array $cards = [];

    /**
     * CardDeck constructor.
     */
    public function __construct()
    {
        $this->initializeDeck();
    }

    /**
     * Initializes the deck with 52 cards, one for each combination of suit and value.
     */
    public function initializeDeck(): void
    {
        $suits = ['Clubs', 'Diamonds', 'Hearts', 'Spades'];
        foreach ($suits as $suit) {
            for ($value = 1; $value <= 13; $value++) {
                $this->cards[] = new CardGraphic($suit, $value);
            }
        }
    }

    /**
     * Shuffles the deck.
     */
    public function shuffleDeck(): void
    {
        shuffle($this->cards);
    }

    /**
     * Sorts the deck suit and value.
     */
    public function sortDeck(): void
    {
        usort($this->cards, function ($cardA, $cardB) {
            $suits = ['Clubs' => 0, 'Diamonds' => 1, 'Hearts' => 2, 'Spades' => 3];
            if ($suits[$cardA->getSuit()] === $suits[$cardB->getSuit()]) {
                return $cardA->getValue() <=> $cardB->getValue();
            }
            return $suits[$cardA->getSuit()] <=> $suits[$cardB->getSuit()];
        });
    }

    /**
     * Gets the current state of the deck.
     *
     * @return CardGraphic[] Array of cards in the deck.
     */
    public function getCards(): array
    {
        return $this->cards; // Returnerar kortleken i dess nuvarande tillstånd
    }


    /**
     * Draws and seperates the first card from the deck.
     *
     * @return CardGraphic|null The drawn card or null if the deck is empty.
     */
    public function drawCard(): ?CardGraphic
    {
        return array_shift($this->cards);
    }
}
