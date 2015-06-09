<?php

namespace TomahawkPHP\Bundle\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Tomahawk\Routing\Controller;

class DocsController extends BaseController
{

    public function homeAction()
    {
        return $this->renderView('WebBundle:Docs:home', array(
            'assets' => $this->assets
        ));
    }

    public function installAction()
    {
        return $this->renderView('WebBundle:Docs:installation', array(
            'assets' => $this->assets
        ));
    }

    public function configureAction()
    {
        return $this->renderView('WebBundle:Docs:configuration', array(
            'assets' => $this->assets
        ));
    }

    public function servicesAction()
    {
        return $this->renderView('WebBundle:Docs:services', array(
            'assets' => $this->assets
        ));
    }

    public function assetAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/asset', array(
            'assets' => $this->assets
        ));
    }

    public function authAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/auth', array(
            'assets' => $this->assets
        ));
    }

    public function bundlesAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/bundles', array(
            'assets' => $this->assets
        ));
    }

    public function cacheAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/cache', array(
            'assets' => $this->assets
        ));
    }

    public function configAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/config', array(
            'assets' => $this->assets
        ));
    }

    public function cliAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/cli', array(
            'assets' => $this->assets
        ));
    }

    public function diAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/di', array(
            'assets' => $this->assets
        ));
    }

    public function cryptAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/crypt', array(
            'assets' => $this->assets
        ));
    }

    public function databaseAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/database', array(
            'assets' => $this->assets
        ));
    }

    public function environmentsAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:environments', array(
            'assets' => $this->assets
        ));
    }

    public function errorHandlingAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/errors', array(
            'assets' => $this->assets
        ));
    }

    public function extendingAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Extending/home', array(
            'assets' => $this->assets
        ));
    }

    public function formsAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/forms', array(
            'assets' => $this->assets
        ));
    }

    public function hashingAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/hashing', array(
            'assets' => $this->assets
        ));
    }

    public function htmlAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/html', array(
            'assets' => $this->assets
        ));
    }

    public function inputAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/input', array(
            'assets' => $this->assets
        ));
    }

    public function middlewareAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/middleware', array(
            'assets' => $this->assets
        ));
    }

    public function responsesAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/responses', array(
            'assets' => $this->assets
        ));
    }

    public function routingAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/routing', array(
            'assets' => $this->assets
        ));
    }

    public function sessionsAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/sessions', array(
            'assets' => $this->assets
        ));
    }

    public function templatesAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/templates', array(
            'assets' => $this->assets
        ));
    }

    public function urlAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/url', array(
            'assets' => $this->assets
        ));
    }

    public function validationAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Services/validation', array(
            'assets' => $this->assets
        ));
    }



}