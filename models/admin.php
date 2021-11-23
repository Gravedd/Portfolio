<?php
class Admindb {
    public static function getart($id) {//в параметр входит айди нужной статьи
        global $db, $connection;
        $query = "SELECT * FROM articles where `id`=$id";//sql запрос
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));//получаем данные
        $data = mysqli_fetch_assoc($result);//конверируем полученные данные в массив
        return array($data);//возращаем массив
    }
}
?>
