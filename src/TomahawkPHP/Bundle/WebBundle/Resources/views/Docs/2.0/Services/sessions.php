<?php $view->extend('WebBundle::layout2') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Sessions</li>
    </ol>

    <h1>
        Sessions
    </h1>

    <p>
        Session component allows you to preserve certain data across subsequent accesses.
    </p>

    <p>
        The easiest way to use the Session component is to access to it through the container <code>$container->get('session')</code>.
    </p>

    <p>
        Otherwise just add the following parameter to the construct method of your
        Controller <code>Tomahawk\Session\SessionInterface</code> and it will get injected in through the Service Container.
    </p>


    <h3>Putting data into the session</h3>

    <p>You can add data to the session by doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->session->set('name', 'Tom');
</script>
</div>

    <h3>Getting data out of the session</h3>

    <p>You can add data to the session by doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->session->get('name', 'default');
</script>
</div>

    <h3>Checking if data is in the session</h3>

    <p>You can check if data is in the session by doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->session->has('name');
</script>
</div>

    <h3>Removing a value from the session</h3>

    <p>You can remove data from the session by doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->session->remove('name');
</script>
</div>

    <h2>Flash Messages</h2>

    <p>You can add flash messages to the session that are removed on next access.</p>

    <h3>Adding a flash message</h3>

    <p>You can add data to the session by doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->session->setFlash('success', 'Well done');
</script>
</div>

    <h3>Getting flash messages</h3>

    <p>You get flash messages by doing the following, an array is always returned:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->session->getFlash('name', array());
</script>
</div>

    <h3>Checking if any flash messages exist</h3>

    <p>You can check if flash messages exist by doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->session->hasFlash('success');
</script>
</div>


    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>