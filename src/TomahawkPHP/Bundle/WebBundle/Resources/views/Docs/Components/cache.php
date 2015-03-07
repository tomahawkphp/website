<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Cache Manager</li>
    </ol>

    <h1>
        Cache Manager
    </h1>

    <p>
        Tomahawk's cache is built around Doctrine's Cache Component.
    </p>

    <p>
        The easiest way to use the Cache Manager is to make sure your Controllers extend
        <code>Tomahawk\Routing\Controller</code>. You then have access to it through <code>$this->cache</code>.
    </p>

    <p>
        Other wise just add the following parameter to the construct method of your
        Controller <code>Tomahawk\Cache\CacheInterface</code> and it will get injected in through the Service Container.
    </p>

    <h4>
        Putting something in the cache
    </h4>

    <p>You can put something in the cache by doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php
$this->cache->save('name', 'value');
</script>
</div>

    <h4>
        Getting something out of the cache
    </h4>

    <p>
        You can get something out of the cache by doing the following:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php
$this->cache->fetch('name');
</script>
</div>

    <h4>
        Checking if something is in the cache
    </h4>

    <p>
        You can check if something is in the cache by doing the following:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php
$this->cache->contains('name');
</script>
</div>

    <h4>
        Remove something from the cache
    </h4>

    <p>
        You can remove something from the cache by doing the following:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php
$this->cache->remove('name');
</script>
</div>
    <h4>
        Flush the cache
    </h4>

    <p>
        You can flush everything from the cache by doing the following:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php
$this->cache->flush();
</script>
</div>


<div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>