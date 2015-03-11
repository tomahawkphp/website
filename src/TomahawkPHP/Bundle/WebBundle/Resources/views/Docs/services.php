<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Services</li>
    </ol>

    <h1>
        Services
    </h1>


    <p>
        The Components implement common features needed to develop websites.
        They are the foundation of the Symfony full-stack framework, but they can also be used standalone even if you
        don't use the framework
        as they don't have any mandatory dependencies.
    </p>


<?php $view['blocks']->stop() ?>