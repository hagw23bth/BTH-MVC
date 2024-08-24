<?php

namespace ContainerN9jWx8p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_EntityValueResolverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.entity_value_resolver' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ArgumentResolver/EntityValueResolver.php';

        return $container->privates['doctrine.orm.entity_value_resolver'] = new \Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver(($container->services['doctrine'] ?? self::getDoctrineService($container)), ($container->privates['doctrine.orm.entity_value_resolver.expression_language'] ??= new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()));
    }
}
