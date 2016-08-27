<?php $view->extend('WebBundle::layout2') ?>

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

    <p>
        Tomahawk uses <strong>Symfony's PhpEngine</strong> and <strong>Twig</strong> for templates.
        A Delegating engine is used so you can use either or both the template engines mentioned.
    </p>

    <p>
        The easiest way to use the Template component is to access to it through the container <code>$container->get('templating')</code>.
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


    <h2>Rendering A Template</h2>

    <hr>

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

    <h3>PhpEngine</h3>

    <p>PhpEngine is the easiest templating engine to use. Below is a simple example of creating a template:</p>

    <p>You can read more about Symfony templating here <a target="_blank" class="links" href="http://symfony.com/doc/current/components/templating.html">here</a>.</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;!doctype html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;&lt;?php $view['slots']-&gt;output('title', 'Default title') ?&gt;&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;?php $view['blocks']-&gt;startDefault('container') ?&gt;
&lt;?php $view['blocks']-&gt;stopDefault() ?&gt;
&lt;?php $view['blocks']-&gt;output('container') ?&gt;

&lt;/body&gt;
&lt;/html&gt;
</script>
</div>

    <p>And then using that layout in another template</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php $view-&gt;extend('WebBundle::layout.php') ?&gt;

&lt;?php $view['slots']->set('title', 'Dashboard') ?&gt;

&lt;?php $view['blocks']-&gt;start('content') ?&gt;

    &lt;h1&gt;Dashboard&lt;/h1&gt;

&lt;?php $view['blocks']-&gt;stop() ?&gt;
</script>
</div>

    <h3>Twig</h3>

    <p>Twig is an amazing templating engine from SensioLabs, the people that bought us the Symfony framework.</p>

    <p>You can find documentation on Twig <a target="_blank" class="links" href="http://twig.sensiolabs.org/documentation">here</a>.</p>

    <p>Below is a simple example of creating a layout template:</p>

<div>
<script data-style="twig" type="x-code-example">&lt;!-- "WebBundle:Home:index.twig --&gt;
&lt;!doctype html&gt;
&lt;html&gt;
&lt;head&gt;
    {% block title %}{% endblock %}
&lt;/head&gt;
&lt;body&gt;
{% block content %}
    <h1>Dashboard</h1>
{% endblock %}
&lt;/body&gt;
&lt;/html&gt;
</script>
</div>

    <p>And then using that layout in another template</p>

<div>
<script data-style="twig" type="x-code-example">
{% extends "WebBundle:Home:index.twig" %}
    {% block title %}Dashboard{% endblock %}
{# this is a comment #}
{% block content %}
    <h1>Dashboard</h1>
{% endblock %}
</script>
</div>

    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>