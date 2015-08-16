<?php

namespace TomahawkPHP\Bundle\WebBundle;

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
    }
}
