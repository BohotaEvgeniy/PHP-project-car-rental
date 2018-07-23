<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * start session
 */
session_start();
print_r($_SESSION);
/**
 * get error
 */
ini_set('display_errors',true);
error_reporting(E_ALL);

/**
 * directories
 */
define('DS',DIRECTORY_SEPARATOR); //constant '/'
define('ROOT',dirname(__FILE__).DS); //constant directory path

/**
 * include core
 */
require_once(ROOT . 'core/Boot.php'); //control autoloader class
require_once(ROOT . 'core/Core.php'); //control paths
require_once(ROOT . 'core/Route.php'); //control paths
require_once(ROOT . 'vendor/Delivery/NovaPoshtaApi2.php');

/**
 * start function Run by class Route
 */
$route = new Route();
$route->run();