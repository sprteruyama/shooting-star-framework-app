<?php
$resourceFilePath = __DIR__ . '/app/Public/' . $_SERVER['SCRIPT_NAME'];
if (file_exists($resourceFilePath)) {
    echo file_get_contents($resourceFilePath);
    exit();
}
require 'app/Public/index.php';
