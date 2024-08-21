<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\MarkdownPageRenderer;

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

    #[Route("/proj/data", name: "proj_data")]
    public function data(MarkdownPageRenderer $renderer): Response
    {
        $projectDir = $this->getParameter('kernel.project_dir');
        $markdownFilePath = $projectDir . '/content/proj/data.md';
        $content = $renderer->renderPage($markdownFilePath);

        return $this->render('proj/data.html.twig', [
            'content' => $content,
        ]);
    }
}
