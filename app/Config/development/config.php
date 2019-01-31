<?php

use ShootingStar\Config;

Config::sets([
    'debug' => true,
    'url' => [
        'auth' => [
            'enabled' => true,
            'user' => 'user',
            'password' => 'password',
        ],
        'root' => '/',
        'url' => '',
    ],
]);
