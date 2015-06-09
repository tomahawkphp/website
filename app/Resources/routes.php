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
    $router->get('/installation', 'docs.setup.installation', $routeNamespace .'DocsController::installAction');
    $router->get('/configuration', 'docs.setup.configuration', $routeNamespace .'DocsController::configureAction');
    $router->get('/environments', 'docs.setup.environments', $routeNamespace .'DocsController::environmentsAction');

    $router->section('/services', array(), function(Router $router) use($routeNamespace) {
        $router->get('/', 'docs.services.home', $routeNamespace .'DocsController::servicesAction');
        $router->get('/asset-manager', 'docs.services.asset', $routeNamespace .'DocsController::assetAction');
        $router->get('/auth', 'docs.services.auth', $routeNamespace .'DocsController::authAction');
        $router->get('/bundles', 'docs.services.bundles', $routeNamespace .'DocsController::bundlesAction');
        $router->get('/cache', 'docs.services.cache', $routeNamespace .'DocsController::cacheAction');
        $router->get('/config', 'docs.services.config', $routeNamespace .'DocsController::configAction');
        $router->get('/cli', 'docs.services.cli', $routeNamespace .'DocsController::cliAction');
        $router->get('/database', 'docs.services.database', $routeNamespace .'DocsController::databaseAction');
        $router->get('/dependency-injection', 'docs.services.di', $routeNamespace .'DocsController::diAction');
        $router->get('/encryption', 'docs.services.encryption', $routeNamespace .'DocsController::cryptAction');
        $router->get('/error-handing', 'docs.services.error', $routeNamespace .'DocsController::errorHandlingAction');
        $router->get('/forms', 'docs.services.forms', $routeNamespace .'DocsController::formsAction');
        $router->get('/hashing', 'docs.services.hashing', $routeNamespace .'DocsController::hashingAction');
        $router->get('/html', 'docs.services.html', $routeNamespace .'DocsController::htmlAction');
        $router->get('/input', 'docs.services.input', $routeNamespace .'DocsController::inputAction');
        $router->get('/middleware', 'docs.services.middleware', $routeNamespace .'DocsController::middlewareAction');
        $router->get('/responses', 'docs.services.responses', $routeNamespace .'DocsController::responsesAction');
        $router->get('/routing', 'docs.services.routing', $routeNamespace .'DocsController::routingAction');
        $router->get('/sessions', 'docs.services.sessions', $routeNamespace .'DocsController::sessionsAction');
        $router->get('/templates', 'docs.services.templates', $routeNamespace .'DocsController::templatesAction');
        $router->get('/url-generator', 'docs.services.url', $routeNamespace .'DocsController::urlAction');
        $router->get('/validation', 'docs.services.validation', $routeNamespace .'DocsController::validationAction');
        $router->get('/extending', 'docs.extending', $routeNamespace .'DocsController::extendingAction');
    });

});


return $router->getRoutes();