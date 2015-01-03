<?php

return array(

    /*
     * Session Drivers
     *
     * Supported:
     *      array
     *      database
     *      cookie
     *      filesystem
     *
     */
    'driver'           => 'cookie',

    /*
     * Enable Sessions
     */
    'enabled' => true,


    'session_name'     => 'tomahawk_session',

    /*
     * Filesystem
     */
    'directory'        => __DIR__ .'/../storage/sessions',

    /*
     * Cookie
     */
    'cookie_name'      => 'tomahawk_cookie',
    'cookie_lifetime'  => '',
    'cookie_path'      => '/',
    'cookie_domain'    => '.standard.devbox.com',
    'cookie_secure'    => true,
    'cookie_http_only' => true,

    /*
     * Database
     */
    'table'         => 'tomahawk_sessions',
    'id_column'     => 'id',
    'data_column'   => 'data',
    'date_column'   => 'date'

);