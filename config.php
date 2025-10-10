<?php
// Dynamically get the root directory of this config file
define('ROOT_PATH', __DIR__ . '/');

// If your includes are in a 'php' subfolder, define that too
define('PHPROOT', ROOT_PATH . '/');

// Dynamically construct the base URL
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/') . '/';
$htmlroot = $protocol . $host . $basePath;
$phproot = PHPROOT;
$test = "Testing";
?>
