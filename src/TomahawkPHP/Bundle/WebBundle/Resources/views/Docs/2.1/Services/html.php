<?php $view->extend('WebBundle::layout2') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">HTML Builder</li>
    </ol>

    <h1>
        HTML Builder
    </h1>

    <p>
        The HTML Builder makes it easier to output and manipulate HTML in a view template.
    </p>


    <h2>Using the HTML Builder</h2>

    <p>
        To create a new HTML Builder you would create an instance of <code>Tomahawk\Html\HtmlBuilder</code>:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Html\HtmlBuilder;

$html = new HtmlBuilder();
</script>
</div>

    <h3>HTML Entities</h3>

    <p>Convert all applicable characters to HTML entities.</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Html\HtmlBuilder;

$html = new HtmlBuilder();

$html->entities('<p>hello</p>');
</script>
</div>

    <h3>Script Tags</h3>

    <p>Output <code>&lt;script&gt;</code> element to a given source.</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Html\HtmlBuilder;

$html = new HtmlBuilder();

$html->script('/js/jquery.js');
//Returns &lt;script src="/js/jquery.js"&gt;&lt;/script&gt;
</script>
</div>

    <p>You can also pass an array of attributes as the 2nd parameter:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Html\HtmlBuilder;

$html = new HtmlBuilder();

$html->script('/js/jquery.js', array('media' => 'all'));
//Returns &lt;script media="all" src="/js/jquery.js"&gt;&lt;/script&gt;
</script>
</div>

    <h3>Style Tags</h3>

    <p>Output <code>&lt;link&gt;</code> element to a given source.</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Html\HtmlBuilder;

$html = new HtmlBuilder();

$html->style('/css/style.css');
//Returns &lt;link rel="stylesheet" type="text/css" href="/css/style.css" /&gt;
</script>
</div>

    <p>You can also pass an array of attributes as the 2nd parameter:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Html\HtmlBuilder;

$html = new HtmlBuilder();

$html->style('/css/style.css', array('media' => 'all'));
//Returns &lt;link rel="stylesheet" type="text/css" href="/css/style.css" media="all" /&gt;
</script>
</div>


    <h3>Links</h3>

    <p>Output <code>&lt;a&gt;</code> element to a given url.</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Html\HtmlBuilder;

$html = new HtmlBuilder();

$html->link('/about', 'About');
//Returns &lt;a href="/about"&gt;About&lt;/a&gt;
</script>
</div>

    <p>You can also pass an array of attributes as the 3rd parameter:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Html\HtmlBuilder;

$html = new HtmlBuilder();

$html->link('/about', 'About', array('class' => 'active'));
//Returns &lt;a href="/about" class="active"&gt;About&lt;/a&gt;
</script>
</div>

    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>