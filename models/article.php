<?php
class Article
{
    /*возвращает массив содержащий одну статью с параметром айди
    */
    public static function getart($id) {//в параметр входит айди нужной статьи
        global $db, $connection;
        $query = "SELECT * FROM articles where `id`=$id";//sql запрос
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));//получаем данные
        $data = mysqli_fetch_assoc($result);//конверируем полученные данные в массив
        return array($data);//возращаем массив
    }

    //возращает список новостей
    public function getNewsList(){
        echo 'f';
    }
    //Счетчик просмотров. Увеливает на 1 поле views в статье в таким айди
    public static function updateViews($id) {
        global $db, $connection;
        $query = "UPDATE `articles` SET `views` = `views`+1 WHERE `id`='$id'";//sql запрос
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));//получаем данные
    }
}

?>