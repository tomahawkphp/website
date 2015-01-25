<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Auth Manager</li>
    </ol>

    <h1>
        Auth Manager
    </h1>

    <p>
        The auth manager handles a users authentication status.
    </p>

    <p>
        The easiest way to use the Auth Manager is to make sure your Controllers extend
        <code>Tomahawk\Routing\Controller</code>. You then have access to it through <code>$this->auth</code>.
    </p>

    <p>
        Otherwise just add the following parameter to the construct method of your Controller
        <code>Tomahawk\Auth\AuthInterface</code> and it will get injected in through the Service Container.
    </p>

    <p>The config for Auth Manager can be found in the <code>app/config/security.php</code>.</p>


<div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>