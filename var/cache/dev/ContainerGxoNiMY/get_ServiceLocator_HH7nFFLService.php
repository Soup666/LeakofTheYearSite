<?php

namespace ContainerGxoNiMY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HH7nFFLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HH7nFFL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HH7nFFL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'artist' => ['privates', '.errored..service_locator.HH7nFFL.App\\Entity\\Artist', NULL, 'Cannot autowire service ".service_locator.HH7nFFL": it references class "App\\Entity\\Artist" but no such service exists.'],
            'geniusService' => ['privates', 'App\\Service\\GeniusService', 'getGeniusServiceService', true],
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'artist' => 'App\\Entity\\Artist',
            'geniusService' => 'App\\Service\\GeniusService',
            'managerRegistry' => '?',
        ]);
    }
}