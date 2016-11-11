<?php

namespace TomahawkPHP\Bundle\WebBundle\Controller;

use Tomahawk\Routing\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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

    public function serverConfigureAction(Request $request)
    {
        return $this->renderDocView($request, 'server_configuration');
    }

    public function directoryStructureAction(Request $request)
    {
        return $this->renderDocView($request, 'structure');
    }

    public function servicesAction(Request $request)
    {
        return $this->renderDocView($request, 'services');
    }

    public function assetAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/asset');
    }

    public function authAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/auth');
    }

    public function bundlesAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/bundles');
    }

    public function cacheAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/cache');
    }

    public function configAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/config');
    }

    public function cliAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/cli');
    }

    public function diAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/di');
    }

    public function cryptAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/crypt');
    }

    public function databaseAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/database');
    }

    public function environmentsAction(Request $request)
    {
        return $this->renderDocView($request, 'environments');
    }

    public function eventAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/events');
    }

    public function errorHandlingAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/errors');
    }

    public function extendingAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);
        return $this->renderView('WebBundle:Docs:Extending/home', $params);
    }

    public function formsAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/forms');
    }

    public function hashingAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/hashing');
    }

    public function htmlAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/html');
    }

    public function inputAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/input');
    }

    public function middlewareAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/middleware');
    }

    public function responsesAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/responses');
    }

    public function routingAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/routing');
    }

    public function sessionsAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/sessions');
    }

    public function translationsAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/translations');
    }

    public function templatesAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/templates');
    }

    public function urlAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/url');
    }

    public function validationAction(Request $request)
    {
        return $this->renderDocView($request, 'Services/validation');
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
