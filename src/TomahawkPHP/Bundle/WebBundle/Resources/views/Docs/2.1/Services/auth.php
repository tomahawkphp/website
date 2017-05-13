<?php $view->extend('WebBundle::layout2') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Authentication Provider</li>
    </ol>

    <h1>
        Authentication Provider
    </h1>

    <p>
        The Authentication Provider handles a authentication for a user.
    </p>

     <p>
         The easiest way to use the Auth Manager is access to it through the container <code>$container->get('authentication')</code>.
     </p>

    <p>
        Otherwise just add the following parameter to the construct method of your Controller
        <code>Tomahawk\Authentication\AuthenticationProviderInterface</code> and it will get injected in through the Service Container.
    </p>

    <div class="alert alert-info">
        <strong>Please note:</strong>
        Before getting started, make sure that the password field is a minimum of 60 characters.
    </div>

    <h3>Authentication Providers</h3>

    <hr>

    <p>Tomahawk ships with 2 Authentication Providers:</p>

    <ul>
        <li>Memory - A simple provider that uses a username and password from the security config</li>
        <li>Doctrine - A proider that uses the Doctrine ORM</li>
    </ul>

    <h3>Setting Up</h3>
    <hr>

    <h4>Configuration</h4>

    <p>
        The config for Authentication Provider can be found in the <code>app/config/security.php</code>
        and will look like the following.
    </p>

<div style="line-height: 21px">
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

return [

    'csrf_token_name' => '_csrf_token',

    /*
     * Default provider to use
     */
    'provider' => 'doctrine',


    /*
     * Available providers and settings
     */
    'providers' => [
        'memory' => [
            'users' => [
                'admin' => [
                    // Password is mypasswordbaby
                    'password' => '$2y$10$A21VGSNYOFlNZaavgTs52.Y2cKnxmAf6KfL/RiVNsHE1TGT3ZGTwC',
                ]
            ]
        ],
        'doctrine' => [
            'service'    => 'authentication.provider.doctrine',
            'user_class' => 'MyPackage\\Entity\\User',
            'username'   => 'username',
        ]

    ]
];

</script>
</div>

    <h4>Creating a User model</h4>

    <p>Your User class needs to implement the <code>Tomahawk\Authentication\User\UserInterface</code> interface.</p>

    <p>You should have a model which looks something like the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Authentication\User\UserInterface;

class User implements UserInterface
{
    /**
     * Get users username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Get users password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get users salt
     *
     * This can return null if password was encoded without a salt
     *
     * @return string
     */
    public function getSalt()
    {
        return null;
    }
}

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

use Tomahawk\Authentication\User\Credentials;
use Tomahawk\Authentication\Exception\BadCredentialsException;
use Tomahawk\Authentication\Exception\UserNotFoundException;
use Tomahawk\Authentication\AuthenticationProviderInterface;


$username = $request->get('username');
$password = $request->get('password');

/** @var AuthenticationProviderInterface $authProvider */
$authProvider = $container->get('authentication');

$credentials = new Credentials($username, $password);

try {
    $authProvider->attempt($credentials);
}
catch(UserNotFoundException $e) {

}
catch(BadCredentialsException $e) {

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