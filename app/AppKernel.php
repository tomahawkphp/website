<?php

use Tomahawk\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new \Tomahawk\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Tomahawk\Bundle\GeneratorBundle\GeneratorBundle(),
            new \Tomahawk\Bundle\MigrationsBundle\MigrationsBundle(),
            new \Tomahawk\Bundle\DoctrineBundle\DoctrineBundle(),
            new \Tomahawk\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new \TomahawkPHP\Bundle\WebBundle\WebBundle(),
        );

        if ($this->getEnvironment() === 'dev') {
            $bundles[] = new \Tomahawk\Bundle\WebProfilerBundle\WebProfilerBundle();
        }

        return $bundles;
    }

    public function registerMiddleware()
    {
        return array(
            new \Tomahawk\HttpCore\Middleware\StringResponse(),
            new \Tomahawk\HttpCore\Middleware\HeaderCookies(),
            new \Tomahawk\Session\Middleware\Session(),
            new \TomahawkPHP\Middleware\ErrorMiddleware(),
        );
    }
}