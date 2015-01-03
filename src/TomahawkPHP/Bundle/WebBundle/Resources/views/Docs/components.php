<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">The Components</li>
    </ol>

    <h1>
        The Components
    </h1>



<?php $view['blocks']->stop() ?>