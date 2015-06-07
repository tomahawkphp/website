<?php
use Tomahawk\Common\Str;
$currentRoute = $view['request']->getParameter('_route');
?>
<ul class="nav nav-sidebar">
    <li class="<?php echo Str::is($currentRoute, 'docs.setup.*') ? 'active' : '' ?>">
        <a href="<?php echo $view['url']->route('docs.setup.installation') ?>" class="header-link">Setup</a>
        <ul class="nav">
            <li class="<?php echo Str::is($currentRoute, 'docs.setup.installation') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.setup.installation') ?>">Installation</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.setup.configuration') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.setup.configuration') ?>">Configuration</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.setup.environments') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.setup.environments') ?>">Environments</a>
            </li>
        </ul>
    </li>
</ul>

<ul class="nav nav-sidebar">
    <li class="sidenav-section <?php echo Str::is($currentRoute, 'docs.services.*') ? 'active' : '' ?>">
        <a href="<?php echo $view['url']->route('docs.services.home') ?>" class="header-link">Services</a>
        <ul class="nav">
            <li class="<?php echo Str::is($currentRoute, 'docs.services.auth') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.auth') ?>">Auth Manager</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.asset') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.asset') ?>">Asset Manager</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.bundles') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.bundles') ?>">Bundles</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.cache') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.cache') ?>">Cache</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.config') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.config') ?>">Config</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.cli') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.cli') ?>">Hatchet CLI</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.di') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.di') ?>">Dependency Injection</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.encryption') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.encryption') ?>">Encryption</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.error') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.error') ?>">Error Handling &amp; Logging</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.forms') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.forms') ?>">Html Forms</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.hashing') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.hashing') ?>">Hashing</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.html') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.html') ?>">HTML Builder</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.input') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.input') ?>"> Input Manager</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.middleware') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.middleware') ?>">Middleware</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.responses') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.responses') ?>">Response Builder</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.routing') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.routing') ?>">Routing</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.sessions') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.sessions') ?>">Sessions</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.templates') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.templates') ?>">Templates</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.url') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.url') ?>">URL Generator</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.validation') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.validation') ?>">Validation</a>
            </li>
        </ul>
    </li>
</ul>

<ul class="nav nav-sidebar">
    <li class="sidenav-section <?php echo Str::is($currentRoute, 'docs.extending*') ? 'active' : '' ?>">
        <a href="<?php echo $view['url']->route('docs.extending') ?>" class="header-link">Extending Tomahawk</a>
    </li>
</ul>
