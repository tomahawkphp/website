<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Middleware</li>
    </ol>

    <h1>
        Middleware
    </h1>

    <p>Middleware is used in Tomahawk to make it easier to hook into the behaviour of components during a request.</p>

    <p>Tomahawk includes middleware for Sessions, Cookies and String Responses.</p>

    <p>You could create a middleware for checking if a user was logged in etc.</p>

    <p>You add them in to the AppKernel, found in <code>app/AppKernel.php</code></p>


    <h2>Creating your own Middleware</h2>

    <p>First create a class that extends <code>Tomahawk\Middleware\Middleware</code>.</p>

    <p>The <code>Middleware</code> requires a boot method. Once you've done that you should have something that looks like:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Middleware\Middleware;

class MyMiddleware extends Middleware
{
    public function boot()
    {

    }
}
</script>
</div>

    <p>
        When the middleware is booted, you have access to the Service container through <code>$this->container</code>.
    </p>

    <p>
        Next you want to get the Event Dispatcher and listen on the Kernel Events. The following events are available:
    </p>

    <ul>
        <li><code>KernelEvents::REQUEST</code> - occurs at the very beginning of request dispatching.</li>
        <li><code>KernelEvents::EXCEPTION</code> - occurs when an uncaught exception appears.</li>
        <li><code>KernelEvents::VIEW</code> - event occurs when the return value of a controller is not a Response instance.</li>
        <li><code>KernelEvents::CONTROLLER</code> - occurs once a controller was found for handling a request.</li>
        <li><code>KernelEvents::RESPONSE</code> - occurs once a response was created for replying to a request.</li>
        <li><code>KernelEvents::TERMINATE</code> - occurs once a response was sent.</li>
        <li><code>KernelEvents::FINISH_REQUEST</code> - occurs when a response was generated for a request.</li>
    </ul>


    <p>We'll use Tomahawk's <code>Tomahawk\HttpCore\Middleware\StringResponse</code> as an example.</p>

    <p>This middleware listens on the <code>KernelEvents::VIEW</code> event and converts string
        responses returned from the controller to a Symfony Response.
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

namespace Tomahawk\HttpCore\Middleware;

use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Tomahawk\Middleware\Middleware;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Response;

class StringResponse extends Middleware
{
    public function boot()
    {
        $this->getEventDispatcher()->addListener(KernelEvents::VIEW, function(GetResponseForControllerResultEvent $event) {
            if (is_string($event->getControllerResult())) {
                $event->setResponse(new Response($event->getControllerResult()));
            }
        });
    }

    /**
     * @return EventDispatcher
     */
    public function getEventDispatcher()
    {
        return $this->container->get('event_dispatcher');
    }

}
</script>
</div>

    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>