<?php

namespace ContainerCgnDQK0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_TypeGuesser_Doctrine_MongodbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.type_guesser.doctrine.mongodb' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\Form\DoctrineMongoDBTypeGuesser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/Form/DoctrineMongoDBTypeGuesser.php';

        return $container->privates['form.type_guesser.doctrine.mongodb'] = new \Doctrine\Bundle\MongoDBBundle\Form\DoctrineMongoDBTypeGuesser(($container->services['doctrine_mongodb'] ?? $container->load('getDoctrineMongodbService')));
    }
}
