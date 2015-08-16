<?php

namespace TomahawkPHP\Bundle\WebBundle\Routing;

use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Tomahawk\Url\UrlGenerator as BaseUrlGenerator;
use Symfony\Component\Routing\CompiledRoute;

class UrlGenerator extends BaseUrlGenerator
{
    /**
     * @var CompiledRoute[]
     */
    protected $declaredRoutes = array();

    /**
     * Constructor.
     *
     * @param RouteCollection $routes A RouteCollection instance
     * @param RequestContext $context The context
     * @param LoggerInterface|null $logger A logger instance
     * @param CompiledRoute[] $declaredRoutes
     */
    public function __construct(RouteCollection $routes, RequestContext $context, LoggerInterface $logger = null, array $declaredRoutes = array())
    {
        $this->routes = $routes;
        $this->context = $context;
        $this->logger = $logger;
        $this->declaredRoutes = $declaredRoutes;
    }

    /**
     * @param $name
     * @param array $data
     * @return mixed|string
     */
    public function route($name, $data = array())
    {
        if (!isset($this->declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = $this->declaredRoutes[$name];

        $referenceType = self::ABSOLUTE_PATH;

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $data, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
