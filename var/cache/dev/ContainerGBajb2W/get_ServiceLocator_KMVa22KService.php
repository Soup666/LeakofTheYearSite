<?php

namespace ContainerGBajb2W;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KMVa22KService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KMVa22K' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KMVa22K'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fileUploader' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService', true],
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'fileUploader' => 'App\\Service\\FileUploader',
            'managerRegistry' => '?',
            'slugger' => '?',
        ]);
    }
}
