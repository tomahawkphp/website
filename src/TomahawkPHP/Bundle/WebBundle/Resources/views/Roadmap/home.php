<?php $view->extend('WebBundle::wide_layout') ?>

<?php $view['blocks']->start('content') ?>

    <h1>Roadmap</h1>
    <hr>
    <p>
        Here is the roadmap of changes and fixes that will be made to Tomahawk for the current and future versions.
        This page will be updated as time goes by.
    </p>

    <h3>
        v1.0.*
    </h3>
    <hr>
    <ul>
        <li>
            General bug fixes
        </li>
    </ul>

    <h3>
        v1.1.0
    </h3>
    <hr>
    <ul>
        <li>
            <del>Break out key features into services</del>
        </li>
    </ul>

    <h3>
        v1.1.*
    </h3>
    <hr>
    <ul>
        <li>General bug fixes</li>
    </ul>


    <h3>
        v1.2.0
    </h3>
    <hr>
    <ul>
        <li>Add more validation rules in</li>
        <li>Add Command Bus Implementation</li>
        <li>Add Error Middleware</li>
        <li>Ability to add Tagged Services</li>
        <li>Improve event registering in bundles</li>
        <li>Ability to add routes in bundles</li>
    </ul>

    <h3>
        v1.2.*
    </h3>
    <hr>
    <ul>
        <li>General bug fixes</li>
    </ul>


    <h3>
        v1.3.0
    </h3>
    <hr>
    <ul>
        <li>Refactor FrameworkProvider into separate Service Provider classes</li>
    </ul>


    <h3>
        v1.3.*
    </h3>
    <hr>
    <ul>
        <li>General bug fixes</li>
    </ul>

    <h3>
        v1.4.0
    </h3>
    <hr>
    <ul>
        <li>Short notation Routing</li>
        <li>Service notation Routing</li>
        <li>Updates to Profiler bar</li>
        <li><s>Add HTML navigation menu builder</s> Delayed until version 2.0</li>
    </ul>

    <h3>v1.4.X</h3>
    <hr>
    <ul>
        <li>General bug fixes</li>
        <li>Update dependencies with security fixes</li>
    </ul>


    <h3>
        v2.0.0
    </h3>
    <hr>

    <ul>
        <li>Improve Routing</li>
        <li>
            Remove Support for Illuminate Database Layer.
            This dependency pulls in too much un-needed laravel files.
        </li>
        <li><s>Replace Tomahawk Service Container with Symfonys?</s> No longer replacing</li>
        <li><s>Add HTML navigation menu builder</s> No longer implementing</li>
    </ul>

    <h3>
        v2.1.0
    </h3>
    <hr>

    <ul>
        <li>Deprecate route sections</li>
        <li>Add in route groups</li>
        <li>Add in requiresHttp and requiresHttps methods</li>
        <li>Symfony 3.1 deprecation fixes</li>
    </ul>


<?php $view['blocks']->stop() ?>