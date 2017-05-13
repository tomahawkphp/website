<?php $view->extend('WebBundle::layout2') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li><a href="#">Documentation</a></li>
        <li>Setup</li>
        <li class="active">Directory Structure</li>
    </ol>

    <h1>Directory Structure</h1>

    <p>
        A TomahawkPHP installation has the following directory structure.
        If you've used Symfony or Laravel, its quite similar (Although that was on purpose).
    </p>

    <img src="<?php echo $view['url']->asset('images/structure.png') ?>" alt="Directory Structure">

    <h2>App folder</h2>

    <p>This contains <code>config</code> files, <code>resources</code> such as translations,
        doctrine migrations, proxies and mappings and templates.
    </p>

    <p>The AppKernel is where you add/load your <code>Bundles</code>.</p>

    <p>hatchet is the cli for TomahawkPHP.</p>

    <h2>Bin Folder</h2>

    <p>If phpunit is installed the cli for this will be in here along with any others from dependencies installed
    through composer.</p>

    <h2>Src Folder</h2>

    <p>
        The most important folder of them all. This is where the default application bundle lives and where your code
        should live. This folder is <code>PSR-4</code> autoloaded so its ready to go.
    </p>

    <h2>Var folder</h2>

    <p>This is where <code>cache</code>, <code>logs</code> and <code>session data</code> lives.</p>

    <h3>Vendor folder</h3>

    <p>The <code>Composer</code> vendor folder.</p>

    <h3>Web folder</h3>

    <p>This is where the frontend controllers <code>app.php</code> and <code>app_dev.php</code> live. Its
    also where you <code>css</code>, <code>js</code> and other assets go.</p>




<?php $view['blocks']->stop() ?>