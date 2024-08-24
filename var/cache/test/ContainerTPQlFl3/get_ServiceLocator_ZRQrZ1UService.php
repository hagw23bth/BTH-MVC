<?php

namespace ContainerTPQlFl3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZRQrZ1UService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.ZRQrZ1U' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZRQrZ1U'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'fishStockRepository' => ['privates', 'App\\Repository\\FishStockRepository', 'getFishStockRepositoryService', true],
            'marineProtectionRepository' => ['privates', 'App\\Repository\\MarineProtectionRepository', 'getMarineProtectionRepositoryService', true],
            'renderer' => ['privates', 'App\\Service\\MarkdownPageRenderer', 'getMarkdownPageRendererService', true],
        ], [
            'fishStockRepository' => 'App\\Repository\\FishStockRepository',
            'marineProtectionRepository' => 'App\\Repository\\MarineProtectionRepository',
            'renderer' => 'App\\Service\\MarkdownPageRenderer',
        ]);
    }
}
