<?php
use Tomahawk\Common\Str;
$currentRoute = $view['request']->getParameter('_route');
?>
<ul class="nav nav-sidebar">
    <li class="<?php echo Str::is($currentRoute, 'docs.setup.*') ? 'active' : '' ?>">
        <a href="<?php echo $view['url']->route('docs.setup.installation', array('fw_version' => $fw_version)) ?>" class="header-link">Setup</a>
        <ul class="nav">
            <li class="<?php echo Str::is($currentRoute, 'docs.setup.installation') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.setup.installation', array('fw_version' => $fw_version)) ?>">Installation</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.setup.configuration') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.setup.configuration', array('fw_version' => $fw_version)) ?>">Configuration</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.setup.environments') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.setup.environments', array('fw_version' => $fw_version)) ?>">Environments</a>
            </li>
        </ul>
    </li>
</ul>

<ul class="nav nav-sidebar">
    <li class="sidenav-section <?php echo Str::is($currentRoute, 'docs.services.*') ? 'active' : '' ?>">
        <a href="<?php echo $view['url']->route('docs.services.home', array('fw_version' => $fw_version)) ?>" class="header-link">Services</a>
        <ul class="nav">
            <li class="<?php echo Str::is($currentRoute, 'docs.services.auth') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.auth', array('fw_version' => $fw_version)) ?>">Auth Manager</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.asset') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.asset', array('fw_version' => $fw_version)) ?>">Asset Manager</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.bundles') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.bundles', array('fw_version' => $fw_version)) ?>">Bundles</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.cache') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.cache', array('fw_version' => $fw_version)) ?>">Cache</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.config') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.config', array('fw_version' => $fw_version)) ?>">Config</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.cli') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.cli', array('fw_version' => $fw_version)) ?>">Hatchet CLI</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.database') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.database', array('fw_version' => $fw_version)) ?>">Database</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.di') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.di', array('fw_version' => $fw_version)) ?>">Dependency Injection</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.encryption') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.encryption', array('fw_version' => $fw_version)) ?>">Encryption</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.event') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.event', array('fw_version' => $fw_version)) ?>">Event Dispacther</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.error') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.error', array('fw_version' => $fw_version)) ?>">Error Handling &amp; Logging</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.forms') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.forms', array('fw_version' => $fw_version)) ?>">Html Forms</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.hashing') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.hashing', array('fw_version' => $fw_version)) ?>">Hashing</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.html') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.html', array('fw_version' => $fw_version)) ?>">HTML Builder</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.input') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.input', array('fw_version' => $fw_version)) ?>"> Input Manager</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.middleware') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.middleware', array('fw_version' => $fw_version)) ?>">Middleware</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.responses') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.responses', array('fw_version' => $fw_version)) ?>">Response Builder</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.routing') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.routing', array('fw_version' => $fw_version)) ?>">Routing</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.sessions') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.sessions', array('fw_version' => $fw_version)) ?>">Sessions</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.templates') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.templates', array('fw_version' => $fw_version)) ?>">Templates</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.url') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.url', array('fw_version' => $fw_version)) ?>">URL Generator</a>
            </li>
            <li class="<?php echo Str::is($currentRoute, 'docs.services.validation') ? 'active' : '' ?>">
                <a href="<?php echo $view['url']->route('docs.services.validation', array('fw_version' => $fw_version)) ?>">Validation</a>
            </li>
        </ul>
    </li>
</ul>

<ul class="nav nav-sidebar">
    <li class="sidenav-section <?php echo Str::is($currentRoute, 'docs.extending*') ? 'active' : '' ?>">
        <a href="<?php echo $view['url']->route('docs.extending') ?>" class="header-link">Extending Tomahawk</a>
    </li>
</ul>
