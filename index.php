<?php
session_start();
//FRONT CONTROLLER
//1.Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

//2. Подключение файлов системы
define("ROOT", dirname(__FILE__));
require_once(ROOT.'/components/Router.php');

//3.Установка соед.с бд
require_once (ROOT.'/components/db.php');

require_once ROOT . '/models/adminbase.php';
//вызов router
$router = new Router();
$router ->run();

?>




