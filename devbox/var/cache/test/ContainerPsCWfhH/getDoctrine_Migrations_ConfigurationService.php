<?php

namespace ContainerPsCWfhH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Migrations_ConfigurationService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.migrations.configuration' shared service.
     *
     * @return \Doctrine\Migrations\Configuration\Configuration
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Metadata/Storage/MetadataStorageConfiguration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Metadata/Storage/TableMetadataStorageConfiguration.php';

        $container->privates['doctrine.migrations.configuration'] = $instance = new \Doctrine\Migrations\Configuration\Configuration();

        $instance->addMigrationsDirectory('DoctrineMigrations', (\dirname(__DIR__, 4).'/migrations'));
        $instance->setAllOrNothing(false);
        $instance->setCheckDatabasePlatform(true);
        $instance->setTransactional(true);
        $instance->setMetadataStorageConfiguration(($container->privates['doctrine.migrations.storage.table_storage'] ?? ($container->privates['doctrine.migrations.storage.table_storage'] = new \Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration())));

        return $instance;
    }
}
