<?php

namespace ContainerXndyOwb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBlameableEventSubscriberService extends okpt_my_web_page_KernelDevDebugContainer
{
    /**
     * Gets the public 'Knp\DoctrineBehaviors\EventSubscriber\BlameableEventSubscriber' shared autowired service.
     *
     * @return \Knp\DoctrineBehaviors\EventSubscriber\BlameableEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/src/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/EventSubscriber/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/doctrine-behaviors/src/EventSubscriber/BlameableEventSubscriber.php';

        $a = ($container->services['Knp\\DoctrineBehaviors\\Provider\\UserProvider'] ?? $container->load('getUserProviderService'));

        if (isset($container->services['Knp\\DoctrineBehaviors\\EventSubscriber\\BlameableEventSubscriber'])) {
            return $container->services['Knp\\DoctrineBehaviors\\EventSubscriber\\BlameableEventSubscriber'];
        }
        $b = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['Knp\\DoctrineBehaviors\\EventSubscriber\\BlameableEventSubscriber'])) {
            return $container->services['Knp\\DoctrineBehaviors\\EventSubscriber\\BlameableEventSubscriber'];
        }

        return $container->services['Knp\\DoctrineBehaviors\\EventSubscriber\\BlameableEventSubscriber'] = new \Knp\DoctrineBehaviors\EventSubscriber\BlameableEventSubscriber($a, $b, NULL);
    }
}
