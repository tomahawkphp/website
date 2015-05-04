<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Templates</li>
    </ol>

    <h1>
        Templates
    </h1>

    <div class="alert alert-info">
        This documentation is incomplete.
    </div>

    <p>
        Tomahawk uses <strong>Symfony's PhpEngine</strong> and <strong>Twig</strong> for templates.
        A Delegating engine is used so you can use either or both the template engines mentioned.
    </p>

    <p>
        The easiest way to use the Template component is to make sure your Controllers extend
        <code>Tomahawk\Routing\Controller</code>. You then have access to it through <code>$this->templating</code>.
    </p>

    <p>
        Otherwise just add the following parameter to the construct method of your
        Controller <code>Symfony\Component\Templating\EngineInterface</code> and it will get injected in through the Service Container.
    </p>

    <p>
        Template files must be in the <code>Resources/views</code> folder with you Bundle.
    </p>

    <p>
        For more information on the <strong>PhpEngine</strong> please refer to the docs
        <a class="link-me" href="http://symfony.com/doc/current/components/templating/introduction.html">here</a>.
        For more information on <strong>Twig</strong> please refer to the docs
        <a class="link-me" href="http://twig.sensiolabs.org/">here</a>.
    </p>


    <h2>
        Rendering A Template
    </h2>

    <p>
        A template name has the format <code>'Bundle:Section:view.engine'</code>
        The engine can be omitted and defaults to <code>.php</code>.
    </p>

    <h3>
        Rendering Using Full Template Name
    </h3>

    <p>
        Below is an example of rendering a template using the full name:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->templating->render('MyBundle:Home:index.php');
$this->templating->render('MyBundle:Home:index.twig');
</script>
</div>

    <h3>
        Rendering Using Partial Template Name
    </h3>

    <p>
        You can omit the Section if the template is in the view root page:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->templating->render('MyBundle::index.php');
$this->templating->render('MyBundle::index.twig');
$this->templating->render('MyBundle::index');
</script>
</div>

    <h3>
        Passing Parameters To The Template
    </h3>

    <p>
        You can pass parameters to the template file by passing an array as the second parameter to <code>render</code>.
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->templating->render('MyBundle::index.twig', array(
    'name' => 'Tom'
));
</script>
</div>

    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>