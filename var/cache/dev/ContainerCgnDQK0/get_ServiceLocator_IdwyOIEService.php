<?php

namespace ContainerCgnDQK0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IdwyOIEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IdwyOIE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IdwyOIE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'callApiService' => ['privates', 'App\\Service\\CallApiService', 'getCallApiServiceService', true],
        ], [
            'callApiService' => 'App\\Service\\CallApiService',
        ]);
    }
}
