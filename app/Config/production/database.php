<?php

use ShootingStar\Config;
use ShootingStar\EnvFile;

Config::sets([
    'database' => [
        'default' => [
            'host' => 'localhost',
            'host_slave' => 'localhost',
            'database' => 'database',
            'user' => EnvFile::get('DB_USER'),
            'password' => EnvFile::get('DB_PASSWORD'),
        ]
    ]
]);

