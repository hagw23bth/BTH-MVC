<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\MarkdownPageRenderer;
use App\Entity\FishStock;
use App\Entity\MarineProtection;
use App\Repository\FishStockRepository;
use App\Repository\MarineProtectionRepository;
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

    #[Route("/proj/goals", name: "proj_goals")]
    public function indicators(MarkdownPageRenderer $renderer): Response
    {
        $projectDir = $this->getParameter('kernel.project_dir');
        $markdownFilePath = $projectDir . '/content/proj/goals.md';
        $content = $renderer->renderPage($markdownFilePath);

        return $this->render('proj/goals.html.twig', [
            'content' => $content,
        ]);
    }

    #[Route("/data", name: "proj_data")]
    public function data(MarkdownPageRenderer $renderer, FishStockRepository $fishStockRepository, MarineProtectionRepository $marineProtectionRepository): Response
    {
        $projectDir = $this->getParameter('kernel.project_dir');
        $markdownFilePath = $projectDir . '/content/proj/data.md';
        $content = $renderer->renderPage($markdownFilePath);

        // Hämta data om fiskbestånd och marint skydd
        $fishStockArray = $fishStockRepository->findAllSortedByYearAsArray();
        $marineProtectionData = $marineProtectionRepository->findAllMarineProtectionData();

        return $this->render('proj/data.html.twig', [
            'content' => $content,
            'fishStockData' => $fishStockArray,
            'marineProtectionData' => $marineProtectionData,
        ]);
    }
}
