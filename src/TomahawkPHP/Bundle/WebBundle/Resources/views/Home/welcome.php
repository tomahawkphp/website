<?php $view->extend('WebBundle::wide_layout') ?>

<?php $view['blocks']->start('content') ?>

    <div class="jumbotron">

        <img src="<?php echo $view['url']->asset('images/tomahawk-home.png') ?>" alt="TomahawkPHP" class="center-block img-responsive">

        <h1 class="text-center brand-red-text">
            TomahawkPHP is a full-stack PHP 5.3+ Framework
            <br>
            built on top of Symfony2 Components
        </h1>
    </div>

    <div class="well clearfix">
        <div class="col-lg-9">
            <p>
                Version 1.1.0 is our current release. Packed with bug fixes and improvements.
            </p>
        </div>
        <div class="col-lg-3">
            <a href="https://github.com/tomahawkphp" class="btn btn-lg btn-success">
                <span class="glyphicon glyphicon-download"></span> Download v1.1.0
            </a>
        </div>

    </div>


<?php $view['blocks']->stop() ?>