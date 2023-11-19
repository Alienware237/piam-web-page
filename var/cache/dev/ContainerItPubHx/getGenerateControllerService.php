<?php

namespace ContainerItPubHx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGenerateControllerService extends okpt_my_web_page_KernelDevDebugContainer
{
    /**
     * Gets the public 'Endroid\QrCodeBundle\Controller\GenerateController' shared autowired service.
     *
     * @return \Endroid\QrCodeBundle\Controller\GenerateController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code-bundle/src/Controller/GenerateController.php';

        return $container->services['Endroid\\QrCodeBundle\\Controller\\GenerateController'] = new \Endroid\QrCodeBundle\Controller\GenerateController(($container->privates['Endroid\\QrCode\\Builder\\BuilderRegistry'] ?? $container->load('getBuilderRegistryService')));
    }
}
