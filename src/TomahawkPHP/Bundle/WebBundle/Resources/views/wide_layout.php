<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('container') ?>
    <div class="main-container container">
        <div class="row">
            <div class="col-sm-12 col-md-12 main">
                <?php echo $view['blocks']->get('content') ?>
            </div>
        </div>
    </div>
<?php $view['blocks']->stop() ?>
<?php $view['blocks']->output('container') ?>