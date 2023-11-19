<?php

namespace ContainerXndyOwb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_Paginator_SubscriberService extends okpt_my_web_page_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_elastica.paginator.subscriber' shared service.
     *
     * @return \FOS\ElasticaBundle\Subscriber\PaginateElasticaQuerySubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Subscriber/PaginateElasticaQuerySubscriber.php';

        return $container->privates['fos_elastica.paginator.subscriber'] = new \FOS\ElasticaBundle\Subscriber\PaginateElasticaQuerySubscriber(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
