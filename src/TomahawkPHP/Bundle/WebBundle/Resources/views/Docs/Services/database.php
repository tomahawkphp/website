<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Database</li>
    </ol>

    <h1>Database</h1>

    <p>
        Tomahawk comes with 2 choices of database services, <strong>Illuminate Database</strong> (Laravel)
        and <strong>Doctrine</strong>, each one has its own config that needs to be setup.
    </p>

    <hr>

    <h2>Illuminate Database</h2>

    <p>From Laravel's Github: </p>

    <p>
        <i>"The Illuminate Database component is a full database toolkit for PHP, providing an expressive <strong>Query Builder</strong>,
        <strong>ActiveRecord style ORM</strong>, and <strong>Schema Builder</strong>. It currently supports MySQL, Postgres, SQL Server, and SQLite."</i>
    </p>

    <h3>Configuration</h3>

    <div class="alert-info alert">
        If you are not using the <strong>Illuminate Database</strong> service you will need to set
        <strong>enabled</strong> in the <code>app/config/database.php</code> file to <code>false</code>.
    </div>

    <p>Open <code>app/config/database.php</code> in a text editor.</p>

    <p>
        Here you can set your default connection as well as adding in all your connections. Below is an example of
        what your config might look like:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

/*
 * Config for use with the Illuminate Database Component (Laravel)
 */
return array(

    'default' => 'default',

    // Whether to load Laravel services etc
    'enabled' => true,

    /*
     * Fetch Mode
     */
    'fetch'   => \PDO::FETCH_CLASS,

    /*
     * All Connections
     */
    'connections' => array(

        'default' => array(
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'port'      => '3306',
            'database'  => 'test',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ),
        'laravel' => array(
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'port'      => '3306',
            'database'  => 'laravel',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        )
    )

);
</script>
</div>

    <hr>

    <h3>Using Eloquent</h3>

    <p>
        Make sure you have <code>Tomahawk\Database\DatabaseManager</code> passed in as loading this from the service container
        will 'boot' Eloquent. You can then use your Eloquent models as normal.
    </p>

    <hr>

    <h3>Using Illuminate Query Builder</h3>

    <p>
        Make sure you have <code>Tomahawk\Database\DatabaseManager</code> passed in as loading this from the service container
        will 'boot' Eloquent as well as all connections for use with the Query Builder.
    </p>

    <p>
        If your Controllers extends <code>Tomahawk\Routing\Controller</code>
        then you then have access to it through <code>$this->database</code>.
    </p>

    <p>You can then query as if you are using the <code>DB</code>:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$results = $this->database->connection('readonly')
    ->table('users')
    ->where('id', '=', 1)
    ->first();
</script>
</div>

    <hr>

    <h2>Doctrine</h2>

    <p>
        The Doctrine service provides a <strong>Object Relational Mapper (ORM)</strong> and
        the <strong>Database Abstraction Layer (DBAL)</strong>.
    </p>

    <h3>Configuration</h3>

    <div class="alert-info alert">
        If you are not using the <strong>Illuminate Database</strong> service you will need to set
        <strong>enabled</strong> in the <code>app/config/database.php</code> file to <code>false</code>.
    </div>

    <p>
        Open <code>app/config/doctrine.php</code> in a text editor. Doctrine has more options
        than Illuminate as it is more configurable.
    </p>

    <p>Here you can set your default connection, all your connections, caching, mapping format and directory.</p>

    <p>Below is an example of what your config might look like:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

/*
 * Config for use with Doctrine
 */
return array(

    /*
     * Cache
     *
     * Supported:
     *      array
     *      database
     *      filesystem
     *      apc
     *      redis
     *      xcache
     *      memcache
     *      memcached
     */
    'cache' => 'array',

    /*
     * Mapping format
     */
    'format'    => 'xml',

    /*
     * Proxy class namespace
     */
    'proxy_namespace' => 'DoctrineProxies',

    /*
     * Auto generate proxy classes
     */
    'auto_generate_proxies' => true,

    /*
     * Proxy class directory
     */
    'proxy_directories' => __DIR__ . '/../Resources/Doctrine/proxies',

    /*
     * Mapping files directory
     */
    'mapping_directories' => array(__DIR__ . '/../Resources/Doctrine/mappings'),

    /*
     * Default connection
     */
    'default_connection' => 'default',

    /*
     * All connections
     */
    'connections' => array(
        'default' => array(
            /*
             * Name of service in container
             */
            'service'      => 'doctrine.connection.default',
            'wrapperClass' => 'Doctrine\DBAL\Connections\MasterSlaveConnection',
            'driver'       => 'pdo_mysql',
            'master'       => array(
                'host'      => 'localhost',
                'port'      => '3306',
                'dbname'    => 'tomahawk',
                'user'      => 'root',
                'password'  => '',
            ),
            'slaves' => array(
                array(
                    'host'      => 'localhost',
                    'port'      => '3306',
                    'dbname'    => 'tomahawk',
                    'user'      => 'root',
                    'password'  => '',
                )
            ),
        )
    ),
);


</script>
</div>

    <h3>Using Doctrine</h3>

    <h4>Getting an Doctrine Registry</h4>

    <p>To get the Doctrine Registry where the EntityManager is stored just access your container as below:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->container->get('doctrine');

</script>
</div>

    <hr>

    <h4>Getting the Entity Manager</h4>

    <p>
        To retrieve the Entity Manager you would do the following:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$em = $this->container->get('doctrine')->getManager();
</script>
</div>

    <hr>

    <h4>Getting an Entity Repository</h4>

    <p>
        To retrieve a Repository for an Entity you would do the following:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$repo = $this->container->get('doctrine')->getRepository('MyPackage\Models\UserDoctrine');

</script>
</div>

    <p>You can then use it like you normally would. e.g.</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$em = $this->container->get('doctrine')->getManager();
$repo = $em->getRepository('MyPackage\Models\UserDoctrine');

$user = $repo->find(1);

$user->setFullName('Tom Ellis');

$em->persist($user);

$em->flush();
</script>
</div>

    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>