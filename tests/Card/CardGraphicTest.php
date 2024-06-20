<?php

namespace App\Tests\Card;

use PHPUnit\Framework\TestCase;
use App\Card\CardGraphic;

class CardGraphicTest extends TestCase
{
    public function testGetGraphicForNumericCard()
    {
        $card = new CardGraphic('Hearts', 7);
        $this->assertEquals('7♥', $card->getGraphic());
    }

    public function testGetGraphicForFaceCard()
    {
        $card = new CardGraphic('Spades', 11);
        $this->assertEquals('J♠', $card->getGraphic());
        
        $card = new CardGraphic('Diamonds', 12);
        $this->assertEquals('Q♦', $card->getGraphic());
        
        $card = new CardGraphic('Clubs', 13);
        $this->assertEquals('K♣', $card->getGraphic());
    }

    public function testGetGraphicForAceCard()
    {
        $card = new CardGraphic('Hearts', 1);
        $this->assertEquals('A♥', $card->getGraphic());
    }

    public function testGetGraphicForSuitHearts()
    {
        $card = new CardGraphic('Hearts', 10);
        $this->assertEquals('10♥', $card->getGraphic());
    }

    public function testGetGraphicForSuitSpades()
    {
        $card = new CardGraphic('Spades', 5);
        $this->assertEquals('5♠', $card->getGraphic());
    }

    public function testGetGraphicForSuitDiamonds()
    {
        $card = new CardGraphic('Diamonds', 3);
        $this->assertEquals('3♦', $card->getGraphic());
    }

    public function testGetGraphicForSuitClubs()
    {
        $card = new CardGraphic('Clubs', 8);
        $this->assertEquals('8♣', $card->getGraphic());
    }
}