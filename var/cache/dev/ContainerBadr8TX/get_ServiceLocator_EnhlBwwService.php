<?php

namespace ContainerBadr8TX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EnhlBwwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EnhlBww' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EnhlBww'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'label' => ['privates', '.errored..service_locator.EnhlBww.App\\Entity\\Label', NULL, 'Cannot autowire service ".service_locator.EnhlBww": it references class "App\\Entity\\Label" but no such service exists.'],
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'label' => 'App\\Entity\\Label',
            'managerRegistry' => '?',
        ]);
    }
}
