<?php

namespace ContainerB7ECMir;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeakFileServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\LeakFileService' shared autowired service.
     *
     * @return \App\Service\LeakFileService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/LeakFileService.php';
        include_once \dirname(__DIR__, 4).'/src/Service/FTPService.php';

        return $container->privates['App\\Service\\LeakFileService'] = new \App\Service\LeakFileService(($container->privates['App\\Service\\FTPService'] ?? ($container->privates['App\\Service\\FTPService'] = new \App\Service\FTPService())), ($container->privates['App\\Repository\\LeakFileRepository'] ?? $container->load('getLeakFileRepositoryService')), ($container->privates['App\\Repository\\ArtistRepository'] ?? $container->load('getArtistRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}