<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <h1>
        About
    </h1>

    <p>
        I came up with the Tomahawk PHP framework about April 2014.
    </p>

    <p>
        The framework we were using at the time was getting (in my opinion) a bit ridiculous. The way the
        development was going I didn't agree with, picking and choosing when to use Semvar for instance,
        which would introduce breaking changes in simple updates.
    </p>

    <p>
        I wanted to build a framework that supported Semvar and that used the best of what was out there already.
    </p>

    <p>
        For one Tomahawk is build upon Symfony2 components, specifically for handling requests and routing.
        We also use Doctrine and Illuminate Database for the DB layers.
    </p>

    <p>
        Other features have been build specifically for use in the Tomahawk PHP framework, but will become components
        at a later date.
    </p>


<?php $view['blocks']->stop() ?>