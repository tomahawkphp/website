<?php

use Tomahawk\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new \Tomahawk\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Tomahawk\Bundle\MonologBundle\MonologBundle(),
            new \Tomahawk\Bundle\ErrorHandlerBundle\ErrorHandlerBundle(),
            new \Tomahawk\Bundle\GeneratorBundle\GeneratorBundle(),
            new \Tomahawk\Bundle\DoctrineBundle\DoctrineBundle(),
            new \Tomahawk\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new \TomahawkPHP\Bundle\WebBundle\WebBundle(),
        );

        if ($this->getEnvironment() === 'dev') {
            $bundles[] = new \Tomahawk\Bundle\WebProfilerBundle\WebProfilerBundle();
        }

        return $bundles;
    }
}