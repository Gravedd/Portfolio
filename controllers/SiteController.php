<?php
require_once ROOT . '/models/sitemodel.php';//Подключаем модель
class SiteController
{
    public function actionIndex() {//экшн ИНДЕКС
        /*Статьи которые нужно вписать в главный блок*/
        $aboutme = Site::getArticle(1);//получаем статью обо мне
        $softskills = Site::getArticle(2);//получаем статью soft skills
        $hardskills = Site::getArticle(3);//получаем статью hard skills

        /*Оставшиея статьи. Необходимо настроить в sitemodel, функции getRemainArticles(изменить sql запрос)*/
        $articles = Site::getRemainArticles();

        require_once(ROOT.'/views/index.php');//подключаем view-контроллер(страница - index(со всеми статьями))
        return 'true';
    }
}
?>
