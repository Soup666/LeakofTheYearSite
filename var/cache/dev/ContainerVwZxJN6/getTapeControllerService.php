<?php

namespace ContainerVwZxJN6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTapeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\TapeController' shared autowired service.
     *
     * @return \App\Controller\TapeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/TapeController.php';

        $container->services['App\\Controller\\TapeController'] = $instance = new \App\Controller\TapeController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\TapeController', $container));

        return $instance;
    }
}
