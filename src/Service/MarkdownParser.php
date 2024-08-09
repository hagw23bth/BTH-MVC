<?php

namespace App\Service;

use League\CommonMark\CommonMarkConverter;
use Symfony\Component\Filesystem\Exception\FileNotFoundException;
use Symfony\Component\Filesystem\Filesystem;

class MarkdownParser
{
    private CommonMarkConverter $converter;
    private Filesystem $filesystem;

    public function __construct()
    {
        $this->converter = new CommonMarkConverter();
        $this->filesystem = new Filesystem();
    }

    public function parse(string $filePath): string
    {
        if (!$this->filesystem->exists($filePath)) {
            throw new FileNotFoundException(sprintf('The file "%s" does not exist.', $filePath));
        }

        $markdownContent = file_get_contents($filePath);

        if ($markdownContent === false) {
            throw new \RuntimeException(sprintf('Failed to read the file "%s".', $filePath));
        }

        return $this->converter->convertToHtml($markdownContent);
    }
}