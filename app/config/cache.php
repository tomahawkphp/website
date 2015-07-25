<?php

return array(

    /*
     * Cache Drivers
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
     *
     */
    'driver' => 'filesystem',

    /*
     * Namespace - Used with doctrine cache
     */
    'namespace' => 'tomahawk_cache:',

    /*
     * Enable Cache
     */
    'enabled' => true,


    /*
     * Filesystem
     */
    'directory' => __DIR__ .'/../storage/cache',
);