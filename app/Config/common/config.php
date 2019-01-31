<?php

use ShootingStar\Config;

Config::sets(
    [
        'timezone' => 'Asia/Tokyo',
        'url' => [
            'writable' => [
                '/img/',
            ],
        ],
        'routes' => [
            '/' => '/'
        ],
        'session.lifetime' => 365 * 24 * 60 * 60,
    ]
);
