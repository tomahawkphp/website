<?php
use Tomahawk\Common\Str;
$currentRoute = $view['request']->getParameter('_route');
?>
<ul class="nav nav-sidebar">
    <li class="<?php echo Str::is($currentRoute, 'docs.*') ? 'active' : '' ?> nav-title">
        <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        <ul class="nav">
            <li class="<?php echo Str::is($currentRoute, 'docs.installation') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.installation') ?>">Installation</a>
            </li>
        </ul>
    </li>

    <li class="<?php echo Str::is($currentRoute, 'docs.components.*') ? 'active' : '' ?>">
        <a href="<?php echo $view['url']->route('docs.components.home') ?>">The Components</a>
        <ul class="nav">
            <li class="<?php echo Str::is($currentRoute, 'docs.components.auth') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.components.auth') ?>">Auth Manager</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.components.asset') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.components.asset') ?>">Asset Manager</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.components.bundles') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.components.bundles') ?>">Bundles</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.components.cache') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.components.cache') ?>">Cache</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.components.config') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.components.config') ?>">Config</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.components.cli') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.components.cli') ?>">Hatchet CLI</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.components.di') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.components.di') ?>">Dependency Injection</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.components.encryption') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.components.encryption') ?>">Encryption</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.components.forms') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.components.forms') ?>">Form Manager</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.components.hashing') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.components.hashing') ?>">Hashing</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.components.html') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.components.html') ?>">HTML Generator</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.components.input') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.components.input') ?>"> Input Manager</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.components.middleware') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.components.middleware') ?>">Middleware</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.components.routing') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.components.routing') ?>">Routing</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.components.sessions') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.components.sessions') ?>">Sessions</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.components.templates') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.components.templates') ?>">View Templates</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.components.url') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.components.url') ?>">URL Generator</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.components.validation') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.components.validation') ?>">Validation</a>
            </li>
        </ul>
    </li>
</ul>


<ul class="nav nav-sidebar">


</ul>