<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Asset Manager</li>
    </ol>

    <h1>Asset Manager</h1>

    <p>
        The asset manager holds containers for you JS and CSS assets.
    </p>

    <p>
        The easiest way to use the Asset Manager is to make sure your Controllers extend
        <code>Tomahawk\Routing\Controller</code>. You then have access to it through <code>$this->assets</code>.
    </p>

    <p>
        Other wise just add the following parameter to the construct method of your
        Controller <code>Tomahawk\Asset\AssetManagerInterface</code> and it will get injected in through the Service Container.
    </p>

    <hr>

    <h3>
        Asset Containers
    </h3>

    <p>
        Asset containers are great for grouping assets under a particular group or section, e.g header and footer JS.
    </p>

    <h4>
        Adding assets
    </h4>

    <p>The <code>addJs</code> and <code>addCss</code> methods accepts 4 parameters:</p>

    <ul>
        <li>name - Name of the asset</li>
        <li>path - path to asset</li>
        <li>dependencies - array of assets to be loaded before this</li>
        <li>attributes - array of html attributes to put on tags during render</li>
    </ul>

    <p>You can create a new Asset Container by doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php
$container = new Tomahawk\Asset\AssetContainer();
$container->addJs('jquery-ui', 'js/jquery-ui/jquery-ui.js');
$container->addCss('jquery-ui-css', 'js/jquery-ui/jquery-ui.css');
</script>
</div>

    <p>And this is how you set dependencies:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php
$container = new Tomahawk\Asset\AssetContainer();
$container->addJs('jquery', 'js/jquery.js');
$container->addJs('jquery-ui', 'js/jquery-ui.js', array('jquery'));
</script>
</div>

    <p>You can also add extra parameters</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php
$container = new Tomahawk\Asset\AssetContainer();
$container->addJs('jquery', 'js/jquery.js');
$container->addJs('jquery-ui', 'js/jquery-ui.js', array('jquery'), array('media' => 'all');
</script>
</div>

    <p>Once your done you just add the container to the manager:</p>


<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php
$container = new Tomahawk\Asset\AssetContainer();
$container->addJs('jquery', 'js/jquery.js');
$container->addJs('jquery-ui', 'js/jquery-ui.js', array('jquery'), array('media' => 'all');

$this->assets->addContainer($container);
</script>
</div>

    <h4>
        Outputting Assets
    </h4>

    <p>
        First you need to pass the asset manager to a view, you can do that my doing the following in your controller:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php
$container = new Tomahawk\Asset\AssetContainer();
$container->addJs('jquery', 'js/jquery.js');
$container->addJs('jquery-ui', 'js/jquery-ui.js', array('jquery'), array('media' => 'all');

$this->assets->addContainer($container);

return $this->renderView('MyBundle:Section:index', array(
    'assets' => $this->assets
));
</script>
</div>

    <p>Then just tell the manager what asset type to output and from what container:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php echo $assets->outputCss('head') ?&gt;
&lt;?php echo $assets->outputJS('head') ?&gt;
</script>
</div>

<div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>