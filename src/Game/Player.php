<?php

namespace App\Game;

use App\Card\Card;
use App\Card\CardDeck;
use App\Card\CardGraphic;

class Player
{
    /** @var Card[] */
    protected array $hand = [];
    protected int $score = 0;

    /**
     * @return Card[]
     */
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
        $card = $deck->drawCard();
        if ($card instanceof Card) {
            $this->addCard($card);
        }
    }
}
