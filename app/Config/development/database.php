<?php

use ShootingStar\Config;

Config::sets([
    'database' => [
        'default' => [
            'host' => 'localhost',
            'host_slave' => 'localhost',
            'database' => 'database',
            'user' => 'user',
            'password' => 'password',
        ]
    ]
]);

