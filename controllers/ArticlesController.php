<?php
require_once ROOT . '/models/article.php';
class ArticlesController
{
    public function actionIndex() {
        require_once(ROOT.'/views/index.html');
        return 'true';
    }
    public function actionView($id) {//экшн: посмореть статью
        $result = Article::getart($id);//получаем результат
        //чтобы вывести, например, заголовок, нужно: echo $result[0]['title'];
        require_once(ROOT.'/views/article.html');

        return true;
    }
}
?>
