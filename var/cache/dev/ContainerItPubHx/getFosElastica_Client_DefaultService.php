<?php

namespace ContainerItPubHx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_Client_DefaultService extends okpt_my_web_page_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_elastica.client.default' shared service.
     *
     * @return \FOS\ElasticaBundle\Elastica\Client
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/ruflin/elastica/src/Client.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Elastica/Client.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/src/LoggerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/src/AbstractLogger.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Logger/ElasticaLogger.php';

        $container->privates['fos_elastica.client.default'] = $instance = new \FOS\ElasticaBundle\Elastica\Client(['connections' => [0 => ['url' => $container->getEnv('ELASTICSEARCH_URL'), 'http_error_codes' => [0 => 400, 1 => 403, 2 => 404], 'ssl' => false, 'logger' => 'fos_elastica.logger', 'compression' => false, 'headers' => [], 'curl' => [], 'retryOnConflict' => 0, 'persistent' => true]], 'connectionStrategy' => 'Simple'], NULL);

        $a = new \Symfony\Bridge\Monolog\Logger('elastica');
        $a->pushHandler(($container->privates['monolog.handler.console'] ?? $container->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($container->privates['monolog.handler.main'] ?? $container->getMonolog_Handler_MainService()));

        $instance->setStopwatch(($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
        $instance->setLogger(new \FOS\ElasticaBundle\Logger\ElasticaLogger($a, true));

        return $instance;
    }
}
