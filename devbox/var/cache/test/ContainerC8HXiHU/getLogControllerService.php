<?php

namespace ContainerC8HXiHU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLogControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\LogController' shared autowired service.
     *
     * @return \App\Controller\LogController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/LogController.php';

        return $container->services['App\\Controller\\LogController'] = new \App\Controller\LogController();
    }
}
