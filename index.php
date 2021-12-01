<!DOCTYPE HTML>
<HTML>
<head>
    <title>Юрий Сенин — Веб-разработчик</title>
    <link href="/views/css/style.css" rel="stylesheet" type="text/css">
    <link href="/views/css/adaptive.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Юрий Сенин — сайт веб-разработчика. HTML, CSS, JS, PHP...">
</head>
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
<body>



