<?php

namespace TomahawkPHP\Bundle\WebBundle;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Tomahawk\DependencyInjection\ContainerInterface;
use Tomahawk\HttpKernel\Bundle\Bundle;

class WebBundle extends Bundle
{
    public function boot()
    {
        // Add the paths into doctrine config
        $config = $this->container->get('config');

        $doctrineConfig = $config->get('doctrine');

        $doctrineConfig['mapping_directories'][] = __DIR__ .'/Resources/Doctrine/Mapping';

        $config->set('doctrine', $doctrineConfig);

        $this->container->set('user_repository', function(ContainerInterface $c) {
            return $c['doctrine.entitymanager']->getRepository('TomahawkPHP\Bundle\WebBundle\Model\User');
        });
    }

    public function registerEvents(EventDispatcherInterface $dispatcher)
    {
        $container = $this->container;

        $dispatcher->addListener(KernelEvents::REQUEST, function(GetResponseEvent $event) use($container) {

            $file = $container->get('kernel')->getRootDir() . '/../maintenance';

            if (file_exists($file)) {
                $event->setResponse(new Response('Application is down for maintenance'));
            }
        });
    }
}
