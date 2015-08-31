<?php

namespace TomahawkPHP\Bundle\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Tomahawk\Routing\Controller;

class HomeController extends BaseController
{
    public function homeAction(Request $request)
    {
        $this->get('doctrine')->getRepository('TomahawkPHP\Bundle\WebBundle\Model\User')->findAll();

        $this->get('web_profiler')->addLogs(array(
           'Test log'
        ));

        $params = $this->getViewParameters($request);
        return $this->renderView('WebBundle:Home:welcome', $params);
    }

    public function aboutAction(Request $request)
    {
        $params = $this->getViewParameters($request);
        return $this->renderView('WebBundle:About:home', $params);
    }

}
