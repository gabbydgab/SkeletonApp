<?php

use Zend\Expressive\Application;
use Zend\Expressive\Container\ApplicationFactory;
use Zend\Expressive\Helper;

return [
    // Provides application-wide services.
    // We recommend using fully-qualified class names whenever possible as
    // service names.
    'dependencies' => [
        // Use 'invokables' for constructor-less services, or services that do
        // not require arguments to the constructor. Map a service name to the
        // class name.
        'invokables' => [
            // Fully\Qualified\InterfaceName::class => Fully\Qualified\ClassName::class,
            Helper\ServerUrlHelper::class => Helper\ServerUrlHelper::class,
            Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\ZendRouter::class,
        ],
        // Use 'factories' for services provided by callbacks/factory classes.
        'factories' => [
            Application::class                      => ApplicationFactory::class,            
            Helper\UrlHelper::class                 => Helper\UrlHelperFactory::class,
            Helper\ServerUrlMiddleware::class       => Helper\ServerUrlMiddlewareFactory::class,
            Helper\UrlHelperMiddleware::class       => Helper\UrlHelperMiddlewareFactory::class,     
            Zend\View\HelperPluginManager::class    => Zend\Expressive\ZendView\HelperPluginManagerFactory::class,
            Zend\Expressive\FinalHandler::class     => Zend\Expressive\Container\TemplatedErrorHandlerFactory::class,
            Zend\Expressive\Template\TemplateRendererInterface::class => 
                Zend\Expressive\ZendView\ZendViewRendererFactory::class,
            'translator'                => Zend\Mvc\Service\TranslatorServiceFactory::class     
        ],
        'abstract_factories' => [
//            Zend\Cache\Service\StorageCacheAbstractServiceFactory::class,
//            Zend\Log\LoggerAbstractServiceFactory::class,
            Zend\Navigation\Service\NavigationAbstractServiceFactory::class,
        ]
    ],
];
