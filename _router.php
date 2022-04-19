<?php
$resourceFilePath = __DIR__ . '/app/Public/' . $_SERVER['SCRIPT_NAME'];
$resourceFilePath = preg_replace('/\?.+$/', '', $resourceFilePath);
if (file_exists($resourceFilePath) && !is_dir($resourceFilePath)) {
    if (preg_match('/\.(.+)$/', $resourceFilePath, $matched)) {
        $ext = strtolower($matched[1]);
        switch ($ext) {
            case 'jpg':
                header('Content-Type: image/jpeg');
                break;
            case 'png':
            case 'gif':
                header('Content-Type: image/' . $ext);
                break;
            case 'css':
                header('Content-Type: text/css');
                break;
            case 'js':
                header('Content-Type: text/javascript');
                break;
        }
    }
    echo file_get_contents($resourceFilePath);
    exit();
}
require 'app/Public/index.php';
