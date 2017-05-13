<?php $view->extend('WebBundle::layout2') ?>

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
        Tomahawk comes with various services to help you build your website.
    </p>

    <p>
        Some services take advantage of the Symfony3 components and some have been written for Tomahawk.
    </p>


<?php $view['blocks']->stop() ?>