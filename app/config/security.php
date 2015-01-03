<?php

return array(
    /*
     * Application Key
     */
    //'key'   => '___________ENTER_A_KEY__________',
    'key'   => 'fJ3PD12u6603aHmg0Ncuc3w1VI3AeiQI', //http://randomkeygen.com/

    // eloquent, database or doctrine
    'handler' => 'doctrine',

    'handlers' => array(
        'doctrine' => array(
            'model' => 'MyPackage\Models\UserDoctrine',

            // Username field
            'username'   => 'username',
        ),
        'database' => array(
            'table' => 'users',

            // Primary key field
            'key'   => 'id',

            // Username field
            'username'   => 'username',

            // Password field
            'password'   => 'password',

            // Connection to use
            'connection' => 'default',
        ),
        'eloquent' => array(
            'model' => 'MyPackage\Models\User',
        ),
    ),

);