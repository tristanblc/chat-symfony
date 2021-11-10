<?php

namespace ContainerOoJZDbJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VgsfuRgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vgsfuRg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vgsfuRg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'file_uploader' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService', true],
        ], [
            'em' => '?',
            'file_uploader' => 'App\\Service\\FileUploader',
        ]);
    }
}
