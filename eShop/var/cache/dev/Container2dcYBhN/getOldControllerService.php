<?php

namespace Container2dcYBhN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOldControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\oldController' shared autowired service.
     *
     * @return \App\Controller\oldController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/oldController.php';

        $container->services['App\\Controller\\oldController'] = $instance = new \App\Controller\oldController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\oldController', $container));

        return $instance;
    }
}