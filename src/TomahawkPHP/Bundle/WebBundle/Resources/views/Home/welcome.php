<?php $view->extend('WebBundle::wide_layout') ?>

<?php $view['blocks']->start('content') ?>

    <div class="jumbotron">
        <h2 class="text-center brand-red-text">
            TomahawkPHP is a full-stack PHP 5.3+ Framework
            <br>
            built on top of Symfony2 Components
        </h2>
    </div>

    <div class="well clearfix">
        <div class="col-lg-9">
            <p>
                Version 1.0.0 is our initial release, packed with enough features to get you started.
            </p>
        </div>
        <div class="col-lg-3">
            <a href="#" class="btn btn-lg btn-success">
                <span class="glyphicon glyphicon-download"></span> Download v1.0.0
            </a>
        </div>

    </div>


<?php $view['blocks']->stop() ?>