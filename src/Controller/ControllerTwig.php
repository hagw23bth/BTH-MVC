<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerTwig extends AbstractController
{
    #[Route("/lucky", name: "lucky")]
    public function number(): Response
    {
        $number = random_int(0, 100);

        $data = [
            'number' => $number
        ];

        return $this->render('lucky_number.html.twig', $data);
    }

    #[Route("/", name: "me")]
    public function me(): Response
    {
        return $this->render('me.html.twig');
    }

    #[Route("/about", name: "about")]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    #[Route("/report", name: "report")]
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }

    // Route to show API routes
    #[Route("/api", name: "api")]
    public function api(): Response
    {
        $apiRoutes = [
            [
                'title' => 'Quote',
                'path' => '/api/quote',
                'name' => 'api_quote',
                'method' => 'GET',
                'description' => (
                    'Retunerar ett JSON svar som innehåller dagens citat, 
                    dagens datum och en tidsstämpel för när svaret genererades.'
                )
            ],
            [
                'title' => 'Deck',
                'path' => '/api/deck',
                'name' => 'api_deck',
                'method' => 'GET',
                'description' => 'Returnerar en JSON-struktur med hela kortleken sorterad per färg och värde.'
            ],
            [
                'title' => 'Shuffle Deck',
                'path' => '/api/deck/shuffle',
                'name' => 'api_deck_shuffle',
                'method' => 'POST',
                'description' => (
                    'Blandar kortleken och returnerar den som en JSON-struktur. 
                    Den blandade kortleken sparas i sessionen.'
                )
            ], // TESTA (bash): curl -c cookies.txt -X POST http://localhost:8080/api/deck/shuffle
            [
                'title' => 'Draw',
                'path' => '/api/deck/draw',
                'name' => 'api_deck_draw',
                'method' => 'POST',
                'description' => (
                    'Drar 1 kort från kortleken och visar upp dem i en JSON struktur.
                    Visar även antalet kort som är kvar i kortleken.
                    Kortleken sparas i sessionen'
                )
            ], // TESTA (bash): curl -b cookies.txt -X POST http://localhost:8080/api/deck/draw
            [
                'title' => 'Draw Multiple Cards',
                'path' => '/api/deck/draw/{number}',
                'name' => 'api_deck_draw_number',
                'method' => 'POST',
                'description' => (
                    'Drar ett antal (:number) kort från kortleken och visar upp dem i en JSON struktur.
                    Visar även antalet kort som är kvar i kortleken.
                    Kortleken sparas i sessionen'
                )
                ], // TESTA (bash): curl -X POST http://localhost:8080/api/deck/draw/3
                [
                    'title' => 'Game Status',
                    'path' => '/api/game',
                    'name' => 'api_game_status',
                    'method' => 'GET',
                    'description' => (
                        'Visar den aktuella ställningen för spelet i en JSON-struktur.'
                    )
                ]
        ];

        return $this->render('api.html.twig', ['apiRoutes' => $apiRoutes]);
    }
}
