<?php

namespace TomahawkPHP\Middleware;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Tomahawk\Middleware\Middleware;
use Tomahawk\HttpKernel\KernelInterface;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Templating\EngineInterface;

class ErrorMiddleware extends Middleware
{
    public function boot()
    {
        $environment = $this->getKernel()->getEnvironment();
        $logger = $this->getLogger();
        $templating = $this->getTemplating();

        $this->getEventDispatcher()->addListener(KernelEvents::EXCEPTION, function(GetResponseForExceptionEvent $event) use ($environment, $logger, $templating) {

            if ($event->getException() instanceof NotFoundHttpException) {

                $response = new Response();
                $response->setContent($templating->render('WebBundle:Error:404'));

                $event->setResponse($response);
            }
            else {

                $exception = $event->getException();

                $this->logException($exception, sprintf('Uncaught PHP Exception %s: "%s" at %s line %s', get_class($exception), $exception->getMessage(), $exception->getFile(), $exception->getLine()));


                if ('prod' === $environment) {

                    $response = new Response();
                    $response->setContent($templating->render('WebBundle:Error:50x'));

                    $event->setResponse($response);
                }
            }
        });

        set_error_handler(function($code, $error, $file, $line) use ($templating, $logger) {

            $this->getLogger()->error($error, array('code' => $code, 'file' => $file, 'line' => $line));

            $response = new Response();
            $response->setContent($templating->render('WebBundle:Error:50x'));
            $response->send();
            exit;
        });
    }

    /**
     * Logs an exception.
     *
     * @param \Exception $exception The \Exception instance
     * @param string     $message   The error message to log
     */
    protected function logException(\Exception $exception, $message)
    {
        if (null !== $this->getLogger()) {
            if (!$exception instanceof HttpExceptionInterface || $exception->getStatusCode() >= 500) {
                $this->getLogger()->critical($exception, array('exception' => $exception));
            } else {
                $this->getLogger()->error($exception, array('exception' => $exception));
            }
        }
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

    /**
     * @return LoggerInterface
     */
    public function getLogger()
    {
        return $this->container->get('logger');
    }

    /**
     * @return KernelInterface
     */
    public function getKernel()
    {
        return $this->container->get('kernel');
    }
}