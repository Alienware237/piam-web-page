<?php

namespace ContainerItPubHx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserProviderService extends okpt_my_web_page_KernelDevDebugContainer
{
    /**
     * Gets the public 'Knp\DoctrineBehaviors\Provider\UserProvider' shared autowired service.
     *
     * @return \Knp\DoctrineBehaviors\Provider\UserProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/doctrine-behaviors/src/Contract/Provider/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/doctrine-behaviors/src/Provider/UserProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Security.php';

        return $container->services['Knp\\DoctrineBehaviors\\Provider\\UserProvider'] = new \Knp\DoctrineBehaviors\Provider\UserProvider(new \Symfony\Component\Security\Core\Security(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'security.authorization_checker' => ['services', 'jms_serializer.authorization_checker', 'getJmsSerializer_AuthorizationCheckerService', false],
            'security.token_storage' => ['privates', 'security.token_storage', 'getSecurity_TokenStorageService', false],
        ], [
            'security.authorization_checker' => '?',
            'security.token_storage' => '?',
        ])), NULL);
    }
}
