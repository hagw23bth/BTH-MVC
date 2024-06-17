<?php

namespace App\Controller;

use App\Card\CardDeck;
use App\Card\Card;
use App\Card\CardGraphic;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class APIController extends AbstractController
{
    // API route som visar ett dagligt citat
    #[Route("/api/quote", name: "api_quote", methods: ["GET"])]
    public function quote(): JsonResponse
    {
        $quotes = [
            "The way to get started is to quit talking and begin doing. - Walt Disney",
            "Life is what happens when you're busy making other plans. - John Lennon",
            "The future belongs to those who believe in the beauty of their dreams. - Eleanor Roosevelt",
        ];
        $quote = $quotes[array_rand($quotes)];

        return $this->json([
            'date' => date('Y-m-d'),
            'timestamp' => time(),
            'daily_quote' => $quote
        ]);
    }

    // API route som returnerar hela kortleken sorterad per färg och värde
    #[Route("/api/deck", name: "api_deck", methods: ["GET"])]
    public function getDeck(): JsonResponse
    {
        $deck = new CardDeck();
        $deck->initializeDeck(); // Skapar och fyller kortleken
        $deck->sortDeck(); // Sorterar kortleken

        // Konvertera varje kort i kortleken till en array
        $cardsArray = array_map(function ($card) {
            return $card->toArray();
        }, $deck->getCards());

        return $this->json([
            'deck' => $cardsArray
        ]);
    }

    // Blandar kortleken och returnerar den som en JSON-struktur.
    // Den blandade kortleken sparas i sessionen.
    #[Route('/api/deck/shuffle', name: 'api_deck_shuffle', methods: ['POST'])]
    public function shuffleDeck(SessionInterface $session): JsonResponse
    {
        if (!$session->isStarted()) {
            $session->start();
        }

        // Skapar en ny instans av CardDeck
        $cardDeck = new CardDeck();

        // Blandar denna instans
        $cardDeck->shuffleDeck();

        // Sparar den blandade kortleken till session
        $session->set('deck', serialize($cardDeck->getCards()));

        // Kontrollerar att sessionens data är en sträng
        $deckData = $session->get('deck');
        if (!is_string($deckData)) {
            return $this->json(['error' => 'Failed to retrieve the deck from session.'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        // Använd allowed_classes-parametern för unserialize för att säkerställa att endast Card-klassen deserialiseras
        $cards = unserialize($deckData, ['allowed_classes' => [Card::class, CardGraphic::class]]);
        if (!is_array($cards)) {
            return $this->json(['error' => 'Failed to unserialize the deck.'], Response::HTTP_INTERNAL_SERVER_ERROR);
        } 
    
        // Konvertera kortleken till en array som kan serialiseras till JSON
        $cardsArray = array_map(function ($card) {
            return $card->toArray();
        }, $cards);

        // Returnerar den blandade kortleken som JSON
        return $this->json([
            'deck' => $cardsArray
        ]);
    }

    // API Route som drar 1 kort från kortleken och visar upp dem i en JSON struktur.
    // Visar även antalet kort som är kvar i kortleken.
    // Kortleken sparas i sessionen
    #[Route('/api/deck/draw', name: 'api_deck_draw', methods: ['POST'])]
    public function drawCard(SessionInterface $session): JsonResponse
    {
        if (!$session->isStarted()) {
            $session->start();
        }
    
        if ($session->has('deck')) {
            // Om en serialiserad kortlek finns i sessionen, deserialisera den
            $deckData = $session->get('deck');
            if (!is_string($deckData)) {
                return $this->json(['error' => 'Ingen kortlek finns tillgänglig. Blanda kortleken först.'], Response::HTTP_BAD_REQUEST);
            }
            $cards = unserialize($deckData, ['allowed_classes' => [Card::class, CardGraphic::class]]);
            if (!is_array($cards)) {
                return $this->json(['error' => 'Ingen kortlek finns tillgänglig. Blanda kortleken först.'], Response::HTTP_BAD_REQUEST);
            }
        } else {
            // Om ingen kortlek finns, returnera ett felmeddelande
            return $this->json(['error' => 'Ingen kortlek finns tillgänglig. Blanda kortleken först.'], Response::HTTP_BAD_REQUEST);
        }
    
        if (empty($cards)) {
            return $this->json(['error' => 'Inga fler kort att dra.'], Response::HTTP_BAD_REQUEST);
        }
    
        // Dra det översta kortet, kontrollera att $cards är en array
        $drawnCard = array_shift($cards);
        if (!$drawnCard instanceof Card) {
            return $this->json(['error' => 'Fel vid dragning av kort.'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    
        // Spara den uppdaterade kortleken tillbaka i sessionen
        $session->set('deck', serialize($cards));
    
        return $this->json([
            'drawnCard' => $drawnCard->toArray(),
            'remaining' => count($cards)
        ]);
    }

    // API Route som drar ett antal (:number) kort från kortleken och visar upp dem i en JSON struktur.
    // Visar även antalet kort som är kvar i kortleken.
    // Kortleken sparas i sessionen
    #[Route('/api/deck/draw/{number}', name: 'api_deck_draw_number', methods: ['POST'])]
    public function drawMultipleCards(SessionInterface $session, int $number): JsonResponse
    {
        if (!$session->has('deck')) {
            return $this->json(['error' => 'Ingen kortlek finns tillgänglig. Blanda kortleken först.'], Response::HTTP_BAD_REQUEST);
        }
    
        // Kontrollera att sessionens värde är en sträng innan unserialize
        $deckData = $session->get('deck');
        if (!is_string($deckData)) {
            return $this->json(['error' => 'Ingen kortlek finns tillgänglig. Blanda kortleken först.'], Response::HTTP_BAD_REQUEST);
        }
    
        // Om en serialiserad kortlek finns i sessionen, deserialisera den
        $cards = unserialize($deckData, ['allowed_classes' => [Card::class, CardGraphic::class]]);
        if (!is_array($cards)) {
            return $this->json(['error' => 'Ingen kortlek finns tillgänglig. Blanda kortleken först.'], Response::HTTP_BAD_REQUEST);
        }
    
        if (count($cards) < $number) {
            return $this->json(['error' => 'Inte tillräckligt med kort att dra.'], Response::HTTP_BAD_REQUEST);
        }
    
        $drawnCards = [];
        for ($i = 0; $i < $number; $i++) {
            // Dra det översta kortet, kontrollera att $cards är en array
            $drawnCard = array_shift($cards);
            if (!$drawnCard instanceof Card) {
                return $this->json(['error' => 'Fel vid dragning av kort.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            $drawnCards[] = $drawnCard->toArray();
        }
    
        // Spara den uppdaterade kortleken tillbaka i sessionen
        $session->set('deck', serialize($cards));
    
        return $this->json([
            'drawnCards' => $drawnCards,
            'remaining' => count($cards)
        ]);
    }

    #[Route('/api/game', name: 'api_game_status', methods: ['GET'])]
    public function gameStatus(SessionInterface $session): JsonResponse
    {
        // Hämta spelstatus från sessionen
        $deck = $session->get('deck');
        $player = $session->get('player');
        $bank = $session->get('bank');
        $gameOver = $session->get('game_over');
        $playerTurn = $session->get('player_turn');

        // Kontrollera om spelet är initierat
        if (!$deck || !$player || !$bank) {
            return $this->json([
                'error' => 'Spelet är inte initierat',
            ]);
        }

        // Bygg upp spelstatus som en JSON-struktur
        $gameStatus = [
            'deck' => $deck,
            'player' => unserialize($player),
            'bank' => unserialize($bank),
            'game_over' => $gameOver,
            'player_turn' => $playerTurn,
        ];

        return $this->json($gameStatus);
    }
}

// Testar ovanstående API routes med curl
// Använder cookies för att kontrollera sessionhanteringen
// curl -c cookies.txt -X POST http://localhost:8080/api/deck/shuffle
// curl -b cookies.txt -X POST http://localhost:8080/api/deck/draw
// curl -b cookies.txt -X POST http://localhost:8080/api/deck/draw/3
