<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\MarkdownPageRenderer;
use App\Entity\FishStock;
use App\Repository\FishStockRepository;
use Doctrine\Persistence\ManagerRegistry;

class ProjectController extends AbstractController
{
    #[Route("/proj", name: "proj_home")]
    public function home(MarkdownPageRenderer $renderer): Response
    {
        $projectDir = $this->getParameter('kernel.project_dir');
        $markdownFilePath = $projectDir . '/content/proj/home.md';
        $content = $renderer->renderPage($markdownFilePath);

        return $this->render('proj/home.html.twig', [
            'content' => $content,
        ]);
    }

    #[Route("/proj/about", name: "proj_about")]
    public function about(MarkdownPageRenderer $renderer): Response
    {
        $projectDir = $this->getParameter('kernel.project_dir');
        $markdownFilePath = $projectDir . '/content/proj/about.md';
        $content = $renderer->renderPage($markdownFilePath);

        return $this->render('proj/about.html.twig', [
            'content' => $content,
        ]);
    }

    #[Route("/proj/indicators", name: "proj_indicators")]
    public function indicators(MarkdownPageRenderer $renderer): Response
    {
        $projectDir = $this->getParameter('kernel.project_dir');
        $markdownFilePath = $projectDir . '/content/proj/indicators.md';
        $content = $renderer->renderPage($markdownFilePath);

        return $this->render('proj/indicators.html.twig', [
            'content' => $content,
        ]);
    }

    #[Route("/data", name: "proj_data")]
    public function data(MarkdownPageRenderer $renderer, FishStockRepository $fishStockRepository): Response
    {
        $projectDir = $this->getParameter('kernel.project_dir');
        $markdownFilePath = $projectDir . '/content/proj/data.md';
        $content = $renderer->renderPage($markdownFilePath);

        // Använder metod i repostery för att hämta data
        $fishStockArray = $fishStockRepository->findAllSortedByYearAsArray();
        return $this->render('proj/data.html.twig', [
            'content' => $content,
            'fishStockData' => $fishStockArray,
        ]);
    }
}
