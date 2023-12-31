<?php

namespace ContainerItPubHx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_MappingBuilderService extends okpt_my_web_page_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_elastica.mapping_builder' shared service.
     *
     * @return \FOS\ElasticaBundle\Index\MappingBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Index/MappingBuilder.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['fos_elastica.mapping_builder'])) {
            return $container->privates['fos_elastica.mapping_builder'];
        }

        return $container->privates['fos_elastica.mapping_builder'] = new \FOS\ElasticaBundle\Index\MappingBuilder($a);
    }
}
