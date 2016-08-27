<?php $view->extend('WebBundle::layout2') ?>

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


    <p>Tomahawk uses the Symfony3 Event Dispatcher as it is quite powerful and easy to use.</p>

    <p>
        To access the event dispatcher just add the following parameter to the construct method of your Controller
        <code>Symfony\Component\EventDispatcher\EventDispatcherInterface</code>
        and it will get injected in through the Service Container.
    </p>

    <p>
        You can even access it through the container by doing <code>$container->get('event_dispatcher')</code>.
    </p>

    <p>For more information on how to use it please read the Symfony3 docs.</p>





    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>