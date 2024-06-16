<?php

namespace App\Game;

use App\Card\Card;

class Bank
{
    private $hand = [];
    private $score = 0;

    public function addCard(Card $card): void
    {
        $this->hand[] = $card;
        $this->updateScore($card);
    }

    public function getHand(): array
    {
        return $this->hand;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    private function updateScore(Card $card): void
    {
        $this->score += $card->getValue();
    }
}