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
                        <span class="fa fa-book"></span>
                        Documentation
                    </a>
                </li>
                <li>
                    <a href="<?php echo $view['url']->asset('/api/1.2/index.html') ?>">
                        <span class="fa fa-cog"></span>
                        API
                    </a>
                </li>
                <li class="<?php echo Str::is($currentRoute, 'roadmap.*') ? 'active' : '' ?>">
                    <a href="<?php echo $view['url']->route('roadmap.home') ?>">
                        <span class="fa fa-road"></span> Roadmap
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://github.com/tomahawkphp">
                        <span class="fa fa-github-square"></span> Github
                    </a>
                </li>
                <li class="<?php echo Str::is($currentRoute, 'about') ? 'active' : '' ?>">
                    <a href="<?php echo $view['url']->route('about') ?>">
                        <span class="fa fa-info-circle"></span> About</a>
                </li>
            </ul>
        </div>
    </div>
</div>