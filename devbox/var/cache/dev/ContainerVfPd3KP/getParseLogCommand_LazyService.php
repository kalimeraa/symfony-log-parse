<?php

namespace ContainerVfPd3KP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getParseLogCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.App\Command\ParseLogCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.App\\Command\\ParseLogCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('app:parse-log', [0 => 'app:parse'], 'parse log file', false, function () use ($container): \App\Command\ParseLogCommand {
            return ($container->privates['App\\Command\\ParseLogCommand'] ?? $container->load('getParseLogCommandService'));
        });
    }
}
