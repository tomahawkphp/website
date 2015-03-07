<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Input Manager</li>
    </ol>

    <h1>
        Input Manager
    </h1>

    <p>
        The Input Manager makes it easier accessing <code>GET</code> and <code>POST</code> for the request as well
        as old input data from the previous form request.
    </p>

    <p>
        The easiest way to use the Hasher is to make sure your Controllers extend
        <code>Tomahawk\Routing\Controller</code>. You then have access to it through <code>$this->input</code>.
    </p>

    <p>
        Other wise just add the following parameter to the construct method of your
        Controller <code>Tomahawk\Input\InputInterface</code> and it will get injected in through the Service Container.
    </p>

    <h2>
        Accessing GET data
    </h2>

    <p>
        There are 3 ways of accessing the data from the query string.
    </p>

    <p>The <code>get</code> method can be used to get all or one value from the query string.</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$all = $this->input->get(); //Gets all query string data
$name = $this->input->get('name'); //Defaults to null
$name = $this->input->get('name', 'Tom'); //Defaults to Tom
</script>
</div>

    <p>The <code>getOnly</code> method can be used to get only the specified values from the query string.</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$name = $this->input->getOnly(array('name', 'age'));
</script>
</div>

    <p>The <code>getExcept</code> method can be used to get everything but the specified values from the query string.</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$name = $this->input->getExcept(array('password'));
</script>
</div>

    <h2>
        Accessing POST data
    </h2>

    <p>
        There are 3 ways of accessing the data from the request.
    </p>

    <p>The <code>post</code> method can be used to get all or one value from the request.</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$all = $this->input->post(); //Gets all request data
$name = $this->input->post('name'); //Defaults to null
$name = $this->input->post('name', 'Tom'); //Defaults to Tom
</script>
</div>

    <p>The <code>postOnly</code> method can be used to get only the specified values from the request.</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$name = $this->input->postOnly(array('name', 'age'));
</script>
</div>

    <p>The <code>postExcept</code> method can be used to get everything but the specified values from the request.</p>

    <p>This method is useful when you want to flash input, but ignoring sensitive data use as passwords.</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$name = $this->input->postExcept(array('password'));
</script>
</div>

    <h2>
        Flashing input for the next request
    </h2>

    <p>
        You way make to make some data available for the next request, for example if validation fails and you want to
        redirect back to the form. For this you would use the <code>flashInput</code> method.
    </p>

    <p>
        The flashed data is available for the next request and removed at the end of that request.
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->input->flashInput($this->input->get());
</script>
</div>

    <h2>
        Accessing flashed input on the next request
    </h2>

    <p>
       Once you've flashed input on the next request you can access it using the following methods:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->input->old('name);
</script>
</div>

    <p>You can also check if a value has been flashed:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->input->hasOld('name);
</script>
</div>

    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>