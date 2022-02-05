<?php
$db = [
    'host' => 'localhost',
    'dbname' => 'portfolio',
    'user' => 'root',
    'password' => ''
];
/*соеднинение с БД*/
$connection = mysqli_connect($db['host'], $db['user'], $db['password'], $db['dbname']);
mysqli_set_charset($connection, "utf8");//установка кодировки

//если подключение не удалось, то завершить работу
if ($connection == false) {
    echo 'Ошибка бд<br>';
    echo mysqli_connect_error();
    exit();
}
?>