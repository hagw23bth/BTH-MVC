<?php

namespace ContainerY2R4yC6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NHMBccdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nHMBccd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nHMBccd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\APIController::getBookByIsbn' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\APIController::getBooks' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\BookController::createBook' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\BookController::deleteBook' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\BookController::editBook' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\BookController::updateBook' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\BookController::viewAll' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\BookController::viewBook' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\MetricsController::metrics' => ['privates', '.service_locator.XgiDUJ8', 'get_ServiceLocator_XgiDUJ8Service', true],
            'App\\Controller\\ProjectController::about' => ['privates', '.service_locator.cZkmifk', 'get_ServiceLocator_CZkmifkService', true],
            'App\\Controller\\ProjectController::data' => ['privates', '.service_locator.ZRQrZ1U', 'get_ServiceLocator_ZRQrZ1UService', true],
            'App\\Controller\\ProjectController::home' => ['privates', '.service_locator.cZkmifk', 'get_ServiceLocator_CZkmifkService', true],
            'App\\Controller\\ProjectController::indicators' => ['privates', '.service_locator.cZkmifk', 'get_ServiceLocator_CZkmifkService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\APIController:getBookByIsbn' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\APIController:getBooks' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\BookController:createBook' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\BookController:deleteBook' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\BookController:editBook' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\BookController:updateBook' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\BookController:viewAll' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\BookController:viewBook' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\MetricsController:metrics' => ['privates', '.service_locator.XgiDUJ8', 'get_ServiceLocator_XgiDUJ8Service', true],
            'App\\Controller\\ProjectController:about' => ['privates', '.service_locator.cZkmifk', 'get_ServiceLocator_CZkmifkService', true],
            'App\\Controller\\ProjectController:data' => ['privates', '.service_locator.ZRQrZ1U', 'get_ServiceLocator_ZRQrZ1UService', true],
            'App\\Controller\\ProjectController:home' => ['privates', '.service_locator.cZkmifk', 'get_ServiceLocator_CZkmifkService', true],
            'App\\Controller\\ProjectController:indicators' => ['privates', '.service_locator.cZkmifk', 'get_ServiceLocator_CZkmifkService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\APIController::getBookByIsbn' => '?',
            'App\\Controller\\APIController::getBooks' => '?',
            'App\\Controller\\BookController::createBook' => '?',
            'App\\Controller\\BookController::deleteBook' => '?',
            'App\\Controller\\BookController::editBook' => '?',
            'App\\Controller\\BookController::updateBook' => '?',
            'App\\Controller\\BookController::viewAll' => '?',
            'App\\Controller\\BookController::viewBook' => '?',
            'App\\Controller\\MetricsController::metrics' => '?',
            'App\\Controller\\ProjectController::about' => '?',
            'App\\Controller\\ProjectController::data' => '?',
            'App\\Controller\\ProjectController::home' => '?',
            'App\\Controller\\ProjectController::indicators' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\APIController:getBookByIsbn' => '?',
            'App\\Controller\\APIController:getBooks' => '?',
            'App\\Controller\\BookController:createBook' => '?',
            'App\\Controller\\BookController:deleteBook' => '?',
            'App\\Controller\\BookController:editBook' => '?',
            'App\\Controller\\BookController:updateBook' => '?',
            'App\\Controller\\BookController:viewAll' => '?',
            'App\\Controller\\BookController:viewBook' => '?',
            'App\\Controller\\MetricsController:metrics' => '?',
            'App\\Controller\\ProjectController:about' => '?',
            'App\\Controller\\ProjectController:data' => '?',
            'App\\Controller\\ProjectController:home' => '?',
            'App\\Controller\\ProjectController:indicators' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
