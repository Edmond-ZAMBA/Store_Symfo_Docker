<?php

namespace ContainerWuxoo4o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EIdMbTtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EIdMbTt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EIdMbTt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'adress' => ['privates', '.errored..service_locator.EIdMbTt.App\\Entity\\Adress', NULL, 'Cannot autowire service ".service_locator.EIdMbTt": it references class "App\\Entity\\Adress" but no such service exists.'],
        ], [
            'adress' => 'App\\Entity\\Adress',
        ]);
    }
}
