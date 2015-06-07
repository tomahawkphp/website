<?php

namespace TomahawkPHP\Bundle\TemplateBundle\DI;

use Symfony\Component\Templating\PhpEngine;
use Tomahawk\DI\ContainerInterface;
use Tomahawk\DI\ServiceProviderInterface;
use Tomahawk\HttpKernel\Config\FileLocator;
use Tomahawk\Templating\Loader\FilesystemLoader;
use Symfony\Component\Templating\Loader\CacheLoader;
use Tomahawk\Templating\Loader\TemplateLocator;
use Tomahawk\Templating\TemplateNameParser;

class TemplateServiceProvider implements ServiceProviderInterface
{
    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param ContainerInterface $container An Container instance
     */
    public function register(ContainerInterface $container)
    {
        $container->set('templating.engine.php', function(ContainerInterface $c) {
            $kernel = $c->get('kernel');
            $config = $c->get('config');
            $locator = new FileLocator($kernel, $kernel->getRootDir() . '/Resources/');
            $templateLocator = new TemplateLocator($locator);
            $loader = new FilesystemLoader($templateLocator);

            $cacheLoader = new CacheLoader($loader, $config->get('templating.cache_dir'));
            $parser = new TemplateNameParser($kernel);
            return new PhpEngine($parser, $cacheLoader, $c->get('templating.php.helpers'));
        });
    }
}
