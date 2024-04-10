<?php

namespace App\Card;

class CardGraphic extends Card {
    public function getGraphic(): string {
        $suits = [
            'Hearts' => '♥',
            'Spades' => '♠',
            'Diamonds' => '♦',
            'Clubs' => '♣'
        ];
        $values = [
            '11' => 'J',
            '12' => 'Q',
            '13' => 'K',
            '1' => 'A'
        ];

        $valueRepresentation = $this->getValue() > 10 || $this->getValue() == 1 ? $values[$this->getValue()] : $this->getValue();
        return $valueRepresentation . $suits[$this->getSuit()];
    }
}