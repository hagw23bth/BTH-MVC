<?php

namespace App\Tests\Card;

use PHPUnit\Framework\TestCase;
use App\Card\CardDeck;
use App\Card\CardGraphic;

class CardDeckTest extends TestCase
{
    public function testInitializeDeck()
    {
        $deck = new CardDeck();
        $cards = $deck->getCards();
        $this->assertCount(52, $cards);

        $suits = array_count_values(array_map(fn($card) => $card->getSuit(), $cards));
        $this->assertEquals(13, $suits['Clubs']);
        $this->assertEquals(13, $suits['Diamonds']);
        $this->assertEquals(13, $suits['Hearts']);
        $this->assertEquals(13, $suits['Spades']);
    }

    public function testShuffleDeck()
    {
        $deck = new CardDeck();
        $cardsBeforeShuffle = $deck->getCards();
        
        $deck->shuffleDeck();
        $cardsAfterShuffle = $deck->getCards();
        
        // Kontrollera att antalet kort är detsamma efter blandning
        $this->assertCount(52, $cardsAfterShuffle);
        // Kontrollera att ordningen har förändrats (detta test kan ibland misslyckas om slumpmässig blandning inte ändrar ordningen)
        $this->assertNotEquals($cardsBeforeShuffle, $cardsAfterShuffle);
    }

    public function testSortDeck()
    {
        $deck = new CardDeck();
        $deck->shuffleDeck(); // Blanda först för att säkerställa att sortering fungerar korrekt
        $deck->sortDeck();
        
        $cards = $deck->getCards();
        $this->assertCount(52, $cards);
        
        $expectedOrder = [];
        $suits = ['Clubs', 'Diamonds', 'Hearts', 'Spades'];
        foreach ($suits as $suit) {
            for ($value = 1; $value <= 13; $value++) {
                $expectedOrder[] = new CardGraphic($suit, $value);
            }
        }

        $this->assertEquals($expectedOrder, $cards);
    }

    public function testDrawCard()
    {
        $deck = new CardDeck();
        $initialCount = count($deck->getCards());
        
        $drawnCard = $deck->drawCard();
        $this->assertInstanceOf(CardGraphic::class, $drawnCard);
        $this->assertCount($initialCount - 1, $deck->getCards());
        
        // Dra alla kort för att säkerställa att vi får null när däcket är tomt
        for ($i = 0; $i < $initialCount - 1; $i++) {
            $deck->drawCard();
        }
        
        $this->assertNull($deck->drawCard());
    }
}
