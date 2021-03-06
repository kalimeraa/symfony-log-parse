<?php

namespace ContainerVfPd3KP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LfQvwlQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lfQvwlQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lfQvwlQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'logRepository' => ['privates', 'App\\Repository\\LogRepository', 'getLogRepositoryService', true],
            'validator' => ['services', '.container.private.validator', 'get_Container_Private_ValidatorService', true],
        ], [
            'logRepository' => 'App\\Repository\\LogRepository',
            'validator' => '?',
        ]);
    }
}
