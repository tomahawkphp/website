<?php

use Tomahawk\Routing\Router;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

$routeNamespace = 'TomahawkPHP\\Bundle\\WebBundle\\Controller\\';

$router = new Router();
$router->setRoutes(new RouteCollection());

$router->get('/', 'home', $routeNamespace .'HomeController::homeAction');

$router->get('/about', 'about', $routeNamespace .'HomeController::aboutAction');

$router->section('/roadmap', array(), function(Router $router) use($routeNamespace) {
    $router->get('/', 'roadmap.home', $routeNamespace .'RoadmapController::homeAction');
});

$router->section('/docs', array(), function(Router $router) use($routeNamespace) {
    $router->get('/', 'docs.home', $routeNamespace .'DocsController::homeAction');
    $router->get('/installation', 'docs.installation', $routeNamespace .'DocsController::installAction');

    $router->section('/components', array(), function(Router $router) use($routeNamespace) {
        $router->get('/', 'docs.components.home', $routeNamespace .'DocsController::componentsAction');
        $router->get('/asset-manager', 'docs.components.asset', $routeNamespace .'DocsController::assetAction');
        $router->get('/auth', 'docs.components.auth', $routeNamespace .'DocsController::authAction');
        $router->get('/bundles', 'docs.components.bundles', $routeNamespace .'DocsController::bundlesAction');
        $router->get('/cache', 'docs.components.cache', $routeNamespace .'DocsController::cacheAction');
        $router->get('/config', 'docs.components.config', $routeNamespace .'DocsController::configAction');
        $router->get('/cli', 'docs.components.cli', $routeNamespace .'DocsController::cliAction');
        $router->get('/dependency-injection', 'docs.components.di', $routeNamespace .'DocsController::diAction');
        $router->get('/encryption', 'docs.components.encryption', $routeNamespace .'DocsController::cryptAction');
        $router->get('/forms', 'docs.components.forms', $routeNamespace .'DocsController::formsAction');
        $router->get('/hashing', 'docs.components.hashing', $routeNamespace .'DocsController::hashingAction');
        $router->get('/html', 'docs.components.html', $routeNamespace .'DocsController::htmlAction');
        $router->get('/input', 'docs.components.input', $routeNamespace .'DocsController::inputAction');
        $router->get('/middleware', 'docs.components.middleware', $routeNamespace .'DocsController::middlewareAction');
        $router->get('/routing', 'docs.components.routing', $routeNamespace .'DocsController::routingAction');
        $router->get('/sessions', 'docs.components.sessions', $routeNamespace .'DocsController::sessionsAction');
        $router->get('/templates', 'docs.components.templates', $routeNamespace .'DocsController::templatesAction');
        $router->get('/url-generator', 'docs.components.url', $routeNamespace .'DocsController::urlAction');
        $router->get('/validation', 'docs.components.validation', $routeNamespace .'DocsController::validationAction');
    });


});


return $router->getRoutes();