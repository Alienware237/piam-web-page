<?php

namespace ContainerXndyOwb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoggableEventSubscriberService extends okpt_my_web_page_KernelDevDebugContainer
{
    /**
     * Gets the public 'Knp\DoctrineBehaviors\EventSubscriber\LoggableEventSubscriber' shared autowired service.
     *
     * @return \Knp\DoctrineBehaviors\EventSubscriber\LoggableEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/src/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/EventSubscriber/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/doctrine-behaviors/src/EventSubscriber/LoggableEventSubscriber.php';

        return $container->services['Knp\\DoctrineBehaviors\\EventSubscriber\\LoggableEventSubscriber'] = new \Knp\DoctrineBehaviors\EventSubscriber\LoggableEventSubscriber(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
