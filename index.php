<?php
session_start();
// define ('rootFolder', '/cert.itgen.io');
define ('rootFolder', 'localhost');
define ('vc', '?v=1');

// FRONT COTROLLER

// 1. Общие настройки

ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Подключение файлов системы

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');


// 3. Установка соединения с БД
// $db = Db::getConnection();

// 4. Вызор Router
$router = new Router();
$router->run();

