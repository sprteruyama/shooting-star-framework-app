<?php
// define('ENV', 1); //0: local 1: development 2: staging 3: release
$regexps = [
    '/_stg$/' => 2,
    '/staging$/' => 2,
    '/_prod$/' => 3,
    '/production$/' => 3,
];
$env = 1;
foreach ($regexps as $regexp => $value) {
    if (preg_match($regexp, ROOT_DIR)) {
        $env = $value;
        break;
    }
}
define('ENV', $env);
