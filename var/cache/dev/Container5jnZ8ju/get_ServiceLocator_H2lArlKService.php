<?php

namespace Container5jnZ8ju;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H2lArlKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.H2lArlK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.H2lArlK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticationUtils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
            'managerRegistry' => ['services', 'doctrine_mongodb', 'getDoctrineMongodbService', true],
            'userRepository' => ['services', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'authenticationUtils' => '?',
            'managerRegistry' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
