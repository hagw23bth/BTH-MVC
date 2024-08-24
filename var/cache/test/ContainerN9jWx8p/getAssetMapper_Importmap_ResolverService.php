<?php

namespace ContainerN9jWx8p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_ResolverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'asset_mapper.importmap.resolver' shared service.
     *
     * @return \Symfony\Component\AssetMapper\ImportMap\Resolver\JsDelivrEsmResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset-mapper/ImportMap/Resolver/PackageResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset-mapper/ImportMap/Resolver/JsDelivrEsmResolver.php';

        return $container->privates['asset_mapper.importmap.resolver'] = new \Symfony\Component\AssetMapper\ImportMap\Resolver\JsDelivrEsmResolver(($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container)));
    }
}
