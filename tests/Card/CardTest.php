<?php

namespace App\Tests\Card;

use PHPUnit\Framework\TestCase;
use App\Card\Card;

class CardTest extends TestCase
{
    // Kontrollera att getSuit() ger förväntad retur
    public function testGetSuit(): void
    {
        $card = new Card('Hearts', 10);
        $this->assertEquals('Hearts', $card->getSuit());
    }

    // Kontrollerar att getValue() ger förväntad retur
    public function testGetValue(): void
    {
        $card = new Card('Spades', 5);
        $this->assertEquals(5, $card->getValue());
    }

    // Kontrollerar att toString() ger förväntad retur
    public function testToString(): void
    {
        $card = new Card('Diamonds', 10);
        $this->assertEquals('10 of Diamonds', (string) $card);
    }

    // Kontrollera att toArray() returnerar en array med korrekta suit- och value-värden.
    public function testToArray(): void
    {
        $card = new Card('Clubs', 8);
        $expectedArray = [
            'suit' => 'Clubs',
            'value' => 8
        ];
        $this->assertEquals($expectedArray, $card->toArray());
    }
}
