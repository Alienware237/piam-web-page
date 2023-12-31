<?php

namespace ContainerItPubHx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLocaleProviderService extends okpt_my_web_page_KernelDevDebugContainer
{
    /**
     * Gets the public 'Knp\DoctrineBehaviors\Provider\LocaleProvider' shared autowired service.
     *
     * @return \Knp\DoctrineBehaviors\Provider\LocaleProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/doctrine-behaviors/src/Contract/Provider/LocaleProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/doctrine-behaviors/src/Provider/LocaleProvider.php';

        return $container->services['Knp\\DoctrineBehaviors\\Provider\\LocaleProvider'] = new \Knp\DoctrineBehaviors\Provider\LocaleProvider(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['parameter_bag'] ?? ($container->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container))), ($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
