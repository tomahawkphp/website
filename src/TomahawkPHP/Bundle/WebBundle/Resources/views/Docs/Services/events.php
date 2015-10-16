<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Event Dispatcher</li>
    </ol>

    <h1>
        Event Dispatcher
    </h1>


    <p>Tomahawk uses the Symfony2 Event Dispatcher as it is quite powerful and easy to use.</p>

    <p>
        To access the event dispatcher just add the following parameter to the construct method of your Controller
        <code>Symfony\Component\EventDispatcher\EventDispatcherInterface</code>
        and it will get injected in through the Service Container.
    </p>

    <p>
        You can even access it throught the container by doing <code>$this->container->get('event_dispatcher')</code>.
    </p>

    <p>For more information on how to use it please read the Symfony2 docs.</p>





    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>