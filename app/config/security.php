<?php

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
