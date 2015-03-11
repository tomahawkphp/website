<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Validation</li>
    </ol>

    <h1>
        Validation
    </h1>

    <p>
        Coming soon...
    </p>


    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>