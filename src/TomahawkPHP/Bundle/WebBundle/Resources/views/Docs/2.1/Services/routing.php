<?php $view->extend('WebBundle::layout2') ?>

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

$router = new Router();

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

    <p>
        A callback can be either a closure or string defining the class and method in the following format:
        <code>Controller::action</code>
    </p>

    <hr>

    <h2>Route Parameters</h2>

    <p>
        You can define parameters to capture in the URL.
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Routing\Router;

$router = new Router();

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

$router = new Router();

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

$router->get('/user/{id}', 'home', function($id = 1) {
    return 'User #' . $id;
})->where('id', '[0-9]+');
</script>
</div>


    <p>You can also have the Request passed in to the callback:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Routing\Router;
use Tomahawk\HttpCore\Request;

$router = new Router();

$router->get('/user/{id}', 'home', function(Request $request, $id) {
    return 'User #' . $id;
});
</script>
</div>

    <hr>

    <h2>Route Groups</h2>

    <p>You can also define a group to control a set of routes.</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Routing\Router;
use Symfony\Component\Routing\RouteCollection;

$router = new Router();

$router->group('account', function(Router $router, RouteCollection $collection) {

    $collection->addDefaults(['before' => 'auth']);

    $router->get('/', 'account.home', 'AccountController::homeAction'));
    $router->get('orders', 'account.orders', 'AccountController::ordersAction'));
});
</script>
</div>

    <h2>Http and Https Routes</h2>

    <p>TomahawkPHP has 2 route helpers to make setting that a route requires http or https with the <code>requiresHttp</code> and the <code>requiresHttps</code> methods:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Routing\Router;
use Tomahawk\HttpCore\Request;

$router = new Router();

$router->get('/user/{id}', 'home', function(Request $request, $id) {
    return 'User #' . $id;
})->requiresHttp();

$router->get('/admin', 'home', function(Request $request, $id) {
    return 'Admin';
})->requiresHttps();

</script>
</div>


    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>