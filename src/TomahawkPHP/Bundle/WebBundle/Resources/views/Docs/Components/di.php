<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Dependency Injection</li>
    </ol>

    <h1>
        Dependency Injection
    </h1>

    <p>
        The Dependency Injection component allows you to define the way objects are constructed in your application.
    </p>


<div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>