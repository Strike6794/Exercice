<?php

namespace ContainerKYTsJbx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J7JHkQ3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.J7JHkQ3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.J7JHkQ3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\BookController::delete' => ['privates', '.service_locator.5XllAAP', 'get_ServiceLocator_5XllAAPService', true],
            'App\\Controller\\BookController::edit' => ['privates', '.service_locator.5XllAAP', 'get_ServiceLocator_5XllAAPService', true],
            'App\\Controller\\BookController::index' => ['privates', '.service_locator.2vrAr7L', 'get_ServiceLocator_2vrAr7LService', true],
            'App\\Controller\\BookController::new' => ['privates', '.service_locator.2vrAr7L', 'get_ServiceLocator_2vrAr7LService', true],
            'App\\Controller\\BookController::show' => ['privates', '.service_locator.qkm.aLw', 'get_ServiceLocator_Qkm_ALwService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\BookController:delete' => ['privates', '.service_locator.5XllAAP', 'get_ServiceLocator_5XllAAPService', true],
            'App\\Controller\\BookController:edit' => ['privates', '.service_locator.5XllAAP', 'get_ServiceLocator_5XllAAPService', true],
            'App\\Controller\\BookController:index' => ['privates', '.service_locator.2vrAr7L', 'get_ServiceLocator_2vrAr7LService', true],
            'App\\Controller\\BookController:new' => ['privates', '.service_locator.2vrAr7L', 'get_ServiceLocator_2vrAr7LService', true],
            'App\\Controller\\BookController:show' => ['privates', '.service_locator.qkm.aLw', 'get_ServiceLocator_Qkm_ALwService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\BookController::delete' => '?',
            'App\\Controller\\BookController::edit' => '?',
            'App\\Controller\\BookController::index' => '?',
            'App\\Controller\\BookController::new' => '?',
            'App\\Controller\\BookController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\BookController:delete' => '?',
            'App\\Controller\\BookController:edit' => '?',
            'App\\Controller\\BookController:index' => '?',
            'App\\Controller\\BookController:new' => '?',
            'App\\Controller\\BookController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}