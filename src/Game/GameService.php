<?php

namespace App\Game;

use App\Card\CardDeck;
use App\Card\CardGraphic;
use App\Game\Player;
use App\Game\Bank;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class GameService
{
    public function initializeGame(SessionInterface $session): void
    {
        // Initiera spelet om det inte redan är initierat
        if (!$session->has('deck')) {
            $deck = new CardDeck();
            $deck->shuffleDeck();

            $session->set('deck', $deck);
            $session->set('player', new Player());
            $session->set('bank', new Bank());
            $session->set('game_over', false);
            $session->set('player_turn', true);
        }
    }

    public function playTurn(SessionInterface $session): void
    {
        // Hämta objekten från sessionen direkt
        /** @var CardDeck $deck */
        $deck = $session->get('deck');
        /** @var Player $player */
        $player = $session->get('player');
        /** @var Bank $bank */
        $bank = $session->get('bank');
        $gameOver = $session->get('game_over');
        $playerTurn = $session->get('player_turn');

        if (!$gameOver && !$playerTurn) {
            // Bankens tur att spela
            $bank->drawCard($deck);

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

            $session->set('deck', $deck);
            $session->set('player', $player);
            $session->set('bank', $bank);
        }
    }

    public function drawCard(SessionInterface $session): void
    {
        /** @var CardDeck $deck */
        $deck = $session->get('deck');
        /** @var Player $player */
        $player = $session->get('player');

        $card = $deck->drawCard();
        if ($card instanceof \App\Card\CardGraphic) {
            $player->addCard($card);
        }

        if ($player->getScore() > 21) {
            $session->set('game_over', true);
            $session->set('result_message', 'Banken vann!');
            $session->set('player_turn', false);
        }

        $session->set('deck', $deck);
        $session->set('player', $player);
    }

    public function passTurn(SessionInterface $session): void
    {
        $session->set('player_turn', false);
    }

    public function restartGame(SessionInterface $session): void
    {
        $session->clear();
    }
}
