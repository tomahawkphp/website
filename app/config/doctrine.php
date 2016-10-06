<?php

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

