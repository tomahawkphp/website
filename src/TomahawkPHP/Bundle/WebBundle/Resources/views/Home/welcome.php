<?php $view->extend('WebBundle::wide_layout') ?>

<?php $view['blocks']->start('content') ?>

    <div class="jumbotron">

        <img src="<?php echo $view['url']->asset('images/tomahawk-home.png') ?>" alt="TomahawkPHP" class="center-block img-responsive">

        <h1 class="text-center">
            Tomahawk<span class="brand-red-text">PHP</span>
            is a <strong>full-stack</strong> PHP 5.6+ Framework
            <br>
            built on top of <strong>Symfony3</strong> Components
        </h1>
    </div>

    <div class="well clearfix">
        <h2 class="brand-red-text">
            <span class="fa fa-download"></span> Download
        </h2>

        <div class="row">
            <div class="col-lg-9">
                <p class="version-copy">
                    Version <strong><?php echo $publishedVersion ?></strong> is our current release. Packed with lots of new features, improvements and bug fixes.
                </p>
            </div>
            <div class="col-lg-3">
                <a href="https://github.com/tomahawkphp/standard" class="btn btn-lg btn-success">
                    <span class="fa fa-download"></span> Download
                </a>
            </div>
        </div>
    </div>

    <div class="well">

        <h2 class="brand-red-text">
            <span class="fa fa-question"></span>
            Why Tomahawk?
        </h2>

            <p>
                Tomahawk has enough great features to get you started on most projects.
                It uses the Symfony3 Http Kernel for processing requests as well as
                other components to make your development easier. Check out some of them below!
            </p>

            <div class="row">
                <div class="col-lg-6">

                    <h3 class="brand-red-text">
                        <span class="fa fa-flash"></span> Basic Features
                    </h3>

                    <ul>
                        <li>MVC</li>
                        <li>Routing</li>
                        <li>Dependency injection</li>
                        <li>Auto-loader through composer</li>
                        <li>Command Bus</li>
                    </ul>
                </div>

                <div class="col-lg-6">

                    <h3 class="brand-red-text">
                        <span class="fa fa-database"></span> Data & Storage
                    </h3>

                    <ul>
                        <li>Doctrine DBAL and ORM</li>
                        <li>Cache powered by Doctrine</li>
                    </ul>

                </div>

            </div>
            <div class="row">

                <div class="col-lg-6">
                    <h3 class="brand-red-text">
                        <span class="fa fa-newspaper-o"></span> Templating
                    </h3>

                    <ul>
                        <li>Create templates through Symfony's PHP Engine and Twig</li>
                        <li>Translations</li>
                        <li>Locale</li>
                        <li>Form builder</li>
                        <li>Flash messages</li>
                    </ul>
                </div>

                <div class="col-lg-6">
                    <h3 class="brand-red-text">
                        <span class="fa fa-plus"></span> Misc
                    </h3>

                    <ul>
                        <li>Swiftmailer email support</li>
                        <li>Event dispatcher</li>
                        <li>String helpers</li>
                        <li>Array helpers</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Wide -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:728px;height:90px"
                     data-ad-client="ca-pub-1530624277033637"
                     data-ad-slot="8701754476"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>

    </div>

<?php $view['blocks']->stop() ?>
