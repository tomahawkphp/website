<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Hashing</li>
    </ol>

    <h1>
        Hashing
    </h1>

    <p>
        The hashing component is used to hash strings and verify hashed string.
    </p>

    <p>
        You find it used mostly used for comparing a plain password with the hashed version from a data store.
    </p>

    <p>
        The easiest way to use the Hasher is to make sure your Controllers extend
        <code>Tomahawk\Routing\Controller</code>. You then have access to it through <code>$this->hasher</code>.
    </p>

    <p>
        Other wise just add the following parameter to the construct method of your
        Controller <code>Tomahawk\Hashing\HasherInterface</code> and it will get injected in through the Service Container.
    </p>

    <h3>
        Hashing a string
    </h3>

    <p>
        To hash a string you would do the following:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$hashed = $this->hasher->make('password');
</script>
</div>


    <h3>
        Validating a hashed string with original
    </h3>

    <p>
        To check a hashed string with the original string you would do the following:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$raw = 'password';
$hashed = $this->hasher->make($raw);

$valid = $this->hasher->check($raw, $hashed); //true
</script>
</div>

    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>