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

class CardController extends AbstractController
{
    #[Route("/card", name: "card")]
    public function home(): Response
    {
        return $this->render('card/home.html.twig');
    }

    #[Route("/card/deck", name: "deck")]
    public function deck(): Response
    {
        $cardDeck = new CardDeck();
        $cardDeck->sortDeck();

        return $this->render('card/show_deck.html.twig', ['deck' => $cardDeck->getCards()]);
    }

    #[Route("/shuffle", name: "shuffle")]
    public function shuffle(SessionInterface $session): Response
    {
        $cardDeck = new CardDeck();
        $cardDeck->shuffleDeck();
        $session->set('deck', $cardDeck);

        return $this->render('card/show_deck.html.twig', ['deck' => $cardDeck->getCards()]);
    }

    #[Route("/card/deck/draw", name: "draw")]
    public function draw(SessionInterface $session): Response
    {
        $deck = $session->get('deck');
        if (!$deck instanceof CardDeck) {
            return $this->render('card/draw.html.twig', [
                'drawnCard' => null,
                'remaining' => 0,
                'hand' => []
            ]);
        }

        $drawnCard = $deck->drawCard();
        if (!$drawnCard instanceof CardGraphic) {
            return $this->render('card/draw.html.twig', [
                'drawnCard' => null,
                'remaining' => 0,
                'hand' => []
            ]);
        }

        $session->set('deck', $deck);

        /** @var CardGraphic[] $hand */
        $hand = $session->get('hand', []);
        if (!is_array($hand)) {
            $hand = [];
        }
        $hand[] = $drawnCard;
        $session->set('hand', $hand);

        return $this->render('card/draw.html.twig', [
            'drawnCard' => $drawnCard,
            'remaining' => count($deck->getCards()),
            'hand' => $hand
        ]);
    }


    #[Route("/card/deck/draw/number", name: "draw_number")]
    public function drawNumber(Request $request, SessionInterface $session): Response
    {
        // Säkerställ att en kortlek finns tillgänglig
        $deck = $session->get('deck');
        if (!$deck instanceof CardDeck) {
            $deck = new CardDeck();
            $deck->shuffleDeck();
            $session->set('deck', $deck);
        }

        $number = $request->query->getInt('number', 0);
        if ($number === 0) {
            return $this->render('card/draw_number.html.twig', [
                'drawnCards' => [],
                'remaining' => count($deck->getCards()),
                'maxDraw' => count($deck->getCards())
            ]);
        }

        $cards = $deck->getCards();

        // Säkerställ att önskat antal kort inte överstiger kvarvarande kort i leken
        $number = min($number, count($cards));

        // Dra de önskade antalet kort och uppdatera sessionen
        $drawnCards = [];
        for ($i = 0; $i < $number; $i++) {
            $drawnCard = $deck->drawCard();
            if ($drawnCard instanceof CardGraphic) {
                $drawnCards[] = $drawnCard;
            }
        }

        $session->set('deck', $deck);

        // Uppdatera "handen" i sessionen med de nyligen dragna korten
        $hand = $session->get('hand', []);
        if (!is_array($hand)) {
            $hand = [];
        }

        foreach ($drawnCards as $card) {
            $hand[] = $card;
        }

        $session->set('hand', $hand);

        return $this->render('card/draw_number.html.twig', [
            'drawnCards' => $drawnCards,
            'remaining' => count($deck->getCards()),
            'maxDraw' => count($deck->getCards())
        ]);
    }

    #[Route("/session", name: "session")]
    public function showSession(SessionInterface $session): Response
    {
        $sessionData = $session->all();
        return $this->render('card/session.html.twig', ['sessionData' => $sessionData]);
    }

    #[Route("/session/delete", name: "session_delete")]
    public function deleteSession(SessionInterface $session): Response
    {
        $session->clear();
        $this->addFlash('success', 'Sessionen har raderats.');

        return $this->redirectToRoute('session');
    }
}
