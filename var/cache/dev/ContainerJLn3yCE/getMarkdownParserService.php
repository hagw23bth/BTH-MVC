<?php

namespace ContainerJLn3yCE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMarkdownParserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Service\MarkdownParser' shared autowired service.
     *
     * @return \App\Service\MarkdownParser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/MarkdownParser.php';

        return $container->services['App\\Service\\MarkdownParser'] = new \App\Service\MarkdownParser();
    }
}
