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
        Tomahawk uses <strong>Symfony's Php Engine</strong> and <strong>Twig Engine</strong> for templates.
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

    <h3>Global Variables</h3>

    <p>Tomahawk also allows you to pass global variables to your templates. There are 2 ways to do it.</p>

    <p>One way is to to add them to the <code>app/templating.php</code> config. e.g:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

return [

    // Other settings omitted

    'globals' => [
        'website_name' => 'My Awesome Website'
    ]

];
</script>
</div>

    <p>
        Another way is to tag a service in your container with <code>php.global</code> when using Php Engine or
        <code>twig.global</code> when using twig
    </p>

    <h3>Reserved Global Variable</h3>

    <p>There is a reserved global variable called <code>app</code>. This is an instance of
        <code>\Tomahawk\Templating\GlobalVariables</code> and gives you access to the request, current logged in user (if any),
        session, environment and if debug mode is enabled.
    </p>

    <p>The following methods are available:</p>

    <ul>
        <li>$app->getRequest()</li>
        <li>$app->getUser()</li>
        <li>$app->getSession()</li>
        <li>$app->getEnvironment()</li>
        <li>$app->isDebug()</li>
    </ul>

    <h2>Php Engine</h2>
    <hr>

    <p>
        Php Engine is the easiest templating engine to use. It uses a global <code>$view</code>
        variable which is an instance of the Php Engine.
    </p>

    <p>You can read more about Symfony templating here <a target="_blank" class="links" href="http://symfony.com/doc/current/components/templating.html">here</a>.</p>

    <h3>Helpers</h3>

    <hr>

    <p>Php Engine has a few helpers you can use when creating templates:</p>

    <h4>Slot Helper</h4>
    <hr>
    <p>Tomahawk uses the Slot helper from Symfony. You can read more about the Slot helper <a class="links" href="http://symfony.com/doc/current/components/templating/slotshelper.html">here</a> </p>

    <p></p>

    <p>The slot helper is used to define and output different parts of a template</p>

    <h4>Block Helper</h4>
    <hr>

    <p>
        The block helper is an more advanced slot helper that allows you to set default content.
        You can use the Block helper by accessing <code>$view['blocks']</code>.
    </p>


    <p>To create a default content block (for example in a layout template) you would do the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">
&lt;?php $view['blocks']-&gt;startDefault('container') ?&gt;
     &lt;h1&gt;Default Content&lt;/h1&gt;
&lt;?php $view['blocks']-&gt;stopDefault() ?&gt;
&lt;?php $view['blocks']-&gt;output('container') ?&gt;
</script>
</div>

    <p>Then to override in another template you would do the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">
&lt;?php $view['blocks']-&gt;start('container') ?&gt;
    &lt;h1&gt;Overridden Content&lt;/h1&gt;
&lt;?php $view['blocks']-&gt;stop() ?&gt;
</script>
</div>

    <h4>Translator Helper</h4>
    <hr>


    <p>You can use the Translator helper by accessing <code>$view['translator']</code>
        which will be an instance of <code>\Symfony\Component\Translation\TranslatorInterface</code>.
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">
&lt;?php $view['url']-&gt;trans($id, array $parameters = array(), $domain = null, $locale = null) ?&gt;
&lt;?php $view['url']-&gt;transChoice($id, $number, array $parameters = array(), $domain = null, $locale = null) ?&gt;
</script>
</div>

    <p></p>

    <h4>Url Generator Helper</h4>
    <hr>

    <p>You can use the Url helper by accessing <code>$view['url']</code>
        which will be an instance of <code>\Tomahawk\Url\UrlGeneratorInterface</code>.
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">
&lt;?php $view['url']-&gt;getBaseUrl() ?&gt;
&lt;?php $view['url']-&gt;getCurrentUrl() ?&gt;
&lt;?php $view['url']-&gt;asset($path, array $extra = array(), $secure = false) ?&gt;
&lt;?php $view['url']-&gt;secureTo($path = '', array $extra = array(), $secure = false, $asset = false) ?&gt;
&lt;?php $view['url']-&gt;validateUrl($url) ?&gt;
&lt;?php $view['url']-&gt;route($name, $data = array()) ?&gt;
</script>
</div>

    <p></p>

    <h4>Example</h4>

    <p>Below is a simple example of creating a template:</p>

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


    <h2>Twig</h2>
    <hr>

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

    <h3>Extensions</h3>

    <p>Tomahawk provides 2 extensions for Twig</p>

    <h4>Translator Extension</h4>

    <p>The Translator extension internally uses the Symfony Translator which is an
        instance of <code>\Symfony\Component\Translation\TranslatorInterface</code>.
    </p>

    <p>You can use them as follows:</p>

<div>
<script data-style="twig" type="x-code-example">
{{ trans(id, parameters, domain, locale) }}

{{ transChoice(id, number, parameters, domain, locale) }}
</script>
</div>

    <h4>Url Generator Extension</h4>

    <p>The Url Generator extension internally uses the Tomahawk Url Generator which is an
        instance of <code>\Tomahawk\Url\UrlGeneratorInterface</code>.
    </p>

    <p>You can use them as follows:</p>


<div>
<script data-style="twig" type="x-code-example">
{{ base_url() }}

{{ current_url() }}

{{ asset_url(path, extra, secure) }}

{{ url_to(path, extra, secure, asset) }}

{{ secure_url_to(path, extra, secure, asset) }}

{{ route(name, data) }}
</script>
</div>
    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>