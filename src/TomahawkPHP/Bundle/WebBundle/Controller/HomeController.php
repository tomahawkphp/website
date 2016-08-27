<?php

namespace TomahawkPHP\Bundle\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

class HomeController extends BaseController
{
    public function homeAction(Request $request)
    {
        $params = $this->getViewParameters($request);
        return $this->renderView('WebBundle:Home:welcome', $params);
    }

    public function aboutAction(Request $request)
    {
        $params = $this->getViewParameters($request);
        return $this->renderView('WebBundle:About:home', $params);
    }

}
