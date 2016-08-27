<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Extending Tomahawk</li>
    </ol>

    <h1>
        Extending Tomahawk
    </h1>

    <div class="alert-info alert">
        Documentation coming soon. In the meantime please view our API.
    </div>



<?php $view['blocks']->stop() ?>