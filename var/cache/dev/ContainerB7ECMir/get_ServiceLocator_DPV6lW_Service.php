<?php

namespace ContainerB7ECMir;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DPV6lW_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dPV6lW.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dPV6lW.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Api\\LeakFileApi::updateEntities' => ['privates', '.service_locator.2nAiAEe', 'get_ServiceLocator_2nAiAEeService', true],
            'App\\Controller\\ArtistController::archive' => ['privates', '.service_locator.eiWvEfv', 'get_ServiceLocator_EiWvEfvService', true],
            'App\\Controller\\ArtistController::edit' => ['privates', '.service_locator.eKUB4uF', 'get_ServiceLocator_EKUB4uFService', true],
            'App\\Controller\\ArtistController::index' => ['privates', '.service_locator.cg5DUby', 'get_ServiceLocator_Cg5DUbyService', true],
            'App\\Controller\\ArtistController::restore' => ['privates', '.service_locator.eiWvEfv', 'get_ServiceLocator_EiWvEfvService', true],
            'App\\Controller\\ArtistController::suspend' => ['privates', '.service_locator.eiWvEfv', 'get_ServiceLocator_EiWvEfvService', true],
            'App\\Controller\\ArtistController::unsuspend' => ['privates', '.service_locator.eiWvEfv', 'get_ServiceLocator_EiWvEfvService', true],
            'App\\Controller\\ArtistController::viewArtist' => ['privates', '.service_locator.eiWvEfv', 'get_ServiceLocator_EiWvEfvService', true],
            'App\\Controller\\AuthController::generateAdmin' => ['privates', '.service_locator.dQsEc8u', 'get_ServiceLocator_DQsEc8uService', true],
            'App\\Controller\\AuthController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\LabelController::archive' => ['privates', '.service_locator.EnhlBww', 'get_ServiceLocator_EnhlBwwService', true],
            'App\\Controller\\LabelController::edit' => ['privates', '.service_locator.WX3QJxj', 'get_ServiceLocator_WX3QJxjService', true],
            'App\\Controller\\LabelController::index' => ['privates', '.service_locator.cg5DUby', 'get_ServiceLocator_Cg5DUbyService', true],
            'App\\Controller\\LabelController::restore' => ['privates', '.service_locator.EnhlBww', 'get_ServiceLocator_EnhlBwwService', true],
            'App\\Controller\\LabelController::suspend' => ['privates', '.service_locator.EnhlBww', 'get_ServiceLocator_EnhlBwwService', true],
            'App\\Controller\\LabelController::unsuspend' => ['privates', '.service_locator.EnhlBww', 'get_ServiceLocator_EnhlBwwService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.6E9xidT', 'get_ServiceLocator_6E9xidTService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.qwilqiL', 'get_ServiceLocator_QwilqiLService', true],
            'App\\Controller\\TapeController::archive' => ['privates', '.service_locator.4516oZ1', 'get_ServiceLocator_4516oZ1Service', true],
            'App\\Controller\\TapeController::edit' => ['privates', '.service_locator.KMVa22K', 'get_ServiceLocator_KMVa22KService', true],
            'App\\Controller\\TapeController::index' => ['privates', '.service_locator.1Tq_AO3', 'get_ServiceLocator_1TqAO3Service', true],
            'App\\Controller\\TapeController::restore' => ['privates', '.service_locator.4516oZ1', 'get_ServiceLocator_4516oZ1Service', true],
            'App\\Controller\\TapeController::suspend' => ['privates', '.service_locator.4516oZ1', 'get_ServiceLocator_4516oZ1Service', true],
            'App\\Controller\\TapeController::unsuspend' => ['privates', '.service_locator.4516oZ1', 'get_ServiceLocator_4516oZ1Service', true],
            'App\\Controller\\TapeController::viewTape' => ['privates', '.service_locator.mGVGY2G', 'get_ServiceLocator_MGVGY2GService', true],
            'App\\Controller\\UsersController::archive' => ['privates', '.service_locator.DliG0z3', 'get_ServiceLocator_DliG0z3Service', true],
            'App\\Controller\\UsersController::edit' => ['privates', '.service_locator.08uX.sD', 'get_ServiceLocator_08uX_SDService', true],
            'App\\Controller\\UsersController::index' => ['privates', '.service_locator.cg5DUby', 'get_ServiceLocator_Cg5DUbyService', true],
            'App\\Controller\\UsersController::restore' => ['privates', '.service_locator.DliG0z3', 'get_ServiceLocator_DliG0z3Service', true],
            'App\\Controller\\UsersController::suspend' => ['privates', '.service_locator.DliG0z3', 'get_ServiceLocator_DliG0z3Service', true],
            'App\\Controller\\UsersController::unsuspend' => ['privates', '.service_locator.DliG0z3', 'get_ServiceLocator_DliG0z3Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\Api\\LeakFileApi:updateEntities' => ['privates', '.service_locator.2nAiAEe', 'get_ServiceLocator_2nAiAEeService', true],
            'App\\Controller\\ArtistController:archive' => ['privates', '.service_locator.eiWvEfv', 'get_ServiceLocator_EiWvEfvService', true],
            'App\\Controller\\ArtistController:edit' => ['privates', '.service_locator.eKUB4uF', 'get_ServiceLocator_EKUB4uFService', true],
            'App\\Controller\\ArtistController:index' => ['privates', '.service_locator.cg5DUby', 'get_ServiceLocator_Cg5DUbyService', true],
            'App\\Controller\\ArtistController:restore' => ['privates', '.service_locator.eiWvEfv', 'get_ServiceLocator_EiWvEfvService', true],
            'App\\Controller\\ArtistController:suspend' => ['privates', '.service_locator.eiWvEfv', 'get_ServiceLocator_EiWvEfvService', true],
            'App\\Controller\\ArtistController:unsuspend' => ['privates', '.service_locator.eiWvEfv', 'get_ServiceLocator_EiWvEfvService', true],
            'App\\Controller\\ArtistController:viewArtist' => ['privates', '.service_locator.eiWvEfv', 'get_ServiceLocator_EiWvEfvService', true],
            'App\\Controller\\AuthController:generateAdmin' => ['privates', '.service_locator.dQsEc8u', 'get_ServiceLocator_DQsEc8uService', true],
            'App\\Controller\\AuthController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\LabelController:archive' => ['privates', '.service_locator.EnhlBww', 'get_ServiceLocator_EnhlBwwService', true],
            'App\\Controller\\LabelController:edit' => ['privates', '.service_locator.WX3QJxj', 'get_ServiceLocator_WX3QJxjService', true],
            'App\\Controller\\LabelController:index' => ['privates', '.service_locator.cg5DUby', 'get_ServiceLocator_Cg5DUbyService', true],
            'App\\Controller\\LabelController:restore' => ['privates', '.service_locator.EnhlBww', 'get_ServiceLocator_EnhlBwwService', true],
            'App\\Controller\\LabelController:suspend' => ['privates', '.service_locator.EnhlBww', 'get_ServiceLocator_EnhlBwwService', true],
            'App\\Controller\\LabelController:unsuspend' => ['privates', '.service_locator.EnhlBww', 'get_ServiceLocator_EnhlBwwService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.6E9xidT', 'get_ServiceLocator_6E9xidTService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.qwilqiL', 'get_ServiceLocator_QwilqiLService', true],
            'App\\Controller\\TapeController:archive' => ['privates', '.service_locator.4516oZ1', 'get_ServiceLocator_4516oZ1Service', true],
            'App\\Controller\\TapeController:edit' => ['privates', '.service_locator.KMVa22K', 'get_ServiceLocator_KMVa22KService', true],
            'App\\Controller\\TapeController:index' => ['privates', '.service_locator.1Tq_AO3', 'get_ServiceLocator_1TqAO3Service', true],
            'App\\Controller\\TapeController:restore' => ['privates', '.service_locator.4516oZ1', 'get_ServiceLocator_4516oZ1Service', true],
            'App\\Controller\\TapeController:suspend' => ['privates', '.service_locator.4516oZ1', 'get_ServiceLocator_4516oZ1Service', true],
            'App\\Controller\\TapeController:unsuspend' => ['privates', '.service_locator.4516oZ1', 'get_ServiceLocator_4516oZ1Service', true],
            'App\\Controller\\TapeController:viewTape' => ['privates', '.service_locator.mGVGY2G', 'get_ServiceLocator_MGVGY2GService', true],
            'App\\Controller\\UsersController:archive' => ['privates', '.service_locator.DliG0z3', 'get_ServiceLocator_DliG0z3Service', true],
            'App\\Controller\\UsersController:edit' => ['privates', '.service_locator.08uX.sD', 'get_ServiceLocator_08uX_SDService', true],
            'App\\Controller\\UsersController:index' => ['privates', '.service_locator.cg5DUby', 'get_ServiceLocator_Cg5DUbyService', true],
            'App\\Controller\\UsersController:restore' => ['privates', '.service_locator.DliG0z3', 'get_ServiceLocator_DliG0z3Service', true],
            'App\\Controller\\UsersController:suspend' => ['privates', '.service_locator.DliG0z3', 'get_ServiceLocator_DliG0z3Service', true],
            'App\\Controller\\UsersController:unsuspend' => ['privates', '.service_locator.DliG0z3', 'get_ServiceLocator_DliG0z3Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\Api\\LeakFileApi::updateEntities' => '?',
            'App\\Controller\\ArtistController::archive' => '?',
            'App\\Controller\\ArtistController::edit' => '?',
            'App\\Controller\\ArtistController::index' => '?',
            'App\\Controller\\ArtistController::restore' => '?',
            'App\\Controller\\ArtistController::suspend' => '?',
            'App\\Controller\\ArtistController::unsuspend' => '?',
            'App\\Controller\\ArtistController::viewArtist' => '?',
            'App\\Controller\\AuthController::generateAdmin' => '?',
            'App\\Controller\\AuthController::login' => '?',
            'App\\Controller\\LabelController::archive' => '?',
            'App\\Controller\\LabelController::edit' => '?',
            'App\\Controller\\LabelController::index' => '?',
            'App\\Controller\\LabelController::restore' => '?',
            'App\\Controller\\LabelController::suspend' => '?',
            'App\\Controller\\LabelController::unsuspend' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\TapeController::archive' => '?',
            'App\\Controller\\TapeController::edit' => '?',
            'App\\Controller\\TapeController::index' => '?',
            'App\\Controller\\TapeController::restore' => '?',
            'App\\Controller\\TapeController::suspend' => '?',
            'App\\Controller\\TapeController::unsuspend' => '?',
            'App\\Controller\\TapeController::viewTape' => '?',
            'App\\Controller\\UsersController::archive' => '?',
            'App\\Controller\\UsersController::edit' => '?',
            'App\\Controller\\UsersController::index' => '?',
            'App\\Controller\\UsersController::restore' => '?',
            'App\\Controller\\UsersController::suspend' => '?',
            'App\\Controller\\UsersController::unsuspend' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Api\\LeakFileApi:updateEntities' => '?',
            'App\\Controller\\ArtistController:archive' => '?',
            'App\\Controller\\ArtistController:edit' => '?',
            'App\\Controller\\ArtistController:index' => '?',
            'App\\Controller\\ArtistController:restore' => '?',
            'App\\Controller\\ArtistController:suspend' => '?',
            'App\\Controller\\ArtistController:unsuspend' => '?',
            'App\\Controller\\ArtistController:viewArtist' => '?',
            'App\\Controller\\AuthController:generateAdmin' => '?',
            'App\\Controller\\AuthController:login' => '?',
            'App\\Controller\\LabelController:archive' => '?',
            'App\\Controller\\LabelController:edit' => '?',
            'App\\Controller\\LabelController:index' => '?',
            'App\\Controller\\LabelController:restore' => '?',
            'App\\Controller\\LabelController:suspend' => '?',
            'App\\Controller\\LabelController:unsuspend' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\TapeController:archive' => '?',
            'App\\Controller\\TapeController:edit' => '?',
            'App\\Controller\\TapeController:index' => '?',
            'App\\Controller\\TapeController:restore' => '?',
            'App\\Controller\\TapeController:suspend' => '?',
            'App\\Controller\\TapeController:unsuspend' => '?',
            'App\\Controller\\TapeController:viewTape' => '?',
            'App\\Controller\\UsersController:archive' => '?',
            'App\\Controller\\UsersController:edit' => '?',
            'App\\Controller\\UsersController:index' => '?',
            'App\\Controller\\UsersController:restore' => '?',
            'App\\Controller\\UsersController:suspend' => '?',
            'App\\Controller\\UsersController:unsuspend' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}