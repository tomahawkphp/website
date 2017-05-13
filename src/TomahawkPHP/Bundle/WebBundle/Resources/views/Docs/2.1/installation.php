<?php $view->extend('WebBundle::layout2') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li><a href="#">Documentation</a></li>
        <li>Setup</li>
        <li class="active">Installation</li>
    </ol>

    <h1>
        Installation
    </h1>

    <h2>Server Requirements</h2>
    <ul>
        <li>PHP 5.6.4+ (We recommend 7.0 as its awesome)</li>
        <li>PDO Extension</li>
        <li>MCrypt PHP Extension</li>
    </ul>

    <hr>

    <h2>Installing Tomahawk</h2>

    <p>
        Tomahawk uses Composer to manage its dependencies.
        You can download it <a class="link-me" href="https://getcomposer.org/">here</a>.
    </p>

    <h3>Via Composer</h3>

    <p>You can run the following to pull down Tomahawk Standard and install the framework:</p>

    <pre class="codeprint"><code>composer create-project tomahawk/standard project-name</code></pre>

    <h3>Manually</h3>

    <p>
        Tomahawk Standard is the front end to the framework. It contains all your config files, views, controllers etc.
    </p>
    <p>

        You can download it <a class="link-me" href="https://github.com/tomahawkphp/standard/releases">here</a>.
        Extract the zipped file to the directory you'll be running the site from and then run the following in
        that directory.
    </p>

    <pre class="codeprint"><code>composer install</code></pre>


    <p>You now have TomahawKPHP installed!</p>

    <p>Open your project in a text editor and open <code>app/config/request.php</code></p>

    <p>Change the host and port values to your required needs and open in a web browser.</p>

    <hr>

<?php $view['blocks']->stop() ?>