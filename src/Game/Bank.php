<?php

namespace App\Game;

use App\Card\Card;

class Bank
{
    private array $hand = [];
    private int $score = 0;

    public function getHand(): array
    {
        return $this->hand;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function addCard(Card $card): void
    {
        $this->hand[] = $card;
        $this->score += $card->getValue();
    }

    public function drawCard(CardDeck $deck): void
    {
        $this->addCard($deck->drawCard());
    }
}
