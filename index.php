<?php 

/**
 * Defines
 */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd() . DS);

define('APP_PATH', ROOT . 'app' . DS);
define('FRAMEWORK_PATH', ROOT . 'framework' . DS);
define('PUBLIC_PATH', ROOT . 'public' . DS);

/**
 * Loader
 */
require FRAMEWORK_PATH . 'Loader.php';
Loader::init();

/**
 * Routing
 */
Router::addRoute('', 'Dungeon', 'index');

$url = isset($_GET['url']) ? $_GET['url'] : '';
Router::dispatch($url);
