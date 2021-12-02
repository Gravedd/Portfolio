<?php
$db = [
    'host' => 'sql310.unaux.com',
    'dbname' => 'unaux_30487468_portfolio',
    'user' => 'unaux_30487468',
    'password' => 'vp4jfd8rde'
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