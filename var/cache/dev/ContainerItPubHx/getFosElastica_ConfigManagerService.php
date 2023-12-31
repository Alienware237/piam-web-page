<?php

namespace ContainerItPubHx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_ConfigManagerService extends okpt_my_web_page_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_elastica.config_manager' shared service.
     *
     * @return \FOS\ElasticaBundle\Configuration\ConfigManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Configuration/ManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Configuration/ConfigManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Configuration/Source/SourceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Configuration/Source/ContainerSource.php';

        return $container->privates['fos_elastica.config_manager'] = new \FOS\ElasticaBundle\Configuration\ConfigManager([0 => new \FOS\ElasticaBundle\Configuration\Source\ContainerSource(['app' => ['elasticsearch_name' => 'app', 'reference' => ($container->privates['fos_elastica.index.app'] ?? $container->load('getFosElastica_Index_AppService')), 'model' => NULL, 'name' => 'app', 'settings' => [], 'index_prototype' => [], 'use_alias' => false, 'mapping' => ['dynamic_templates' => [], 'properties' => []], 'config' => ['analyzer' => NULL, 'search_analyzer' => NULL, 'dynamic' => NULL, 'date_detection' => NULL, 'dynamic_date_formats' => [], 'numeric_detection' => NULL]]])]);
    }
}
