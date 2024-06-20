<?php

namespace App\Tests\Card;

use PHPUnit\Framework\TestCase;
use App\Card\CardDeck;
use App\Card\CardGraphic;

class CardDeckTest extends TestCase
{
    // Kontrollerar att en kortlek kan initieras korrekt
    public function testInitializeDeck(): void
    {
        // Initierar en kortlek
        $deck = new CardDeck();

        // Kontrollerar att däcket innehåller 52 kort.
        $cards = $deck->getCards();
        $this->assertCount(52, $cards);

        // Kontrollerar att varje färg (suit) har exakt 13 kort.
        $suits = array_count_values(array_map(fn ($card) => $card->getSuit(), $cards));
        $this->assertEquals(13, $suits['Clubs']);
        $this->assertEquals(13, $suits['Diamonds']);
        $this->assertEquals(13, $suits['Hearts']);
        $this->assertEquals(13, $suits['Spades']);
    }

    // Kontrollerar att ordningen på korten har förändrats vid blandning.
    public function testShuffleDeck(): void
    {
        $deck = new CardDeck();
        $cardsBeforeShuffle = $deck->getCards();

        $deck->shuffleDeck();
        $cardsAfterShuffle = $deck->getCards();

        // Kontrollerar att antalet kort är detsamma efter blandning
        $this->assertCount(52, $cardsAfterShuffle);
        // Kontrollerar att ordningen har förändrats (detta test kan ibland misslyckas om slumpmässig blandning inte ändrar ordningen)
        $this->assertNotEquals($cardsBeforeShuffle, $cardsAfterShuffle);
    }

    // Kontrollerar att korten är sorterade i förväntad ordning (färg och värde).
    public function testSortDeck(): void
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

    // Kontrollerar att ett draget kort är av rätt typ och att kortleken minskar när kort dras.
    public function testDrawCard(): void
    {
        $deck = new CardDeck();
        $initialCount = count($deck->getCards());

        // Kontrollerar att ett draget kort är av typen CardGraphic och att antalet kort i däcket minskar med ett efter dragning.
        $drawnCard = $deck->drawCard();
        $this->assertInstanceOf(CardGraphic::class, $drawnCard);
        $this->assertCount($initialCount - 1, $deck->getCards());

        // Dra alla kort för att säkerställa att vi får null när däcket är tomt
        for ($I = 0; $I < $initialCount - 1; $I++) {
            $deck->drawCard();
        }

        // Kontrollera att däck är tomt, dvs null.
        $this->assertNull($deck->drawCard());
    }
}
