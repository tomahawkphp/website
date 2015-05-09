<?php

namespace TomahawkPHP\Middleware;

use Symfony\Component\HttpKernel\KernelEvents;
use Tomahawk\Middleware\Middleware;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Templating\EngineInterface;

class ErrorMiddleware extends Middleware
{
    public function boot()
    {
        $templating = $this->getTemplating();

        $this->getEventDispatcher()->addListener(KernelEvents::EXCEPTION, function(GetResponseForExceptionEvent $event) use ($templating) {
            if ($event->getException() instanceof NotFoundHttpException) {

                $response = new Response();
                $response->setContent($templating->render('WebBundle:Error:404'));

                $event->setResponse($response);
            }
            else {
                $response = new Response();
                $response->setContent($templating->render('WebBundle:Error:50x'));

                $event->setResponse($response);
            }

        });

        set_error_handler(function($code, $error, $file, $line) use ($templating) {

            $response = new Response();
            $response->setContent($templating->render('WebBundle:Error:50x'));
            $response->send();
            exit;
        });
    }

    /**
     * @return EventDispatcher
     */
    public function getEventDispatcher()
    {
        return $this->container->get('event_dispatcher');
    }

    /**
     * @return EngineInterface
     */
    public function getTemplating()
    {
        return $this->container->get('templating');
    }
}