<?php
$db = [
    'host' => 'localhost',
    'dbname' => 'portfolio',
    'user' => 'Derry',
    'password' => '12345'
];
$connection = mysqli_connect($db['host'], $db['user'], $db['password'], $db['dbname']);
mysqli_set_charset($connection, "utf8");
if ($connection == false) {
    echo 'Ошибка бд<br>';
    echo mysqli_connect_error();
    exit();
}
?>