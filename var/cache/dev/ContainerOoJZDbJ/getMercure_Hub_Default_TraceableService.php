<?php

namespace ContainerOoJZDbJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMercure_Hub_Default_TraceableService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'mercure.hub.default.traceable' shared service.
     *
     * @return \Symfony\Component\Mercure\Debug\TraceableHub
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mercure'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'HubInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mercure'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Debug'.\DIRECTORY_SEPARATOR.'TraceableHub.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mercure'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Hub.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mercure'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Jwt'.\DIRECTORY_SEPARATOR.'TokenProviderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mercure'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Jwt'.\DIRECTORY_SEPARATOR.'CallableTokenProvider.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'Mercure'.\DIRECTORY_SEPARATOR.'JwtProvider.php';

        return $container->privates['mercure.hub.default.traceable'] = new \Symfony\Component\Mercure\Debug\TraceableHub(new \Symfony\Component\Mercure\Hub($container->getEnv('MERCURE_PUBLISH_URL'), new \Symfony\Component\Mercure\Jwt\CallableTokenProvider(new \App\Services\Mercure\JwtProvider($container->getEnv('MERCURE_JWT_KEY'))), NULL, NULL, ($container->privates['http_client'] ?? $container->load('getHttpClientService'))), ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }
}
