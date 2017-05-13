<?php $view->extend('WebBundle::layout2') ?>

<?php $view['blocks']->start('content') ?>


    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Response</li>
    </ol>

    <h1>Responses</h1>

    <p>As Tomahawk wraps the Symfony Routing component you can return and Symfony Response.</p>

    <p>
        Tomahawk also provides a response builder which allows you to quickly create different responses to return from a controller action.
    </p>

    <p>
        The easiest way to use the Response Builder is add the following parameter to the construct method of your
        Controller <code>Tomahawk\HttpCore\ResponseBuilderInterface</code> and it will get injected in through the Service Container.
    </p>

    <h3>Using The Response Builder</h3>

    <hr>

    <h4>Create A Normal Response</h4>

    <p>The response returned is <code>Symfony\Component\HttpFoundation\Response</code>.</p>

    <p>You pass the content, a status code (defaults to 200), and an array of headers (optional) </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$response = $this->response->content('content', 200, array('Content-Type' => 'text/html'));
</script>
</div>

    <h4>Create A Streamed Response</h4>

    <p>The response returned is <code>Symfony\Component\HttpFoundation\StreamedResponse</code>.</p>

    <p>You pass a callback, a status code (defaults to 200), and an array of headers (optional) </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$response = $this->response->stream(function() {

    echo 'Hello World';
        flush();
        sleep(2);
        echo 'Hello World';
        flush();

}, 200, array('Content-Type' => 'text/html'));
</script>
</div>

    <h4>Create A Redirect Response</h4>

    <p>The response returned is <code>Symfony\Component\HttpFoundation\RedirectResponse</code>.</p>

    <p>You pass the URL, a status code (defaults to 302), and an array of headers (optional) </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$response = $this->response->redirect('http://example.com');
</script>
</div>

    <h4>Create A Download Response</h4>

    <p>The response returned is <code>Symfony\Component\HttpFoundation\BinaryFileResponse</code>.</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$file = 'path/to/file.txt';
$response = $this->response->download($file);
</script>
</div>

    <h4>Create A JSON Response</h4>

    <p>The response returned is <code>Symfony\Component\HttpFoundation\JsonResponse</code>.</p>

    <p>You pass an array of data, a status code (defaults to 200), and an array of headers (optional) </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$response = $this->response->json(array('status' => 1));
</script>
</div>

    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>