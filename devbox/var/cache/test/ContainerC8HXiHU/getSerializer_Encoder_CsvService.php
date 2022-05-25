<?php

namespace ContainerC8HXiHU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Encoder_CsvService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'serializer.encoder.csv' shared service.
     *
     * @return \Symfony\Component\Serializer\Encoder\CsvEncoder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/EncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/CsvEncoder.php';

        return $container->privates['serializer.encoder.csv'] = new \Symfony\Component\Serializer\Encoder\CsvEncoder();
    }
}
