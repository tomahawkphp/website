<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Config Manager</li>
    </ol>

    <h1>
        Config Manager
    </h1>

    <p>
        The config manager holds all settings for the current environment.
    </p>

    <p>
        The easiest way to use the Config Manager is to make sure your Controllers extend
        <code>Tomahawk\Routing\Controller</code>. You then have access to it through <code>$this->config</code>.
    </p>

    <p>
        Other wise just add the following parameter to the construct method of your
        Controller <code>Tomahawk\Config\ConfigInterface</code> and it will get injected in through the Service Container.
    </p>

    <h4>
        Getting a config value
    </h4>

    <p>You can get a config value by doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php
$name = $this->config->get('name');
</script>
</div>

    <p>You can get a pass a default value in case a value isn't set:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php
$name = $this->config->get('name', 'Tom');
</script>
</div>

    <h4>
        Setting a config value
    </h4>

    <p>You can get a config value by doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php
$this->config->set('name', 'Tom Ellis');
</script>
</div>

<div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>