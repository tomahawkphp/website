<?php

namespace TomahawkPHP\Bundle\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Tomahawk\Routing\Controller;

class ExtendingController extends BaseController
{

    public function homeAction()
    {
        return $this->renderView('WebBundle:Docs:Extending/home', array(
            'assets' => $this->get('assets')
        ));
    }

    public function servicesAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Extending/services', array(
            'assets' => $this->get('assets')
        ));
    }

    public function bundlesAction()
    {
        $this->addCodeMirrorAssets();

        return $this->renderView('WebBundle:Docs:Extending/bundles', array(
            'assets' => $this->get('assets')
        ));
    }
}