<?php

namespace App\Card;

class CardDeck
{
    /**
     * @var CardGraphic[]
     */
    private array $cards = [];

    public function __construct()
    {
        $this->initializeDeck();
    }

    /**
     * Initialized deck of 52 cards.
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
     * Sorts the deck.
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
     * @return CardGraphic[]
     */
    public function getCards(): array
    {
        return $this->cards; // Returnerar kortleken i dess nuvarande tillstånd
    }

        
    /**
     * Draws and seperates the first card of the deck.
     *
     * @return CardGraphic|null
     */
    public function drawCard(): ?CardGraphic
    {
        return array_shift($this->cards);
    }
}
