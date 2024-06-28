<?php

namespace App\Controller;

use App\Service\MarkdownParser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MetricsController extends AbstractController
{
    #[Route("/metrics", name: "metrics")]
    public function metrics(MarkdownParser $markdownParser): Response
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/content/metrics.md';
        $htmlContent = $markdownParser->parse($filePath);

        return $this->render('metrics.html.twig', [
            'content' => $htmlContent,
        ]);
    }
}
