<?php $view->extend('WebBundle::layout2') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Error Handling &amp; Logging</li>
    </ol>

    <h1>
        Error Handling &amp; Logging
    </h1>

    <p>
        From Tomahawk 2.0.0 it ships with a <code>ErrorHandlerBundle</code>
        which is used for catching and logging errors as well as rendering responses for <strong>404</strong>
        and all <strong>50x</strong> errors.
    </p>

    <h2>Creating Error Templates</h2>
    <hr>

    <p>
        In <code>app/Resources/ErrorHandlerBundle/views</code> there are 3 templates:
    </p>

    <ul>
        <li>error500.twig</li>
        <li>error404.twig</li>
        <li>exception.twig</li>
    </ul>

    <p>You can create a template with the name errorXXX.php for a specific HTTP Status Code.</p>

    <p>If a template doesn't exist for a specific HTTP Status code then exception.twig will be used.</p>

    <h2>Error Logging</h2>
    <hr>

    <p>Tomahawk uses Monolog for logging errors. It has quite a simple setup.</p>

    <p>
        In <code>app/config</code> there will be a file called <code>logging.php</code>.
    </p>

    <p>Tomahawk allows you to use either the <code>stream</code>, <code>rotating_file</code> or <code>fingers_crossed</code> handlers.</p>


    <h3>Custom Logging Handler</h3>
    <hr>

    <p>
        You can write your own handler by implementing <code>Monolog\Handler\HandlerInterface</code>, adding the handler to the
        service container and adding it to the logging config as follows:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

return [

// Handlers
'handlers' => [
    'my_handler' => 'logger.my.handler'
],
</script>
</div>

    <h3>Using the Logger</h3>
    <hr>
    <p>
        The easiest way to use the logger is to just add the following parameter to the construct method of your
        Controller <code>Psr\Log\LoggerInterface</code> and it will get injected in through the Service Container.
    </p>
    <p>
        You can also get into out of the container by doing <code>$container->get('logger')</code>.
    </p>

    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>