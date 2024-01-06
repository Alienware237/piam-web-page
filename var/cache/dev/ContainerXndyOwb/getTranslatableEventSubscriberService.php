<?php

namespace ContainerXndyOwb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslatableEventSubscriberService extends okpt_my_web_page_KernelDevDebugContainer
{
    /**
     * Gets the public 'Knp\DoctrineBehaviors\EventSubscriber\TranslatableEventSubscriber' shared autowired service.
     *
     * @return \Knp\DoctrineBehaviors\EventSubscriber\TranslatableEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/src/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/EventSubscriber/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/doctrine-behaviors/src/EventSubscriber/TranslatableEventSubscriber.php';

        return $container->services['Knp\\DoctrineBehaviors\\EventSubscriber\\TranslatableEventSubscriber'] = new \Knp\DoctrineBehaviors\EventSubscriber\TranslatableEventSubscriber(($container->services['Knp\\DoctrineBehaviors\\Provider\\LocaleProvider'] ?? $container->load('getLocaleProviderService')), 'LAZY', 'LAZY');
    }
}
