<?php $view->extend('WebBundle::layout2') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Translations</li>
    </ol>

    <h1>
        Translations
    </h1>

    <p>
        Tomahawk uses <strong>Symfony's Translator Component</strong> to provide translations.
    </p>

    <p>
        The easiest way to use the Translator component is to access to it through the container <code>$container->get('translator')</code>.
    </p>

    <p>If your using it in a template you can use Php Helpers or Twig Extensions.</p>

    <h2>Configuration</h2>

    <p>You can configure the locale, translation and cache directories in <code>app/config/translation.php</code></p>

<div style="line-height: 21px">
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

return [

    'locale' => 'en_GB',

    'fallback_locale' => 'en_GB',

    'translation_dirs' => [
        dirname(__DIR__) .'/Resources/Translations',
    ],

    // False or cache directory
    'cache' => dirname(__DIR__) .'/../var/cache/translations',

];
</script>
</div>

    <h2>Basic Translation</h2>

    <p>You can use the <code>trans()</code> method to translate a simple message:</p>

<div style="line-height: 21px">
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$container->get('translator')->trans('Your awesome');
</script>
</div>


    <h2>Pluralization</h2>

    <p>You can use the <code>transChoice()</code> method to translate a string that might be plural:</p>

<div style="line-height: 21px">
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$container->get('translator')->transChoice('{0} There are no apples|{1} There is one apple|]1,Inf[ There are %count% apples', 5);
</script>
</div>

    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>