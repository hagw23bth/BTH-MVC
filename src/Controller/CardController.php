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
    public function shuffle(SessionInterface $session): Response //SessionInterface startar session
    {
        // Skapar en ny instans av CardDeck
        $cardDeck = new CardDeck();
    
        // Blandar denna instans
        $cardDeck->shuffleDeck();
    
        // Sparar den blandade kortleken till session
        $session->set('deck', serialize($cardDeck->getCards()));
    
        // Hämtar den blandade kortleken från session
        $deckData = $session->get('deck');
        if (!is_string($deckData)) {
            return $this->render('card/show_deck.html.twig', ['deck' => []]);
        }
        $deck = unserialize($deckData, ['allowed_classes' => [Card::class, CardGraphic::class]]);
        if (!is_array($deck)) {
            return $this->render('card/show_deck.html.twig', ['deck' => []]);
        }
    
        // Skickar den blandade kortleken till template
        return $this->render('card/show_deck.html.twig', ['deck' => $deck]);
    }

    #[Route("/card/deck/draw", name: "draw")]
    public function draw(SessionInterface $session): Response
    {
        if ($session->has('deck')) {
            // Om en serialiserad kortlek finns i sessionen, deserialisera den
            $deckData = $session->get('deck');
            if (!is_string($deckData)) {
                return $this->render('card/draw.html.twig', [
                    'drawnCard' => null,
                    'remaining' => 0,
                    'hand' => []
                ]);
            }
            $cards = unserialize($deckData, ['allowed_classes' => [Card::class, CardGraphic::class]]);
            if (!is_array($cards)) {
                return $this->render('card/draw.html.twig', [
                    'drawnCard' => null,
                    'remaining' => 0,
                    'hand' => []
                ]);
            }
        } else {
            // Om ingen kortlek finns, skapa en ny, blanda den och spara den som en serialiserad array
            $deck = new CardDeck();
            $deck->shuffleDeck();
            $cards = $deck->getCards();
            $session->set('deck', serialize($cards));
        }

        // Dra det första kortet om det finns några kort kvar
        $drawnCard = array_shift($cards);
        if (!$drawnCard instanceof CardGraphic) {
            return $this->render('card/draw.html.twig', [
                'drawnCard' => null,
                'remaining' => 0,
                'hand' => []
            ]);
        }

        // Spara den uppdaterade arrayen av kort (med ett kort mindre) till sessionen
        $session->set('deck', serialize($cards));

        // Hämta och uppdatera "handen" med det nyligen dragna kortet
        $handSerialized = $session->get('hand');
        if (!is_string($handSerialized)) {
            $hand = [];
        } else {
            $hand = unserialize($handSerialized, ['allowed_classes' => [Card::class, CardGraphic::class]]);
            if (!is_array($hand)) {
                $hand = [];
            }
        }

        // Lägg till det nyligen dragna kortet till handen
        $hand[] = $drawnCard;

        // Uppdatera "handen" i sessionen med det nyligen dragna kortet
        $session->set('hand', serialize($hand));

        // Skicka det senaste dragna kortet och antalet kvarvarande kort till vyn
        return $this->render('card/draw.html.twig', [
            'drawnCard' => $drawnCard,
            'remaining' => count($cards),
            'hand' => $hand
        ]);
    }

    #[Route("/card/deck/draw/number", name: "draw_number")]
    public function drawNumber(Request $request, SessionInterface $session): Response
    {
        // Säkerställ att en kortlek finns tillgänglig
        if (!$session->has('deck')) {
            $deck = new CardDeck();
            $deck->shuffleDeck();
            $session->set('deck', serialize($deck->getCards()));
        }

        $deckData = $session->get('deck');
        if (!is_string($deckData)) {
            return $this->render('card/draw_number.html.twig', [
                'drawnCards' => [],
                'remaining' => 0,
                'maxDraw' => 0
            ]);
        }
        $cards = unserialize($deckData, ['allowed_classes' => [Card::class, CardGraphic::class]]);
        if (!is_array($cards)) {
            return $this->render('card/draw_number.html.twig', [
                'drawnCards' => [],
                'remaining' => 0,
                'maxDraw' => 0
            ]);
        }

        $number = $request->query->getInt('number', 1);

        // Säkerställ att önskat antal kort inte överstiger kvarvarande kort i leken
        $number = min($number, count($cards));

        // Dra de önskade antalet kort och uppdatera sessionen
        $drawnCards = [];
        for ($i = 0; $i < $number; $i++) {
            $drawnCard = array_shift($cards);
            if (!$drawnCard instanceof CardGraphic) {
                return $this->render('card/draw_number.html.twig', [
                    'drawnCards' => [],
                    'remaining' => 0,
                    'maxDraw' => 0
                ]);
            }
            $drawnCards[] = $drawnCard;
        }

        // Uppdatera "handen" i sessionen med de nyligen dragna korten
        $handSerialized = $session->get('hand');
        if (!is_string($handSerialized)) {
            $hand = [];
        } else {
            $hand = unserialize($handSerialized, ['allowed_classes' => [Card::class, CardGraphic::class]]);
            if (!is_array($hand)) {
                $hand = [];
            }
        }
        foreach ($drawnCards as $card) {
            $hand[] = $card;
        }

        // Spara uppdaterad kortlek och hand i sessionen
        $session->set('deck', serialize($cards));
        $session->set('hand', serialize($hand));

        // Nuvarande antal kvarvarande kort i leken är längden av den uppdaterade kortleken
        $remaining = count($cards);

        return $this->render('card/draw_number.html.twig', [
            'drawnCards' => $drawnCards,
            'remaining' => $remaining,
            'maxDraw' => $remaining
        ]);
    }

    // Route för att visa innehåll i session
    #[Route("/session", name: "session")]
    public function showSession(SessionInterface $session): Response
    {
        $sessionData = $session->all();
        return $this->render('card/session.html.twig', ['sessionData' => $sessionData]);
    }

    // Route för att radera session
    #[Route("/session/delete", name: "session_delete")]
    public function deleteSession(SessionInterface $session): Response
    {
        $session->clear();
        $this->addFlash('success', 'Sessionen har raderats.');

        return $this->redirectToRoute('session');
    }
}
