<?php

use ShootingStar\Config;
use ShootingStar\EnvFile;

Config::sets(
    [
        'timezone' => 'Asia/Tokyo',
        'url' => [
            'writable' => [
                '/img/',
            ],
        ],
        'routes' => [
            '/' => '/base/index',
            '/base' => null,
        ],
        'session.cookie_name' => 'st-session',
        'session.lifetime' => 365 * 24 * 60 * 60,
        'salt' => EnvFile::get('SALT'),
    ]
);