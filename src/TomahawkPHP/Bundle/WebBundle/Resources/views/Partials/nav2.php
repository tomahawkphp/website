<?php
use Tomahawk\Common\Str;
$currentRoute = $view['request']->getParameter('_route');
?>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $view['url']->route('home') ?>">
                <img src="<?php echo $view['url']->asset('images/tomahawk-micro2.png') ?>" alt="TomahawkPHP">
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?php echo Str::is($currentRoute, 'home') ? 'active' : '' ?>">
                    <a href="<?php echo $view['url']->route('home') ?>">Home</a>
                </li>
                <li class="<?php echo Str::is($currentRoute, 'docs.*') ? 'active' : '' ?>">
                    <a href="<?php echo $view['url']->route('docs.home', array('fw_version' => $fw_version)) ?>">
                        Documentation
                    </a>
                </li>
                <li>
                    <a href="<?php echo $view['url']->asset('/api/1.4/index.html') ?>">
                        API
                    </a>
                </li>
                <li class="<?php echo Str::is($currentRoute, 'roadmap.*') ? 'active' : '' ?>">
                    <a href="<?php echo $view['url']->route('roadmap.home') ?>">
                        Roadmap
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://github.com/tomahawkphp">
                        Github
                    </a>
                </li>
                <li class="<?php echo Str::is($currentRoute, 'about') ? 'active' : '' ?>">
                    <a href="<?php echo $view['url']->route('about') ?>">
                        About
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Version <?php echo $fw_version ?> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php foreach ($fw_versions as $v) : ?>
                            <li role="presentation">

                                <?php

                                $url = $view['url']->route('docs.home');

                                if (Str::startsWith($currentRoute, 'docs.')) {
                                    $url = $view['url']->route($currentRoute, array('fw_version' => $v));
                                }

                                ?>

                                <a href="<?php echo $url ?>">
                                    <?php echo $v ?>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</div>