<?php $view->extend('WebBundle::wide_layout') ?>

<?php $view['blocks']->start('content') ?>

    <h1>
        About
    </h1>

    <p>
       Development of Tomahawk PHP framework started in April 2014.
    </p>

    <p>
        TomahawkPHP supports Semvar and where possible used libraries that already exist. Theres no point re-inventing the wheel right?
    </p>

    <p>
        Tomahawk is built upon Symfony3 components, specifically for handling requests and routing.
        We also use Doctrine for the DB and App Cache layers.
    </p>

    <p>
        Other features have been build specifically for use in the Tomahawk PHP framework, but will become services
        at a later date.
    </p>
    
    <h2>Development Team</h2>

    <h3>Tom Ellis</h3>

    <p>Creator and Lead Developer of TomahawkPHP.</p>

    <h3>Craig Liddle</h3>

    <p>Lead Developer of TomahawkPHP.</p>

<?php $view['blocks']->stop() ?>
