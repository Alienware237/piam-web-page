<?php

namespace ContainerXndyOwb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_Command_PopulateService extends okpt_my_web_page_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_elastica.command.populate' shared service.
     *
     * @return \FOS\ElasticaBundle\Command\PopulateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Command/PopulateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Provider/PagerProviderRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Persister/PagerPersisterRegistry.php';

        $container->privates['fos_elastica.command.populate'] = $instance = new \FOS\ElasticaBundle\Command\PopulateCommand(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['fos_elastica.index_manager'] ?? $container->load('getFosElastica_IndexManagerService')), new \FOS\ElasticaBundle\Provider\PagerProviderRegistry(($container->privates['api_platform.filter_locator'] ?? ($container->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [], [])))), new \FOS\ElasticaBundle\Persister\PagerPersisterRegistry(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'in_place' => ['privates', 'fos_elastica.in_place_pager_persister', 'getFosElastica_InPlacePagerPersisterService', true],
        ], [
            'in_place' => 'FOS\\ElasticaBundle\\Persister\\InPlacePagerPersister',
        ])), ($container->privates['fos_elastica.resetter'] ?? $container->load('getFosElastica_ResetterService')));

        $instance->setName('fos:elastica:populate');

        return $instance;
    }
}
