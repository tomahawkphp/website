<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Bundles</li>
    </ol>

    <h1>
        Bundles
    </h1>

    <p>
        Bundles are a way of extending functionality in your Tomahawk App. You could have a bundle for your Frontend
        and another for your Backend, or even a bundle for sending emails.
    </p>


    <h2>
        Creating Your First Bundle
    </h2>

    <p>
        When you install Tomahawk, it comes with a basic bundle to get you started, with a Controller and View.
        You can either edit this one or create a new one.
    </p>

    <p>
        For ease all bundles should go in the <code>src</code> folder. This directory is PSR-4 autoloaded via composer.
    </p>

    <p>
        Below is the minimum you need to create a Bundle, there are no required methods to implement:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">
&lt;?php

namespace MyCompany\Bundle\WebBundle;

use Tomahawk\HttpKernel\Bundle\Bundle;

class WebBundle extends Bundle
{
}
</script>
</div>

    <h2>
        Doing more with your Bundles
    </h2>

    <p>
        There are 3 methods that you will most likely use, <code>boot</code> (When the Bundle boots),
        <code>shutdown</code> (When the Bundle shutsdown) and <code>getParent</code> (What Bundle to override).
    </p>

    <h3>
        Booting your Bundle
    </h3>

    <p>
        The <code>boot</code> method is used to register any services to setup you bundle or even add event listeners, for example:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

namespace MyCompany\Bundle\WebBundle;

use Tomahawk\HttpKernel\Bundle\Bundle;

class WebBundle extends Bundle
{
    public function boot()
    {
        $this->container->register(new My ServiceProvider());

        // Or a single service

        $this->container->set('email', new Mailer());
    }
}
</script>
</div>

    <h3>
        Shutting down your Bundle
    </h3>


    <p>
        The <code>shutdown</code> method is used to un-register any services in your bundle or remove event listeners, for example:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

namespace MyCompany\Bundle\WebBundle;

use Tomahawk\HttpKernel\Bundle\Bundle;

class WebBundle extends Bundle
{
    public function shutdown()
    {
        $this->container->remove('email');
    }
}
</script>
</div>

    <h3>
        Override an existing bundle
    </h3>


    <p>
        The <code>getParent</code> method is used when you want to override the functionality of an existing bundle.
        You simple return the name of that bundle:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

namespace MyCompany\Bundle\WebBundle;

use Tomahawk\HttpKernel\Bundle\Bundle;

class EmailBundle extends Bundle
{
    public function getParent()
    {
        return 'SimpleEmailBundle';
    }
}
</script>
</div>

    <h3>
        Bundle Routes
    </h3>


    <p>
        From version 1.2.0 of Tomahawk you can now define a path in your bundle to load routes from:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php


    /**
     * File path to load routes from
     *
     * /dir/to/routes.php
     *
     * @return mixed
     */
    public function getRoutePath()
    {
        return __DIR__ . '/Resources/routes.php';
    }

</script>
</div>

    <h3>
        Registering Event Listeners/Subscribers
    </h3>


    <p>
        From version 1.2.0 of Tomahawk you can now register event listener/subscribers. All bundles are loaded at this
        point giving you access to all services in the container
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php


    /**
     * Register any events for the bundle
     *
     * This is called after all bundles have been boot so you get access
     * to all the services
     *
     *
     * @param EventDispatcherInterface $dispatcher
     */
    public function registerEvents(EventDispatcherInterface $dispatcher)
    {
        $dispatcher->addSubscriber(...);
    }

</script>
</div>


<div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>