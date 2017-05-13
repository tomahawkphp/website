<?php $view->extend('WebBundle::layout2') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Url Generator</li>
    </ol>

    <h1>
        Url Generator
    </h1>

    <div class="alert alert-info">
        This documentation is incomplete.
    </div>

    <p>
        Tomahawk's Url Generator extends Symfonys Url Generator, allowing you to generate a url to a
        <code>route</code> or <code>path</code> given.
    </p>

    <p>
        The easiest way to use the Url Generator component is to make sure your Controllers extend
        <code>Tomahawk\Routing\Controller</code>. You then have access to it through <code>$this->url</code>.
    </p>

    <p>
        Otherwise just add the following parameter to the construct method of your
        Controller <code>Tomahawk\Url\UrlGeneratorInterface</code> and it will get injected in through the Service Container.
    </p>

    <h2>Generating URL's</h2>

    <p>You can generate URL's to various paths, such as a route, path, secure path and even an asset such as JS, CSS or an image.</p>


    <h3>Generate A URL To A Route</h3>

    <p>You can generate a URL to a route doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->url->route('home');
</script>
</div>

    <h3>Generate A URL To A Route With Parameters</h3>

    <p>Say you have a route defined in the following way, that requires parameters:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

// Previous code omitted

$router->get('/user/edit/{id}', 'users.edit', 'UserController::editAction);
</script>
</div>

    <p>You can generate a URL to that route by doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->url->route('users.edit', array('id' => $id);
</script>
</div>

    <h3>Generate A URL To A Non Secure Path</h3>

    <p>You can generate a URL by doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->url->to('/account'); //http://example.com/account
</script>
</div>

    <h3>Generate A URL To A Secure Path</h3>

    <p>You can generate a URL by doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->url->secureTo('/account'); //https://example.com/account
</script>
</div>

    <h3>Generate A URL To A Path With Extra Parameters</h3>

    <p>You can generate a URL by doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$params = array(
    'view',
    1234,
);

$this->url->to('/order', $params); //http://example.com/order/view/1234
</script>
</div>



    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>