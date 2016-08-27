<?php

namespace TomahawkPHP\Bundle\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Tomahawk\Routing\Controller;

class DocsController extends BaseController
{
    public function homeAction(Request $request)
    {
        return $this->renderDocView($request, 'home');
    }

    public function installAction(Request $request)
    {
        return $this->renderDocView($request, 'installation');
    }

    public function configureAction(Request $request)
    {
        return $this->renderDocView($request, 'configuration');
    }

    public function servicesAction(Request $request)
    {
        return $this->renderDocView($request, 'services');
    }

    public function assetAction(Request $request)
    {
        return $this->renderDocView($request, 'services/asset');
    }

    public function authAction(Request $request)
    {
        return $this->renderDocView($request, 'services/auth');
    }

    public function bundlesAction(Request $request)
    {
        return $this->renderDocView($request, 'services/bundles');
    }

    public function cacheAction(Request $request)
    {
        return $this->renderDocView($request, 'services/cache');
    }

    public function configAction(Request $request)
    {
        return $this->renderDocView($request, 'services/config');
    }

    public function cliAction(Request $request)
    {
        return $this->renderDocView($request, 'services/cli');
    }

    public function diAction(Request $request)
    {
        return $this->renderDocView($request, 'services/di');
    }

    public function cryptAction(Request $request)
    {
        return $this->renderDocView($request, 'services/crypt');
    }

    public function databaseAction(Request $request)
    {
        return $this->renderDocView($request, 'services/database');
    }

    public function environmentsAction(Request $request)
    {
        return $this->renderDocView($request, 'environments');
    }

    public function eventAction(Request $request)
    {
        return $this->renderDocView($request, 'services/events');
    }

    public function errorHandlingAction(Request $request)
    {
        return $this->renderDocView($request, 'services/errors');
    }

    public function extendingAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);
        return $this->renderView('WebBundle:Docs:Extending/home', $params);
    }

    public function formsAction(Request $request)
    {
        return $this->renderDocView($request, 'services/forms');
    }

    public function hashingAction(Request $request)
    {
        return $this->renderDocView($request, 'services/hashing');
    }

    public function htmlAction(Request $request)
    {
        return $this->renderDocView($request, 'services/html');
    }

    public function inputAction(Request $request)
    {
        return $this->renderDocView($request, 'services/input');
    }

    public function middlewareAction(Request $request)
    {
        return $this->renderDocView($request, 'services/middleware');
    }

    public function responsesAction(Request $request)
    {
        return $this->renderDocView($request, 'services/responses');
    }

    public function routingAction(Request $request)
    {
        return $this->renderDocView($request, 'services/routing');
    }

    public function sessionsAction(Request $request)
    {
        return $this->renderDocView($request, 'services/sessions');
    }

    public function templatesAction(Request $request)
    {
        return $this->renderDocView($request, 'services/templates');
    }

    public function urlAction(Request $request)
    {
        return $this->renderDocView($request, 'services/url');
    }

    public function validationAction(Request $request)
    {
        return $this->renderDocView($request, 'services/validation');
    }

    protected function renderDocView(Request $request, $view)
    {
        $params = $this->getViewParameters($request, true);

        //$template = sprintf('WebBundle:Docs:/%s/%s', $params['fw_version'], $view);
        $template = sprintf('WebBundle::/Docs/%s/%s', $params['fw_version'], $view);

        if ( ! $this->get('templating')->exists($template)) {
            throw new NotFoundHttpException();
        }

        return $this->renderView($template, $params);
    }
}
