<?php $view->extend('WebBundle::wide_layout') ?>

<?php $view['blocks']->start('content') ?>

    <h1>
        Roadmap
    </h1>
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
        v2.0
    </h3>
    <hr>

    <ul>
        <li>
            Remove Support for Illuminate Database Layer.
            This dependency pulls in too much un-needed laravel files.
        </li>
        <li>
            Replace Tomahawk Service Container with Symfonys?
        </li>
    </ul>


<?php $view['blocks']->stop() ?>