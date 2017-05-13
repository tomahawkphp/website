<?php $view->extend('WebBundle::layout2') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Database</li>
    </ol>

    <h1>Database</h1>

    <p>
        Tomahawk comes with <strong>Doctrine</strong> as its database layer. Although there's nothing
        stopping you adding your own.
    </p>

    <p>
        The Doctrine service provides a <strong>Object Relational Mapper (ORM)</strong> and
        the <strong>Database Abstraction Layer (DBAL)</strong>.
    </p>

    <h3>Configuration</h3>

    <p>
        Open <code>app/config/doctrine.php</code> in a text editor. Doctrine has more options
        than Illuminate as it is more configurable.
    </p>

    <p>Here you can set your default connection, all your connections, caching, mapping format and directory.</p>

    <p>Below is an example of what your config might look like:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

return [

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
    'mapping_directories' => [__DIR__ . '/../Resources/Doctrine/mappings'],

    /*
     * Migrations directory
     */
    'migrations_directory' => __DIR__ . '/../Resources/Doctrine/migrations',

    /*
     * Migrations namespace
     */
    'migration_namespace' => 'Migrations',

    /*
     * Migrations name
     */
    'migration_name' => 'migrations',

    /*
     * Default connection
     */
    'default_connection' => 'default',

    /*
     * All connections
     */
    'connections' => [
        'default' => [
            /*
             * Name of service in container
             */
            'service'      => 'doctrine.connection.default',
            'wrapperClass' => 'Doctrine\DBAL\Connections\MasterSlaveConnection',
            'driver'       => 'pdo_mysql',
            'master'       => [
                'host'      => 'localhost',
                'port'      => '3306',
                'dbname'    => 'tomahawk',
                'user'      => 'root',
                'password'  => '',
            ],
            'slaves' => [
                [
                    'host'      => 'localhost',
                    'port'      => '3306',
                    'dbname'    => 'tomahawk',
                    'user'      => 'root',
                    'password'  => '',
                ]
            ],
        ]
    ],
];

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

    <h3>Doctrine Mappings</h3>
    <hr>
    <p>
        By default Doctrine Migrations are created in <code>Resources/Doctrine/mappings</code>. You
        Can edit this config if you want them to be created/stored elsewhere by editing the <code>mapping_directories</code>
        setting in <code>app/config/doctrine.php</code>.
    </p>

    <h3>Doctrine Proxies</h3>
    <hr>

    <p>
        By default Doctrine Proxies are created in <code>Resources/Doctrine/proxies</code>. You
        Can edit this config if you want them to be created/stored elsewhere by editing the <code>proxy_directories</code>
        setting in <code>app/config/doctrine.php</code>.
    </p>

    <h3>Doctrine Migrations</h3>
    <hr>

    <p>
        By default Doctrine Migrations are created in <code>Resources/Doctrine/migrations</code>. You
        Can edit this config if you want them to be created/stored elsewhere by editing the <code>migrations_directory</code>
        setting in <code>app/config/doctrine.php</code>.
    </p>


    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>