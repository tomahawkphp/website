<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Environments</li>
    </ol>

    <h1>
        Environments
    </h1>

    <p>
        Environments allow you to run Tomahawk with different configuration, locally, on a dev box and on a production server.
    </p>

    <p>
        For example locally you may have a filesytem driver used for caching,
        whereas on a development or production server you may have redis setup.
    </p>

    <p>
        Tomahawk comes with 2 environments, <code>prod</code> and <code>dev</code>, each one having
        its own front controller to send all requests through, <code>app.php</code> for prod and
        <code>app_dev.php</code> for dev.
    </p>

    <hr>

    <h2>Executing an Application in different environments</h2>

    <p>
        To execute an application in each environment, load up the application using either of the front controllers,
        again <code>app.php</code> for prod or <code>app_dev.php</code> for dev, or any that you have setup:
    </p>

    <ul>
        <li>http:://yourdomain.com/app.php - prod environment</li>
        <li>http:://yourdomain.com/app_dev.php - dev environment</li>
    </ul>

    <hr>

    <h2>Selecting the Environment for Console Commands</h2>

    <p>
        By default, any commands ran in <code>hatchet</code>, Tomahawks CLI are ran with the <code>dev</code> environment with
        debugging on. Use the <code>--env</code> and <code>--no-debug</code> options to modify this behavior:
    </p>

<div>
<script data-style="text/x-sh" type="x-code-example">
# 'dev' environment and debug enabled
$ php app/hatchet

# 'prod' environment (debug is always disabled for 'prod')
$ php app/hatchet command_name --env=prod

# 'test' environment and debug disabled
$ php app/hatchet command_name --env=test --no-debug

</script>
</div>

    <p>
        In addition to the <code>--env</code> and <code>--debug</code> options, the behavior of Tomahawk commands can also be
        controlled with environment variables. The Tomahawk console application (hatchet) checks the existence
        and value of these environment variables before executing any command:
    </p>

    <p>
        <code>TOMAHAWK_ENV</code>
        Sets the execution environment of the command to the value of this variable (<code>dev</code>, <code>prod</code>, etc.);
    </p>
    <p>
        <code>TOMAHAWK_DEBUG</code>
        If <code>0</code>, debug mode is disabled. Otherwise, debug mode is enabled.
    </p>


    <hr>

    <h2>Creating New Environments</h2>


    <p>
        Creating a new environment is easy:
    </p>

    <p>
        1) In your <code>app/config</code> directory create a directory for the name of
        your environment, e.g <code>local</code>.
    </p>

    <p>
        2) Then copy from the main <code>app/config</code> and config files you want to change for that environment.
        See the configuration section for more details on setting these.
    </p>

    <p>
        3) You'll want this environment to be accessible via a browser, so you should also create a front controller
        for it. Copy the <code>web/app.php</code> file to <code>web/app_local.php</code> and edit the environment to be local:
    </p>


<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php
// web/app_local.php
// ...

// You only need to change this line
$kernel = new AppKernel('local', true);

// ...
</script>
</div>


    <p>
        5) Boom! Your all good to go.
    </p>

<div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>