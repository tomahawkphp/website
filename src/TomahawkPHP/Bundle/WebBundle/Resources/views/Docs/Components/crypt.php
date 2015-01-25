<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Encryption</li>
    </ol>

    <h1>
        Encryption
    </h1>

    <p>
        The Encryption component is used to encrypt and decrypt strings.
    </p>

    <p>
        The easiest way to use the Encryption component is to make sure your Controllers extend
        <code>Tomahawk\Routing\Controller</code>. You then have access to it through <code>$this->crypt</code>.
    </p>

    <p>
        Otherwise just add the following parameter to the construct method of your
        Controller <code>Tomahawk\Encryption\CryptInterface</code> and it will get injected in through the Service Container.
    </p>


<div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>