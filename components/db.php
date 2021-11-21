<?php
$db = [
    'host' => 'localhost',
    'dbname' => 'portfolio',
    'user' => 'Derry',
    'password' => '12345'
];
$connection = mysqli_connect($db['host'], $db['user'], $db['password'], $db['dbname']);
if ($connection == false) {
    echo 'Ошибка бд<br>';
    echo mysqli_connect_error();
    exit();
}

/*$query = "SELECT * FROM articles where `id`>0";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);*/

?>