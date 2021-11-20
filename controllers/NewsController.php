<?php
require_once ROOT. '/models/news.php';
class NewsController
{
    public function actionIndex() {
        echo '<br>actionIndex действие';
        return 'true';
    }
    public function actionView($id) {//экшн: посмореть статью
        echo '<br>Просмотр одной новости';//временно
        echo "<br>$id - айди новости<br>";//временно
        $result = News::getart($id);//получаем результат
        //чтобы вывести, например, заголовок, нужно: echo $result[0]['title'];
        echo "<pre>";//временно
        var_dump($result);//временно
        echo "</pre>";//временно
        require_once(ROOT.'/views/news/index.php');



        return true;
    }
}
?>
