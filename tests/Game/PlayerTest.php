<?php

namespace App\Tests\Game;

use PHPUnit\Framework\TestCase;
use App\Game\Player;
use App\Card\CardDeck;
use App\Card\CardGraphic;

class PlayerTest extends TestCase
{
    // Testar att dragning av kort ökar poäng
    public function testDrawCard(): void
    {
        $deck = new CardDeck();
        $deck->shuffleDeck();
        $player = new Player();

        // Dra ett kort
        $player->drawCard($deck);

        // Kontrollera att spelarens poäng har ökat
        $this->assertGreaterThan(0, $player->getScore());
    }

    // Kontrollerar att handen inte är tom efter dragning av kort samt att alla kort i handen är av typen CardGraphic.
    public function testGetHand(): void
    {
        $deck = new CardDeck();
        $deck->shuffleDeck();
        $player = new Player();

        // Dra ett kort och kontrollera att handen innehåller ett kort
        $player->drawCard($deck);
        $hand = $player->getHand();

        // Kontrollera att handen inte är tom
        $this->assertNotEmpty($hand);

        // Kontrollera att alla kort i handen är av typen CardGraphic
        foreach ($hand as $card) {
            $this->assertInstanceOf(CardGraphic::class, $card);
        }
    }

    // Kontrollerar att spelarens poäng har uppdaterats korrekt och att kortet finns i spelarens hand.
    public function testAddCard(): void
    {
        $player = new Player();
        $card = new CardGraphic('Spades', 5);
        $player->addCard($card);

        // Kontrollera att spelarens poäng är 5
        $this->assertEquals(5, $player->getScore());

        // Kontrollera att handen innehåller kortet
        $hand = $player->getHand();
        $this->assertNotEmpty($hand);
        $this->assertSame($card, $hand[0]);
    }

    // Kontrollerar att spelarens poäng är korrekt beräknat
    public function testGetScore(): void
    {
        $player = new Player();
        $card1 = new CardGraphic('Hearts', 7);
        $card2 = new CardGraphic('Diamonds', 10);

        // Lägg till kort och kontrollera poängen
        $player->addCard($card1);
        $player->addCard($card2);

        // Kontrollera att spelarens poäng är korrekt
        $this->assertEquals(17, $player->getScore());
    }
}
