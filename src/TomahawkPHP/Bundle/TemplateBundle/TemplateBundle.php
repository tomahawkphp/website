<?php

namespace TomahawkPHP\Bundle\TemplateBundle;

use Tomahawk\HttpKernel\Bundle\Bundle;
use TomahawkPHP\Bundle\TemplateBundle\DI\TemplateServiceProvider;

class TemplateBundle extends Bundle
{
    public function boot()
    {
        $this->container->register(new TemplateServiceProvider());
    }
}
