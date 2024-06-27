<?php

namespace App\Controller;

use App\Card\CardDeck;
use App\Card\CardGraphic;
use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class APIController extends AbstractController
{
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

    #[Route("/api/deck", name: "api_deck", methods: ["GET"])]
    public function getDeck(): JsonResponse
    {
        $deck = new CardDeck();
        $deck->initializeDeck();
        $deck->sortDeck();

        $cardsArray = array_map(function ($card) {
            return $card->toArray();
        }, $deck->getCards());

        return $this->json([
            'deck' => $cardsArray
        ]);
    }

    #[Route('/api/deck/shuffle', name: 'api_deck_shuffle', methods: ['POST'])]
    public function shuffleDeck(SessionInterface $session): JsonResponse
    {
        if (!$session->isStarted()) {
            $session->start();
        }

        $cardDeck = new CardDeck();
        $cardDeck->shuffleDeck();

        $session->set('deck', $cardDeck);

        $cardsArray = array_map(function ($card) {
            return $card->toArray();
        }, $cardDeck->getCards());

        return $this->json([
            'deck' => $cardsArray
        ]);
    }

    #[Route('/api/deck/draw', name: 'api_deck_draw', methods: ['POST'])]
    public function drawCard(SessionInterface $session): JsonResponse
    {
        if (!$session->isStarted()) {
            $session->start();
        }

        $deck = $session->get('deck');
        if (!$deck instanceof CardDeck) {
            return $this->json(['error' => 'Ingen kortlek finns tillgänglig. Blanda kortleken först.'], Response::HTTP_BAD_REQUEST);
        }

        $drawnCard = $deck->drawCard();
        if (!$drawnCard instanceof CardGraphic) {
            return $this->json(['error' => 'Fel vid dragning av kort.'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        $session->set('deck', $deck);

        return $this->json([
            'drawnCard' => $drawnCard->toArray(),
            'remaining' => count($deck->getCards())
        ]);
    }

    #[Route('/api/deck/draw/{number}', name: 'api_deck_draw_number', methods: ['POST'])]
    public function drawMultipleCards(Request $request, SessionInterface $session, int $number): JsonResponse
    {
        // Ta emot 'number' från POST-data
        $number = $request->request->getInt('number', $number);

        if (!$session->has('deck')) {
            return $this->json(['error' => 'Ingen kortlek finns tillgänglig. Blanda kortleken först.'], Response::HTTP_BAD_REQUEST);
        }

        $deck = $session->get('deck');
        if (!$deck instanceof CardDeck) {
            return $this->json(['error' => 'Ingen kortlek finns tillgänglig. Blanda kortleken först.'], Response::HTTP_BAD_REQUEST);
        }

        if (count($deck->getCards()) < $number) {
            return $this->json(['error' => 'Inte tillräckligt med kort att dra.'], Response::HTTP_BAD_REQUEST);
        }

        $drawnCards = [];
        for ($i = 0; $i < $number; $i++) {
            $drawnCard = $deck->drawCard();
            if (!$drawnCard instanceof CardGraphic) {
                return $this->json(['error' => 'Fel vid dragning av kort.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            $drawnCards[] = $drawnCard->toArray();
        }

        $session->set('deck', $deck);

        return $this->json([
            'drawnCards' => $drawnCards,
            'remaining' => count($deck->getCards())
        ]);
    }

    #[Route('/api/game', name: 'api_game_status', methods: ['GET'])]
    public function gameStatus(SessionInterface $session): JsonResponse
    {
        $deck = $session->get('deck');
        $player = $session->get('player');
        $bank = $session->get('bank');
        $gameOver = $session->get('game_over');
        $playerTurn = $session->get('player_turn');

        if (!$deck || !$player || !$bank) {
            return $this->json(['error' => 'Currently no game initated']);
        }

        return $this->json([
            'deck' => $deck,
            'player' => $player,
            'bank' => $bank,
            'game_over' => $gameOver,
            'player_turn' => $playerTurn,
        ]);
    }

    #[Route('/api/library/books', name: 'api_library_books')]
    public function getBooks(BookRepository $bookRepository): JsonResponse
    {
        $books = $bookRepository->findAllBooks();
        $response = $this->json($books);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route('/api/library/book/{isbn}', name: 'api_library_book_by_isbn')]
    public function getBookByIsbn(BookRepository $bookRepository, string $isbn): JsonResponse
    {
        $book = $bookRepository->findOneBy(['isbn' => $isbn]);
        $response = $this->json($book);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}
