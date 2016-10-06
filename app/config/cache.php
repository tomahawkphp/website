<?php

return [

    /*
     * Cache Drivers
     *
     * Supported:
     *      array
     *      database
     *      filesystem
     *      apcu
     *      redis
     *      xcache
     *      memcache
     *      memcached
     *
     */
    'driver' => 'filesystem',

    /*
     * Namespace - Used by doctrine cache
     */
    'namespace' => 'tomahawk_cache:',

    /*
     * Filesystem
     */
    'directory' => __DIR__ .'/../../var/cache/application',
];
