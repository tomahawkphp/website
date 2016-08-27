<?php

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
