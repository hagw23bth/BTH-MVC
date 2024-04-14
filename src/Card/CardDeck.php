<?php

namespace App\Card;

class CardDeck
{
    private $cards = [];

    public function __construct()
    {
        $this->initializeDeck();
    }

    public function initializeDeck()
    {
        $suits = ['Clubs', 'Diamonds', 'Hearts', 'Spades'];
        foreach ($suits as $suit) {
            for ($value = 1; $value <= 13; $value++) {
                $this->cards[] = new CardGraphic($suit, $value);
            }
        }
    }

    // Metod som blandar kortleken
    public function shuffleDeck()
    {
        shuffle($this->cards);
    }

    // Metod som sorterar kortleken
    public function sortDeck()
    {
        usort($this->cards, function ($cardA, $cardB) {
            $suits = ['Clubs' => 0, 'Diamonds' => 1, 'Hearts' => 2, 'Spades' => 3];
            if ($suits[$cardA->getSuit()] === $suits[$cardB->getSuit()]) {
                return $cardA->getValue() <=> $cardB->getValue();
            }
            return $suits[$cardA->getSuit()] <=> $suits[$cardB->getSuit()];
        });
    }

    // Metod som retunerar korten i kortleken
    public function getCards(): array
    {
        return $this->cards; // Returnerar kortleken i dess nuvarande tillstånd
    }

    // Metod som tar bort och returnerar det första elementet från kortleken
    public function drawCard()
    {
        return array_shift($this->cards);
    }
}
