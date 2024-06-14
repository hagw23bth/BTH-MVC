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

class GameController extends AbstractController
{
    #[Route("/game", name: "game")]
    public function gameHome(): Response
    {
        return $this->render('game/home.html.twig');
    }

    #[Route("/game/doc", name: "doc")]
    public function gameDoc(): Response
    {
        return $this->render('game/doc.html.twig');
    }

    #[Route("/game/play", name: "play")]
    public function gamePlay(): Response
    {
        return $this->render('game/play.html.twig');
    }
}
