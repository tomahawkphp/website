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

    <div class="alert alert-info">
        This documentation is incomplete.
    </div>

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
        3) Create the front controller. In the <code>web</code> folder copy <code>app.php</code> and set the name
        as <code>app_env.php</code> e.g. <code>app_local.php</code>.
    </p>

    <p>
        4) Boom! Your all good to go.
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
        debugging on.
    </p>


<div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>