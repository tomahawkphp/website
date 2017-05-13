<?php $view->extend('WebBundle::layout2') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Middleware</li>
    </ol>

    <h1>
        Middleware
    </h1>

    <div class="alert alert-info">
        This feature was removed in version 2.0 in favour of using Event Listeners for the
    </div>

<?php $view['blocks']->stop() ?>