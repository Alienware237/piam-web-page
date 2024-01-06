<?php

namespace ContainerItPubHx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_Command_TemplatesResetService extends okpt_my_web_page_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_elastica.command.templates_reset' shared service.
     *
     * @return \FOS\ElasticaBundle\Command\ResetTemplatesCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Command/ResetTemplatesCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Index/ResetterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Index/TemplateResetter.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Configuration/ManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Configuration/ConfigManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Configuration/Source/SourceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Configuration/Source/TemplateContainerSource.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Index/IndexTemplateManager.php';

        $container->privates['fos_elastica.command.templates_reset'] = $instance = new \FOS\ElasticaBundle\Command\ResetTemplatesCommand(new \FOS\ElasticaBundle\Index\TemplateResetter(new \FOS\ElasticaBundle\Configuration\ConfigManager([0 => new \FOS\ElasticaBundle\Configuration\Source\TemplateContainerSource([])]), ($container->privates['fos_elastica.mapping_builder'] ?? $container->load('getFosElastica_MappingBuilderService')), ($container->privates['fos_elastica.client.default'] ?? $container->load('getFosElastica_Client_DefaultService')), new \FOS\ElasticaBundle\Index\IndexTemplateManager([])));

        $instance->setName('fos:elastica:reset-templates');

        return $instance;
    }
}
