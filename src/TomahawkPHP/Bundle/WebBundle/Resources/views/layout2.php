<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('container') ?>
    <div class="main-container container">
        <div class="row">
            <div class="col-sm-3 col-md-2 left-nav">
                <?php echo $view->render('WebBundle:Partials:sidenav2', array('fw_version' => $fw_version, 'fw_versions' => $fw_versions)) ?>
            </div>
            <div class="col-sm-9 col-md-10 main">
                <?php echo $view['blocks']->get('content') ?>
            </div>
        </div>
    </div>
<?php $view['blocks']->stop() ?>
<?php $view['blocks']->output('container') ?>