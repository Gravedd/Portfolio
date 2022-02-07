<?php
require_once ROOT . '/models/article.php';
class ArticlesController
{
    public function actionIndex() {
        $result = Article::getart(1);//получаем результат //айди статьи - 1
        require_once(ROOT.'/views/article.php');
        return 'true';
    }

    public function actionView($id) {//экшн: посмореть статью
        $id =(int)$id;
        $result = Article::getart($id);//получаем результат
        //чтобы вывести, например, заголовок, нужно: echo $result[0]['title'];
        require_once(ROOT.'/views/article.php');
        Article::updateViews($id);

        return true;
    }

}
?>
