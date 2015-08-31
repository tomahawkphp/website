<?php

namespace TomahawkPHP\Bundle\WebBundle;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Tomahawk\DI\ContainerInterface;
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


        $this->container->set('Psr\Log\LoggerInterface', function(ContainerInterface $c) {

            $config = $c['config'];
            $kernel = $c['kernel'];


            // Create a log channel
            $log = new Logger('tomahawk_logger');
            $log->pushHandler(new StreamHandler('php://stdout'));

            return $log;
        });
    }
}
