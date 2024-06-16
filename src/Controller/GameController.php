<?php

namespace App\Controller;

use App\Card\CardDeck;
use App\Card\Card;
use App\Card\CardGraphic;
use App\Game\Player;
use App\Game\Bank;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;

class GameController extends AbstractController
{
    #[Route("/game", name: "game")]
    public function gameHome(SessionInterface $session): Response
    {
        return $this->render('game/home.html.twig');
    }

    #[Route("/game/doc", name: "doc")]
    public function doc(): Response
    {
        return $this->render('game/doc.html.twig');
    }

    #[Route('/game/play', name: 'game_play')]
    public function play(SessionInterface $session): Response
    {
        // Initiera spelet om det inte redan är initierat
        if (!$session->has('deck')) {
            $deck = new CardDeck();
            $deck->shuffleDeck();
            
            $player = new Player();
            $bank = new Bank();
                
            $session->set('deck', serialize($deck));
            $session->set('player', serialize(new Player()));
            $session->set('bank', serialize(new Bank()));
            $session->set('game_over', false);
            $session->set('player_turn', true);
        }

        // Hämta objekten från sessionen
        $deck = unserialize($session->get('deck'));
        $player = unserialize($session->get('player'));
        $bank = unserialize($session->get('bank'));
        $gameOver = $session->get('game_over');
        $playerTurn = $session->get('player_turn');

        if (!$gameOver && !$playerTurn) {
            // Bankens tur att spela
            while ($bank->getScore() < 17) {
                $bank->addCard($deck->drawCard());
            }

            $playerScore = $player->getScore();
            $bankScore = $bank->getScore();

            $session->set('game_over', true);

            if ($bankScore > 21 || $playerScore > $bankScore) {
                $session->set('result_message', 'Du vann!');
            } elseif ($playerScore < $bankScore) {
                $session->set('result_message', 'Banken vann!');
            } else {
                $session->set('result_message', 'Det blev oavgjort!');
            }

            $session->set('deck', serialize($deck));
            $session->set('player', serialize($player));
            $session->set('bank', serialize($bank));

            return $this->redirectToRoute('game_play');
        }

        return $this->render('game/play.html.twig', [
            'deck' => $deck,
            'player' => $player,
            'bank' => $bank,
            'game_over' => $gameOver,
            'player_turn' => $playerTurn,
            'result_message' => $session->get('result_message')
        ]);
    }

    #[Route('/game/draw-card', name: 'game_draw_card')]
    public function drawCard(SessionInterface $session): Response
    {
        $deck = unserialize($session->get('deck'));
        $player = unserialize($session->get('player'));

        $player->addCard($deck->drawCard());

        if ($player->getScore() > 21) {
            $session->set('game_over', true);
            $session->set('result_message', 'Banken vann!');
            $session->set('player_turn', false);
        }

        $session->set('deck', serialize($deck));
        $session->set('player', serialize($player));

        return $this->redirectToRoute('game_play');
    }

    #[Route('/game/pass', name: 'game_pass')]
    public function pass(SessionInterface $session): Response
    {
        $session->set('player_turn', false);

        return $this->redirectToRoute('game_play');
    }

    #[Route('/game/restart', name: 'game_restart')]
    public function restart(SessionInterface $session): Response
    {
        $session->clear();

        return $this->redirectToRoute('game_play');
    }
    
}
