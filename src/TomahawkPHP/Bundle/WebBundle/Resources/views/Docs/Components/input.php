<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Input Manager</li>
    </ol>

    <h1>
        Input Manager
    </h1>

    <p>
        The Input Manager makes it easier accessing <code>GET</code> and <code>POST</code> for the request as well
        as old input data from the previous form request.
    </p>

    <p>
        The easiest way to use the Hasher is to make sure your Controllers extend
        <code>Tomahawk\Routing\Controller</code>. You then have access to it through <code>$this->input</code>.
    </p>

    <p>
        Other wise just add the following parameter to the construct method of your
        Controller <code>Tomahawk\Input\InputInterface</code> and it will get injected in through the Service Container.
    </p>

    <h2>
        Accessing GET data
    </h2>

    <p>
        ...
    </p>


    <h2>
        Accessing POST data
    </h2>

    <p>
        ...
    </p>

    <h2>
        Accessing Old Form data
    </h2>

    <p>
        ...
    </p>


    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>