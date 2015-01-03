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

    public function componentsAction()
    {
        return $this->renderView('WebBundle:Docs:components', array(
            'assets' => $this->assets
        ));
    }

    public function assetAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Components/asset', array(
            'assets' => $this->assets
        ));
    }

    public function authAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Components/auth', array(
            'assets' => $this->assets
        ));
    }

    public function bundlesAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Components/bundles', array(
            'assets' => $this->assets
        ));
    }

    public function cacheAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Components/cache', array(
            'assets' => $this->assets
        ));
    }

    public function configAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Components/config', array(
            'assets' => $this->assets
        ));
    }

    public function cliAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Components/cli', array(
            'assets' => $this->assets
        ));
    }

    public function diAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Components/di', array(
            'assets' => $this->assets
        ));
    }

    public function cryptAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Components/crypt', array(
            'assets' => $this->assets
        ));
    }

    public function formsAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Components/forms', array(
            'assets' => $this->assets
        ));
    }

    public function hashingAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Components/hashing', array(
            'assets' => $this->assets
        ));
    }

    public function htmlAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Components/html', array(
            'assets' => $this->assets
        ));
    }

    public function inputAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Components/input', array(
            'assets' => $this->assets
        ));
    }

    public function middlewareAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Components/middleware', array(
            'assets' => $this->assets
        ));
    }

    public function routingAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Components/routing', array(
            'assets' => $this->assets
        ));
    }

    public function sessionsAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Components/sessions', array(
            'assets' => $this->assets
        ));
    }

    public function templatesAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Components/templates', array(
            'assets' => $this->assets
        ));
    }

    public function urlAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Components/url', array(
            'assets' => $this->assets
        ));
    }

    public function validationAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Components/validation', array(
            'assets' => $this->assets
        ));
    }



}