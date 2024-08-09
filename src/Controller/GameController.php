<?php

namespace App\Controller;

use App\Game\GameService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class GameController extends AbstractController
{
    private $gameService;

    public function __construct(GameService $gameService)
    {
        $this->gameService = $gameService;
    }

    #[Route("/game", name: "game")]
    public function gameHome(): Response
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
        $this->gameService->initializeGame($session);
        $this->gameService->playTurn($session);

        return $this->render('game/play.html.twig', [
            'deck' => $session->get('deck'),
            'player' => $session->get('player'),
            'bank' => $session->get('bank'),
            'game_over' => $session->get('game_over'),
            'player_turn' => $session->get('player_turn'),
            'result_message' => $session->get('result_message')
        ]);
    }

    #[Route('/game/draw-card', name: 'game_draw_card')]
    public function drawCard(SessionInterface $session): Response
    {
        $this->gameService->drawCard($session);

        return $this->redirectToRoute('game_play');
    }

    #[Route('/game/pass', name: 'game_pass')]
    public function pass(SessionInterface $session): Response
    {
        $this->gameService->passTurn($session);

        return $this->redirectToRoute('game_play');
    }

    #[Route('/game/restart', name: 'game_restart')]
    public function restart(SessionInterface $session): Response
    {
        $this->gameService->restartGame($session);

        return $this->redirectToRoute('game_play');
    }
}
