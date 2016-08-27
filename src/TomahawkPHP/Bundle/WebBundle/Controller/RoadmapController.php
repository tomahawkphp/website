<?php

namespace TomahawkPHP\Bundle\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

class RoadmapController extends BaseController
{
    public function homeAction(Request $request)
    {
        $params = $this->getViewParameters($request, true);

        return $this->renderView('WebBundle:Roadmap:home', $params);
    }

}