<?php

namespace ContainerTPQlFl3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_Dumper_YmlService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'translation.dumper.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/FileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/YamlFileDumper.php';

        return $container->privates['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }
}
