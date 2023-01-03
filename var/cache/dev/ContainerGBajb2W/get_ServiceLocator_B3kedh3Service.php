<?php

namespace ContainerGBajb2W;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B3kedh3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.B3kedh3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B3kedh3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'FTPService' => ['privates', 'App\\Service\\FTPService', 'getFTPServiceService', true],
        ], [
            'FTPService' => 'App\\Service\\FTPService',
        ]);
    }
}
