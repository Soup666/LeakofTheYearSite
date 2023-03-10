<?php

namespace ContainerCn6fe4a;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeakFileApiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Api\LeakFileApi' shared autowired service.
     *
     * @return \App\Controller\Api\LeakFileApi
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Api/LeakFileApi.php';

        $container->services['App\\Controller\\Api\\LeakFileApi'] = $instance = new \App\Controller\Api\LeakFileApi(($container->privates['App\\Repository\\LeakFileRepository'] ?? $container->load('getLeakFileRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\Api\\LeakFileApi', $container));

        return $instance;
    }
}
