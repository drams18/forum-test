<?php

namespace ContainerKgdOa5F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthenticationEntryPointService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Security\AuthenticationEntryPoint' shared autowired service.
     *
     * @return \App\Security\AuthenticationEntryPoint
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Security/AuthenticationEntryPoint.php';

        $container->services['App\\Security\\AuthenticationEntryPoint'] = $instance = new \App\Security\AuthenticationEntryPoint(($container->services['router'] ?? self::getRouterService($container)));

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Security\\AuthenticationEntryPoint', $container));

        return $instance;
    }
}
