<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>


    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Routing</li>
    </ol>

    <h1>
        Routing
    </h1>

    <p>
        Routing is the main part to any application. Tomahawk makes use of Symfony's poweful Routing Component, as there's no
        point re-inventing the wheel. You can read more about Symfony Routing
        <a class="links" href="http://symfony.com/doc/current/book/routing.html">here</a>.
    </p>

    <hr>

    <h2>
        Defining Routes
    </h2>

    <p>You add routes in the <code>app/Resources/routes.php</code> file.</p>

    <p>
        You define routes using the <code>Tomahawk\Routing\Router</code> class.
        There should be one instantiated in this file already.
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Routing\Router;
use Symfony\Component\Routing\RouteCollection;

$router = new Router();
$router->setRoutes(new RouteCollection());

$router->get('/', 'home', function() {
    return 'Home';
});

$router->post('/', 'home.post', function() {
    return 'Posted';
});
</script>
</div>

    <p>
        From the example above, the 1st parameter is the path, the 2nd is the name of the
        route (used by the URL Generator) and the 3rd is the callback.
    </p>

    <div class="alert alert-info">
        <i class="fa fa-info-circle"></i> 1.4 introduced short notation and service notation for a callback
    </div>

    <p>
        A callback can be either a closure or string defining the class and method in the following formats
    </p>

    <p>
        Controller::Action Notation
        <code>MyBundle\Controllers\UserController::homeAction</code>
    </p>

    <p>
        service:action Notation
        <code>user.controller::homeAction</code>
    </p>

    <div class="alert alert-warning">
        <i class="fa fa-exclamation-circle"></i> <strong>Important</strong> -
        Service Notation expects your service to have a dot in.
    </div>

    <p>
        Short Bundle Notation
        <code>UserBundle:User:home</code> which would get converted
        to <code>UserBundle\Controller\UserController::homeAction</code>
    </p>

    <div class="alert alert-warning">
        <i class="fa fa-exclamation-circle"></i> <strong>Important</strong> -
        Short Bundle Notation expects your controllers to be within a folder called
        <code>Controller</code> in your bundle. The Controller name also needs to end with
        Controller e.g <code>UserController</code>.
        <br>
        The action name in the Controller class should also end with action. e.g. <code>homeAction</code>.
    </div>

    <hr>

    <h2>Route Parameters</h2>

    <p>
        You can define parameters to capture in the URL.
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Routing\Router;
use Symfony\Component\Routing\RouteCollection;

$router = new Router();
$router->setRoutes(new RouteCollection());

$router->get('/user/{id}', 'home', function($id) {
    return 'User #' . $id;
});
</script>
</div>


    <p>
        You can also set a default value:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Routing\Router;
use Symfony\Component\Routing\RouteCollection;

$router = new Router();
$router->setRoutes(new RouteCollection());

$router->get('/user/{id}', 'home', function($id = 1) {
    return 'User #' . $id;
});
</script>
</div>


    <p>
        Declaring parameter constraints:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$router = new Router();
$router->setRoutes(new RouteCollection());

$router->get('/user/{id}', 'home', function($id = 1) {
    return 'User #' . $id;
})->where('id', '[0-9]+');
</script>
</div>


    <p>You can also have the Request passed in to the callback:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Routing\Router;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouteCollection;

$router = new Router();
$router->setRoutes(new RouteCollection());

$router->get('/user/{id}', 'home', function(Request $request, $id) {
    return 'User #' . $id;
});
</script>
</div>

    <hr>

    <h2>Route Sections</h2>

    <p>You can also define a section to control a group of routes.</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Routing\Router;
use Symfony\Component\Routing\RouteCollection;

$router = new Router();
$router->setRoutes(new RouteCollection());

$router->section('account', array(), function(Router $router) {
    $router->get('/', 'account.home', 'AccountController::homeAction'));
    $router->get('orders', 'account.orders', 'AccountController::ordersAction'));
});
</script>
</div>


    <p>You can also pass in a set of default parameters to be used by the request,
        useful for defining routes that require auth for example.
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Routing\Router;
use Symfony\Component\Routing\RouteCollection;

$router = new Router();
$router->setRoutes(new RouteCollection());

$router->section('account', array('before' => 'auth'), function(Router $router) {
    $router->get('/', 'account.home', 'AccountController::homeAction'));
    $router->get('orders', 'account.orders', 'AccountController::ordersAction'));
});
</script>
</div>

    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>