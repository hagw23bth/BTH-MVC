<?php

namespace App\Tests;

use App\Game\GameService;
use App\Card\CardDeck;
use App\Game\Player;
use App\Game\Bank;
use App\Card\CardGraphic;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Session\Storage\MockArraySessionStorage;
use Symfony\Component\HttpFoundation\Session\Session;

class GameServiceTest extends TestCase
{
    private Session $session;
    private GameService $gameService;

    // Set up metoden körs innan varje test. Här initieras session och gameService.
    protected function setUp(): void
    {
        // MockArraySessionStorage används för att emulera sessionslagring
        $this->session = new Session(new MockArraySessionStorage());
        $this->gameService = new GameService();
    }

    // Testar att spelet initialiseras korrekt.
    public function testInitializeGame(): void
    {
        // Kör initializeGame-metoden
        $this->gameService->initializeGame($this->session);

        // Kontrollera att sessionen innehåller rätt objekt efter initialisering
        $this->assertInstanceOf(CardDeck::class, $this->session->get('deck'));
        $this->assertInstanceOf(Player::class, $this->session->get('player'));
        $this->assertInstanceOf(Bank::class, $this->session->get('bank'));
        $this->assertFalse($this->session->get('game_over'));
        $this->assertTrue($this->session->get('player_turn'));
    }

    // Testar att spela en tur
    public function testPlayTurn(): void
    {
        // Initiera spelet först
        $this->gameService->initializeGame($this->session);
        $this->session->set('player_turn', false);

        // Mock-objekt för Bank
        $bankMock = $this->createMock(Bank::class);
        $bankMock->expects($this->once())
                 ->method('drawCard');

        $this->session->set('bank', $bankMock);

        $this->gameService->playTurn($this->session);

        $this->assertTrue($this->session->get('game_over'));
        $this->assertIsString($this->session->get('result_message'));
    }

    // Testar att dra ett kort
    public function testDrawCard(): void
    {
        // Initiera spelet först
        $this->gameService->initializeGame($this->session);

        // Mock-objekt för CardDeck och Player
        $deckMock = $this->createMock(CardDeck::class);
        $cardMock = $this->createMock(CardGraphic::class);
        $deckMock->method('drawCard')->willReturn($cardMock);

        $playerMock = $this->createMock(Player::class);
        $playerMock->expects($this->once())
                   ->method('addCard')
                   ->with($cardMock);

        $this->session->set('deck', $deckMock);
        $this->session->set('player', $playerMock);

        $this->gameService->drawCard($this->session);

        // Kontrollera att spelaren har fått ett kort
        $this->assertTrue($this->session->has('deck'));
        $this->assertTrue($this->session->has('player'));
    }

    // Testar att passera turen
    public function testPassTurn(): void
    {
        // Initiera spelet först
        $this->gameService->initializeGame($this->session);
        $this->gameService->passTurn($this->session);

        // Kontrollera att player_turn är satt till false efter att ha passerat turen
        $this->assertFalse($this->session->get('player_turn'));
    }

    // Testar att starta om spelet
    public function testRestartGame(): void
    {
        // Initiera spelet först
        $this->gameService->initializeGame($this->session);
        $this->gameService->restartGame($this->session);

        // Kontrollera att alla spelsessioner har rensats efter omstart
        $this->assertNull($this->session->get('deck'));
        $this->assertNull($this->session->get('player'));
        $this->assertNull($this->session->get('bank'));
        $this->assertNull($this->session->get('game_over'));
        $this->assertNull($this->session->get('player_turn'));
    }
}
