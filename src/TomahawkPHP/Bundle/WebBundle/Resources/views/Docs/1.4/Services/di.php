<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Dependency Injection</li>
    </ol>

    <h1>
        Dependency Injection
    </h1>

    <p>
        The Dependency Injection (DI) component allows you to define the way objects are constructed in your application.
    </p>

    <h3>
        Adding single services to the DI Container.
    </h3>

    <p>
        The easiest way to add services is to do it in a Bundle.
        You can read more about them
        <a class="link-me" href="<?php echo $view['url']->route('docs.services.bundles') ?>">here</a>.
    </p>

    <p>
        Below is an example of adding a service to the DI Container:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

namespace MyCompany\Bundle\WebBundle;

use Tomahawk\HttpKernel\Bundle\Bundle;

class WebBundle extends Bundle
{
    public function boot()
    {
        $this->container->set('email', new Mailer());
    }
}
</script>
</div>


    <p>
        What if your service required another service as a parameter,
        well you just need to pass the second parameter as a closure:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

namespace MyCompany\Bundle\WebBundle;

use Tomahawk\HttpKernel\Bundle\Bundle;
use Tomahawk\DI\ContainerInterface;

class WebBundle extends Bundle
{
    public function boot()
    {
        $this->container->set('email', function(ContainerInterface $c) {
            return new Mailer($c->get('transport'));
        });
    }
}
</script>
</div>


    <p>
        The above examples will return the same object each time,
        if you wanted to return a different object every time you got it out of the DI container you can do:
    </p>


<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

namespace MyCompany\Bundle\WebBundle;

use Tomahawk\HttpKernel\Bundle\Bundle;
use Tomahawk\DI\ContainerInterface;

class WebBundle extends Bundle
{
    public function boot()
    {
        $this->container->set('email', $this->container->factory(function(ContainerInterface $c) {
            return new Mailer($c->get('transport'));
        }));
    }
}
</script>
</div>


    <h3>
        Creating a Service Provider
    </h3>

    <p>
        To create a service provider you need to implement the <code>Tomahawk\DI\ServiceProviderInterface</code> interface.
    </p>

    <p>The <code>ServiceProviderInterface</code> only has one method called <code>register</code> to implement.</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

namespace MyCompany\Bundle\WebBundle\DI;

use Tomahawk\DI\ServiceProviderInterface;
use Tomahawk\DI\ContainerInterface;

class EmailServiceProvider implements ServiceProviderInterface
{
    public function register(ContainerInterface $container)
    {
        $container->set('email', function(ContainerInterface $c) {
            return new Mailer($c->get('email.transport'));
        });

        $container->set('email.transport', function(ContainerInterface $c) {
            return new Transport();
        });
    }
}
</script>
</div>


    <p>You remember the services we registered in the Bundle earlier, this can be replaced with the service provider instead:</p>


<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

namespace MyCompany\Bundle\WebBundle;

use Tomahawk\HttpKernel\Bundle\Bundle;
use Tomahawk\DI\ContainerInterface;
use MyCompany\Bundle\WebBundle\DI\EmailServiceProvider;

class WebBundle extends Bundle
{
    public function boot()
    {
        $this->container->register(new EmailServiceProvider());
    }
}
</script>
</div>

<div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>