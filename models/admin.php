<?php
class Admindb {
    public static function getart($id) {//в параметр входит айди нужной статьи
        global $db, $connection;
        $query = "SELECT * FROM articles where `id`=$id";//sql запрос
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));//получаем данные
        $data = mysqli_fetch_assoc($result);//конверируем полученные данные в массив
        return array($data);//возращаем массив
    }
    //фукнция изменяет статью.
    //Вход айди статьи, название, контент статьи, дата, просмотры
    public static function editArticle($id, $title, $content,$pdate, $views, $filename) {
        global $db, $connection;
        $query = "UPDATE `articles` SET `title` = '$title', `content` = '$content', `pubdate` = '$pdate', `views` = '$views', `image` = '$filename' WHERE `articles`.`id` = $id;";//sql запрос
        $data = mysqli_query($connection, $query) or die(mysqli_error($connection));//получаем данные
        return $data;
    }
    public static function editArticleNoimg($id, $title, $content,$pdate, $views) {
        global $db, $connection;
        $query = "UPDATE `articles` SET `title` = '$title', `content` = '$content', `pubdate` = '$pdate', `views` = '$views' WHERE `articles`.`id` = $id;";//sql запрос
        $data = mysqli_query($connection, $query) or die(mysqli_error($connection));//получаем данные
        return $data;
    }
    public static function AddArticle($title, $content, $pdate, $filename) {
        global $db, $connection;
        $query = "INSERT INTO `articles` (`title`, `content`, `pubdate`, `image`) VALUES ('$title', '$content', '$pdate', '$filename')";
        $data = mysqli_query($connection, $query) or die(mysqli_error($connection));//получаем данные
        return $data;
    }
    public static function deleteArticle($id) {
        global $db, $connection;
        $query = "DELETE FROM `articles` WHERE `articles`.`id` = '$id'";
        $data = mysqli_query($connection, $query) or die(mysqli_error($connection));//получаем данные
        return $data;
    }
    public static function getAllPosts() {
        global $db, $connection;
        $query = "SELECT * FROM articles where `id`>0";//sql запрос
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));//получаем данные
        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);//конверируем полученные данные в массив
        return $data;
    }
    public static function viewCount() {
        global $db, $connection;
        $query = "SELECT SUM(`views`) FROM articles";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));//получаем данные
        $data = mysqli_fetch_assoc($result);

        return $data;
    }

}
?>
