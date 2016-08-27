<?php $view->extend('WebBundle::layout') ?>

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
        From Tomahawk 1.2.0, there is an <strong>Exception Middleware</strong> (
        <code>Tomahawk\HttpKernel\Middleware\ExceptionMiddleware</code>)
        <br>
        which is used for catching and logging errors as well as rendering responses for <strong>404</strong>
        and all <strong>50x</strong> errors.
    </p>

    <h2>
        Configuration
    </h2>

    <h3>Error Templates</h3>

    <p>
        In <code>app/config</code> there should be a file called <code>error.php</code>.
        If there isn't create it and add the following to it:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

return array(

    /*
     * 50x Template
     */
    'template_50x' =>  ':Error:50x.php',

    /*
     * 404 Template
     */
    'template_404' =>  ':Error:404.php',
);

</script>
</div>

    <p>
        Here you can configure what templates are used for 404 and 50x errors.
        If you used Tomahawk before version 1.2.0 you will have to add these in.
    </p>

    <h3>
        Error Logging
    </h3>

    <p>Tomahawk uses Monolog for logging errors. It has quite a simple setup. There is one handler which logs to a daily file.</p>

    <p>
        In <code>app/config</code> there should be a file called <code>monolog.php</code>.
        If there isn't create it and add the following to it:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

return array (

    /*
     * Directory to log to
     */
    'path' => __DIR__ . '/../storage/logs',

    /*
     * Name of log file
     */
    'name' => 'tomahawk.log',

);

</script>
</div>

    <p>Here you can edit where the logs are written too as well as the name of the log file. The RotatingFileHandler will add the date to this filename.</p>

    <h2>Using the Logger</h2>

    <p>
        The easiest way to use the logger is to just add the following parameter to the construct method of your
        Controller <code>Psr\Log\LoggerInterface</code> and it will get injected in through the Service Container.
    </p>
    <p>
        You can also get into out of the container by doing <code>$this->container->get('logger')</code>.
    </p>

    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>