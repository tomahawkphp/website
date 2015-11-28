<?php

namespace TomahawkPHP\Bundle\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Tomahawk\Routing\Controller;

class DocsController extends BaseController
{
    public function homeAction(Request $request)
    {
        $params = $this->getViewParameters($request);
        return $this->renderView('WebBundle:Docs:home', $params);
    }

    public function installAction(Request $request)
    {
        $params = $this->getViewParameters($request);
        return $this->renderView('WebBundle:Docs:installation', $params);
    }

    public function configureAction(Request $request)
    {
        $params = $this->getViewParameters($request);
        return $this->renderView('WebBundle:Docs:configuration', $params);
    }

    public function servicesAction(Request $request)
    {
        $params = $this->getViewParameters($request);
        return $this->renderView('WebBundle:Docs:services', $params);
    }

    public function assetAction(Request $request)
    {
        return $this->renderDocView($request, 'asset');
    }

    public function authAction(Request $request)
    {
        return $this->renderDocView($request, 'auth');
    }

    public function bundlesAction(Request $request)
    {
        return $this->renderDocView($request, 'bundles');
    }

    public function cacheAction(Request $request)
    {
        return $this->renderDocView($request, 'cache');
    }

    public function configAction(Request $request)
    {
        return $this->renderDocView($request, 'config');
    }

    public function cliAction(Request $request)
    {
        return $this->renderDocView($request, 'cli');
    }

    public function diAction(Request $request)
    {
        return $this->renderDocView($request, 'di');
    }

    public function cryptAction(Request $request)
    {
        return $this->renderDocView($request, 'crypt');
    }

    public function databaseAction(Request $request)
    {
        return $this->renderDocView($request, 'database');
    }

    public function environmentsAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);
        return $this->renderView('WebBundle:Docs:environments', $params);
    }

    public function eventAction(Request $request)
    {
        return $this->renderDocView($request, 'events');
    }

    public function errorHandlingAction(Request $request)
    {
        return $this->renderDocView($request, 'errors');
    }

    public function extendingAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);
        return $this->renderView('WebBundle:Docs:Extending/home', $params);
    }

    public function formsAction(Request $request)
    {
        return $this->renderDocView($request, 'forms');
    }

    public function hashingAction(Request $request)
    {
        return $this->renderDocView($request, 'hashing');
    }

    public function htmlAction(Request $request)
    {
        return $this->renderDocView($request, 'html');
    }

    public function inputAction(Request $request)
    {
        return $this->renderDocView($request, 'input');
    }

    public function middlewareAction(Request $request)
    {
        return $this->renderDocView($request, 'middleware');
    }

    public function responsesAction(Request $request)
    {
        return $this->renderDocView($request, 'responses');
    }

    public function routingAction(Request $request)
    {
        return $this->renderDocView($request, 'routing');
    }

    public function sessionsAction(Request $request)
    {
        return $this->renderDocView($request, 'sessions');
    }

    public function templatesAction(Request $request)
    {
        return $this->renderDocView($request, 'templates');
    }

    public function urlAction(Request $request)
    {
        return $this->renderDocView($request, 'url');
    }

    public function validationAction(Request $request)
    {
        return $this->renderDocView($request, 'validation');
    }

    protected function renderDocView(Request $request, $view)
    {
        $params = $this->getViewParameters($request, true);

        if ($this->templating->exists(sprintf('WebBundle:Docs:Services/%s/%s', $params['fw_version'], $view))) {
            return $this->renderView(sprintf('WebBundle:Docs:Services/%s/%s', $params['fw_version'], $view), $params);
        }

        return $this->renderView(sprintf('WebBundle:Docs:Services/%s', $view), $params);
    }
}
