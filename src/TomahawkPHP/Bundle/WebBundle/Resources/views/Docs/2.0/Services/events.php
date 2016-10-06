<?php $view->extend('WebBundle::layout2') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Event Dispatcher</li>
    </ol>

    <h1>
        Event Dispatcher
    </h1>


    <p>Tomahawk uses the Symfony3 Event Dispatcher as it is quite powerful and easy to use.</p>

    <p>
        To access the event dispatcher just add the following parameter to the construct method of your Controller
        <code>Symfony\Component\EventDispatcher\EventDispatcherInterface</code>
        and it will get injected in through the Service Container.
    </p>

    <p>
        You can even access it through the container by doing <code>$container->get('event_dispatcher')</code>.
    </p>

    <p>For more information on how to use it please read the Symfony3 docs.</p>


    <h2>Available Events</h2>

    <p>You can listen on the following events for the Kernel (<code>Symfony\Component\HttpKernel\KernelEvents</code>).</p>

    <p>Kernel events are all under the namespace <code>Symfony\Component\HttpKernel\Event</code>.</p>
    <table class="table">
        <thead>
            <tr>
                <th>Event</th>
                <th>Event Class</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <code>KernelEvents::REQUEST</code>
                </td>
                <td>
                    GetResponseEvent
                </td>
                <td>
                    The REQUEST event occurs at the very beginning of request dispatching.
                </td>
            </tr>
            <tr>
                <td><code>KernelEvents::EXCEPTION</code></td>
                <td>GetResponseForExceptionEvent</td>
                <td>The EXCEPTION event occurs when an uncaught exception appears.</td>
            </tr>
            <tr>
                <td><code>KernelEvents::VIEW</code></td>
                <td>GetResponseForControllerResultEvent</td>
                <td>The VIEW event occurs when the return value of a controller is not a Response instance.</td>
            </tr>
            <tr>
                <td><code>KernelEvents::CONTROLLER</code></td>
                <td>FilterControllerEvent</td>
                <td>The CONTROLLER event occurs once a controller was found for handling a request.</td>
            </tr>
            <tr>
                <td><code>KernelEvents::CONTROLLER_ARGUMENTS</code></td>
                <td>FilterControllerArgumentsEvent</td>
                <td>The CONTROLLER_ARGUMENTS event occurs once controller arguments have been resolved.</td>
            </tr>
            <tr>
                <td><code>KernelEvents::RESPONSE</code></td>
                <td>FilterResponseEvent</td>
                <td>The RESPONSE event occurs once a response was created for replying to a request.</td>
            </tr>
            <tr>
                <td><code>KernelEvents::TERMINATE</code></td>
                <td>PostResponseEvent</td>
                <td>The TERMINATE event occurs once a response was sent.</td>
            </tr>
            <tr>
                <td><code>KernelEvents::FINISH_REQUEST</code></td>
                <td>FinishRequestEvent</td>
                <td>The FINISH_REQUEST event occurs when a response was generated for a request.</td>
            </tr>

        </tbody>
    </table>


    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>