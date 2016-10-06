<?php

use Tomahawk\Routing\Router;
use Symfony\Component\Routing\RouteCollection;
use TomahawkPHP\Bundle\WebBundle\Controller\BaseController;

$router = new Router();

$router->get('/', 'home', 'WebBundle:Home:home');

$router->get('/about', 'about', 'WebBundle:Home:about');

$router->section('/roadmap', array(), function(Router $router) {
    $router->get('/', 'roadmap.home', 'WebBundle:Roadmap:home');
});

$router->section('/docs/{fw_version}', array('fw_version' => BaseController::CURRENT_VERSION), function(Router $router, RouteCollection $routeCollection) {

    $router->get('/', 'docs.home', 'WebBundle:Docs:home');
    $router->get('/installation', 'docs.setup.installation', 'WebBundle:Docs:install');
    $router->get('/configuration', 'docs.setup.configuration', 'WebBundle:Docs:configure');
    $router->get('/environments', 'docs.setup.environments', 'WebBundle:Docs:environments');

    $router->section('/services', array(), function(Router $router) {
        $router->get('/', 'docs.services.home', 'WebBundle:Docs:services');
        $router->get('/asset-manager', 'docs.services.asset', 'WebBundle:Docs:asset');
        $router->get('/auth', 'docs.services.auth', 'WebBundle:Docs:auth');
        $router->get('/bundles', 'docs.services.bundles', 'WebBundle:Docs:bundles');
        $router->get('/cache', 'docs.services.cache', 'WebBundle:Docs:cache');
        $router->get('/config', 'docs.services.config', 'WebBundle:Docs:config');
        $router->get('/cli', 'docs.services.cli', 'WebBundle:Docs:cli');
        $router->get('/database', 'docs.services.database', 'WebBundle:Docs:database');
        $router->get('/directory-structure', 'docs.services.directory_structure', 'WebBundle:Docs:directoryStructure');
        $router->get('/dependency-injection', 'docs.services.di', 'WebBundle:Docs:di');
        $router->get('/encryption', 'docs.services.encryption', 'WebBundle:Docs:crypt');
        $router->get('/event-dispatcher', 'docs.services.event', 'WebBundle:Docs:event');
        $router->get('/error-handing', 'docs.services.error', 'WebBundle:Docs:errorHandling');
        $router->get('/forms', 'docs.services.forms', 'WebBundle:Docs:forms');
        $router->get('/hashing', 'docs.services.hashing', 'WebBundle:Docs:hashing');
        $router->get('/html', 'docs.services.html', 'WebBundle:Docs:html');
        $router->get('/input', 'docs.services.input', 'WebBundle:Docs:input');
        $router->get('/middleware', 'docs.services.middleware', 'WebBundle:Docs:middleware');
        $router->get('/responses', 'docs.services.responses', 'WebBundle:Docs:responses');
        $router->get('/routing', 'docs.services.routing', 'WebBundle:Docs:routing');
        $router->get('/sessions', 'docs.services.sessions', 'WebBundle:Docs:sessions');
        $router->get('/translations', 'docs.services.translations', 'WebBundle:Docs:translations');
        $router->get('/templates', 'docs.services.templates', 'WebBundle:Docs:templates');
        $router->get('/url-generator', 'docs.services.url', 'WebBundle:Docs:url');
        $router->get('/validation', 'docs.services.validation', 'WebBundle:Docs:validation');
        $router->get('/extending', 'docs.extending', 'WebBundle:Docs:extending');
    });

});

return $router->getRoutes();
