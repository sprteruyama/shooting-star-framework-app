<?php

use ShootingStar\Config;

Config::sets([
    'debug' => false,
    'url' => [
        'auth' => [
            'enabled' => false,
            'user' => 'user',
            'password' => 'password',
        ],
        'root' => '/',
        'url' => '',
    ],
]);
