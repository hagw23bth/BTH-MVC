<?php

namespace App\Service;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Filesystem\Exception\FileNotFoundException;

class MarkdownPageRenderer
{
    private MarkdownParser $parser;

    public function __construct(MarkdownParser $parser)
    {
        $this->parser = $parser;
    }

    public function renderPage(string $markdownFilePath): string
    {
        // Kontrollera om filen finns
        if (!file_exists($markdownFilePath)) {
            throw new FileNotFoundException(sprintf('The file "%s" does not exist.', $markdownFilePath));
        }

        // Använd MarkdownParser för att konvertera innehållet
        return $this->parser->parse($markdownFilePath);
    }
}
