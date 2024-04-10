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

    #[Route("/api", name: "api")]
    public function api(): Response
    {
        $apiRoutes = [
            [
                'title' => 'Daily Quote',
                'path' => '/api/quote',
                'description' => 'Returns a random quote along with the current date and timestamp.'
            ]
        ];

        return $this->render('api.html.twig', ['apiRoutes' => $apiRoutes]);
    }

    #[Route("/api/quote", name: "quote")]
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
}
