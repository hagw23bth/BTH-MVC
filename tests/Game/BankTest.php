<?php

namespace App\Tests\Game;

use PHPUnit\Framework\TestCase;
use App\Game\Bank;
use App\Card\CardDeck;
use App\Card\CardGraphic;

class BankTest extends TestCase
{
    // Testa att dra kort tills poängen är minst 17
    public function testDrawCard()
    {
        $deck = new CardDeck();
        $bank = new Bank();
        $bank->drawCard($deck);

        $this->assertGreaterThanOrEqual(17, $bank->getScore());
    }

    // Testa att ingen ytterligare kort dras när poängen är 17 eller högre
    public function testNoAdditionalDrawWhenScoreIs17OrHigher()
    {
        $deck = new CardDeck();
        $deck->shuffleDeck();
        $bank = new Bank();
        
        // Manipulera bankens poäng direkt för att testa scenariot
        while ($bank->getScore() < 17) {
            $card = new CardGraphic('Hearts', 10);
            $bank->addCard($card);
        }

        // Behåll kortleken för att spåra antalet kort innan drawCard anropas
        $initialCardCount = count($deck->getCards());
        
        // Försök att dra kort när poängen är minst 17
        $bank->drawCard($deck);
        
        // Kontrollera att inga ytterligare kort dras
        $this->assertEquals($initialCardCount, count($deck->getCards()));
    }

    // Testar funktion av ärvd metod getHand
    public function testGetHand()
    {
        $deck = new CardDeck();
        $deck->shuffleDeck();
        $bank = new Bank();
        
        // Dra ett kort och kontrollera att handen innehåller ett kort
        $bank->drawCard($deck);
        $hand = $bank->getHand();
        
        // Säkerställer att handen inte är tom efter att ett kort dragits
        $this->assertNotEmpty($hand);

        // Kontrollera att alla kort i handen är av en instans av CardGraphic
        foreach ($hand as $card) {
            $this->assertInstanceOf(CardGraphic::class, $card);
        }
    }

    // Testar funjtion av ärvd metod addCard
    public function testAddCard()
    {
        $bank = new Bank();
        $card = new CardGraphic('Spades', 5);
        $bank->addCard($card);

        // Kontrollera att bankens poäng är 5
        $this->assertEquals(5, $bank->getScore());
        
        // Kontrollera att handen innehåller kortet
        $hand = $bank->getHand();
        $this->assertNotEmpty($hand); // Säkerställer att handen inte är tom efter att ett kort har lagts till
        $this->assertSame($card, $hand[0]); // Kontrollerar att det dragna kortet är samma objekt som finns i handen
    }
}

