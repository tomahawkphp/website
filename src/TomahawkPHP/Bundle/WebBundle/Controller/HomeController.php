<?php

namespace TomahawkPHP\Bundle\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Tomahawk\Routing\Controller;

class HomeController extends BaseController
{
    public function homeAction(Request $request)
    {
        return $this->renderView('WebBundle:Home:welcome', array(
            'assets' => $this->assets
        ));
    }

}
