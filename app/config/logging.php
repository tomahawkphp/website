<?php

return [

    // Handlers
    'handlers' => [
        'test' => 'logger.my.handler'
    ],

    // stream, rotating_file or fingers_crossed
    'handler' => 'fingers_crossed',

    /*
     * Directory to log to
     */
    'path' => __DIR__ . '/../../var/log',

    'bubble' => false,

    // Number of max files to keep when using the rotating_file handler
    'max_files' => 10,

    // Log level - debug, info, warning, error, critical or emergency
    'level' => 'info',

    // Used with fingers_crossed handler
    // Level in which all buffered errors get handled
    // Available: debug, info, warning, error, critical or emergency
    'action_level' => 'warning',

    // Handle to be used by the fingers_crossed handler
    'action_handler' => 'rotating_file',
];
