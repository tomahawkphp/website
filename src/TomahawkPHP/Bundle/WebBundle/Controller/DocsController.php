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
        $params = $this->getViewParameters($request, true);

        return $this->renderView('WebBundle:Docs:Services/asset', $params);
    }

    public function authAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);

        return $this->renderView('WebBundle:Docs:Services/auth', $params);
    }

    public function bundlesAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);

        return $this->renderView('WebBundle:Docs:Services/bundles', $params);
    }

    public function cacheAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);

        return $this->renderView('WebBundle:Docs:Services/cache', $params);
    }

    public function configAction(Request $request)
    {
        $this->get('doctrine')->getRepository('TomahawkPHP\Bundle\WebBundle\Model\User')->findAll();

        $this->get('web_profiler')->addLogs(array(
            'Test log'
        ));

        $params = $this->getViewParameters($request, true);

        return $this->renderView('WebBundle:Docs:Services/config', $params);
    }

    public function cliAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);

        return $this->renderView('WebBundle:Docs:Services/cli', $params);
    }

    public function diAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);

        return $this->renderView('WebBundle:Docs:Services/di', $params);
    }

    public function cryptAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);

        return $this->renderView('WebBundle:Docs:Services/crypt', $params);
    }

    public function databaseAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);

        return $this->renderView('WebBundle:Docs:Services/database', $params);
    }

    public function environmentsAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);

        return $this->renderView('WebBundle:Docs:environments', $params);
    }

    public function eventAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);

        return $this->renderView('WebBundle:Docs:Services/events', $params);
    }

    public function errorHandlingAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);

        return $this->renderView('WebBundle:Docs:Services/errors', $params);
    }

    public function extendingAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);

        return $this->renderView('WebBundle:Docs:Extending/home', $params);
    }

    public function formsAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);
        return $this->renderView('WebBundle:Docs:Services/forms', $params);
    }

    public function hashingAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);

        return $this->renderView('WebBundle:Docs:Services/hashing', $params);
    }

    public function htmlAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);
        return $this->renderView('WebBundle:Docs:Services/html', $params);
    }

    public function inputAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);
        return $this->renderView('WebBundle:Docs:Services/input', $params);
    }

    public function middlewareAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);
        return $this->renderView('WebBundle:Docs:Services/middleware', $params);
    }

    public function responsesAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);
        return $this->renderView('WebBundle:Docs:Services/responses', $params);
    }

    public function routingAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);
        return $this->renderView('WebBundle:Docs:Services/routing', $params);
    }

    public function sessionsAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);
        return $this->renderView('WebBundle:Docs:Services/sessions', $params);
    }

    public function templatesAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);
        return $this->renderView('WebBundle:Docs:Services/templates', $params);
    }

    public function urlAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);
        return $this->renderView('WebBundle:Docs:Services/url', $params);
    }

    public function validationAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);
        return $this->renderView('WebBundle:Docs:Services/validation', $params);
    }

}