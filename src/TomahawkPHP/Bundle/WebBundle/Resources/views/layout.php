<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $view['url']->asset('favicon.ico') ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo $view['url']->asset('favicon.ico') ?>">
    <title>TomahawkPHP Framework</title>
    <?php echo $assets->outputCss('head') ?>
    <?php echo $assets->outputJS('head') ?>
</head>

<body>

<?php $view['blocks']->startDefault('nav') ?>
    <?php echo $view->render('WebBundle:Partials:nav') ?>
<?php $view['blocks']->stopDefault() ?>
<?php $view['blocks']->output('nav') ?>

<?php $view['blocks']->startDefault('container') ?>
<div class="main-container container">
    <div class="row">
        <div class="col-sm-3 col-md-2 left-nav">
            <?php echo $view->render('WebBundle:Partials:sidenav', array('fwversion' => $fwversion)) ?>
        </div>
        <div class="col-sm-9 col-md-10 main">
            <?php echo $view['blocks']->get('content') ?>
        </div>
    </div>
</div>
<?php $view['blocks']->stopDefault() ?>
<?php $view['blocks']->output('container') ?>

<?php echo $assets->outputCss('footer') ?>
<?php echo $assets->outputJS('footer') ?>

<footer>
    <p>
        Tomahawk &copy; <?php echo date('Y') ?> Tom Ellis | Tomahawk logo by Thomas Hampson
    </p>
</footer>
</body>
</html>
