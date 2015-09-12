<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Auth Manager</li>
    </ol>

    <h1>
        Auth Manager
    </h1>

    <p>
        The auth manager handles a users authentication status.
    </p>

    <p>
        The easiest way to use the Auth Manager is to make sure your Controllers extend
        <code>Tomahawk\Routing\Controller</code>. You then have access to it through <code>$this->auth</code>.
    </p>

    <p>
        Otherwise just add the following parameter to the construct method of your Controller
        <code>Tomahawk\Auth\AuthInterface</code> and it will get injected in through the Service Container.
    </p>

    <h3>Auth Handlers</h3>

    <hr>

    <p>Tomahawk ships with 3 Auth Handlers:</p>

    <ul>
        <li>Database - A simple handler using the Illuminate Database Component</li>
        <li>Eloquent - An Eloquent handler if the User Model is extending Illuminate's Eloquent Model</li>
        <li>Doctrine - When your using the Doctrine ORM</li>
    </ul>

    <h3>Configuration</h3>
    <hr>

    <p>
        The config for Auth Manager can be found in the <code>app/config/security.php</code>
        and will look like the following.
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

return array(

    // CSRF Token Name
    'csrf_token_name' => '_csrf_token',


    /*
     * Application Key
     */
    'key'   => 'fJ3PD12u6603aHmg0Ncuc3w1VI3AeiQI', //http://randomkeygen.com/

    // eloquent, database or doctrine
    'handler' => 'doctrine',

    'handlers' => array(
        'doctrine' => array(
            'model' => 'MyPackage\Models\UserDoctrine',

            // Username field
            'username'   => 'username',

            // Password field
            'password'   => 'password',
        ),
        'database' => array(
            'table' => 'users',

            // Primary key field
            'key'   => 'id',

            // Username field
            'username'   => 'username',

            // Password field
            'password'   => 'password',

            // Connection to use
            'connection' => 'default',
        ),
        'eloquent' => array(
            'model' => 'MyPackage\Models\User',

            // Username field
            'username'   => 'username',

            // Password field
            'password'   => 'password',
        ),
    ),

);
</script>
</div>

    <h3>Authenticating Users</h3>

    <hr>


    <h4>Manual Authentication</h4>

    <p>To authenticate a user to pass the username and password to the <code>attempt</code> method.</p>

    <div class="alert alert-info">
        <strong>Please note: </strong> The username and password names must match those in the config.
    </div>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$credentials = array(
    'username' => 'username',
    'password' => 'password',
);

if ($this->auth->attempt($credentials)) {
    // authentication passed
}
else {
    // authentication failed
}

</script>
</div>


    <h4>Manual Authentication With Extra Checks</h4>

    <p>You might want to also check other parts of the account:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$credentials = array(
    'username' => 'username',
    'password' => 'password',
    'status'   => 'active',
);

if ($this->auth->attempt($credentials)) {
    // authentication passed and user is active
}
else {
    // authentication failed
}

</script>
</div>

    <h4>Checking If User Is Logged In</h4>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

if ($this->auth->loggedIn()) {
    // User is logged in
}

</script>
</div>

    <h4>Checking If User Is Guest</h4>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

if ($this->auth->isGuest()) {
    // Guest
}

</script>
</div>

    <h4>Logout A User</h4>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->auth->logout();

</script>
</div>


    <h4>
        Getting The Logged In User
    </h4>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$user = $this->auth->user();

</script>
</div>

    <h4>
        Logging Out The User
    </h4>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->auth->logout();

</script>
</div>


    <h4>Automatically Logging In A Users</h4>

    <p>
        If you already have the user model you can pass this the the auth manager to log them in:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php



$this->auth->login($user);

</script>
</div>

<div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>