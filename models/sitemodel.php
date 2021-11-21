<?php
class Site {
    public static function getArticle($id) {//Получить статью "обо мне"
        global $db, $connection;//глобальные переменные
        $query = "SELECT * FROM articles where `id`=$id";//sql запрос
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));//получаем данные
        $data = mysqli_fetch_assoc($result);//конверируем полученные данные в массив
        return array($data);//возращаем массив
    }
    public static function getRemainArticles() {
        global $db, $connection;//глобальные переменные
        $query = "SELECT * FROM articles where `id`!=1 AND `id`!=2 AND `id`!=3";//sql запрос. Здесь номера статей которые не нужно искать "AND `id`!=3"
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));//получаем данные
        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);//конверируем полученные данные в массив

        return array($data);//возращаем массив
    }
}
?>
