<?php $view->extend('WebBundle::layout') ?>

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
        The HTML Builder makes it easier to output HTML in a view template.
    </p>


    <h2>Using the HTML Builder</h2>

    <p>
        To create a new HTML Builder you would create an instance of <code>Tomahawk\Html\HtmlBuilder</code>:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">
&lt;?php

use Tomahawk\Html\HtmlBuilder;

$html = new HtmlBuilder();
</script>
</div>

    <h3>HTML Entities</h3>

    <p> Convert all applicable characters to HTML entities.</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">
&lt;?php

use Tomahawk\Html\HtmlBuilder;

$html = new HtmlBuilder();

$html->entities('<p>hello</p>');
</script>
</div>

    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>