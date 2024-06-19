<?php

namespace App\Game;

use App\Card\Card;
use App\Card\CardDeck;
use App\Card\CardGraphic;

class Bank extends Player
{
    public function drawCard(CardDeck $deck): void
    {
        while ($this->getScore() < 17) {
            $card = $deck->drawCard();
            if ($card instanceof Card) {
                $this->addCard($card);
            }
        }
    }
}
