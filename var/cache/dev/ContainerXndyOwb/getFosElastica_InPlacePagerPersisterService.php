<?php

namespace ContainerXndyOwb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_InPlacePagerPersisterService extends okpt_my_web_page_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_elastica.in_place_pager_persister' shared service.
     *
     * @return \FOS\ElasticaBundle\Persister\InPlacePagerPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Persister/PagerPersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Persister/InPlacePagerPersister.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Persister/PersisterRegistry.php';

        return $container->privates['fos_elastica.in_place_pager_persister'] = new \FOS\ElasticaBundle\Persister\InPlacePagerPersister(new \FOS\ElasticaBundle\Persister\PersisterRegistry(($container->privates['api_platform.filter_locator'] ?? ($container->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [], [])))), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}