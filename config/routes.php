<?php
return array(
    'articles/([0-9]+)' => 'Articles/view/$1',//
    '' => 'site/index',//главная страница
    /*'news/([0-9]+)' => 'news/view',*/
    'articles' => 'articles/index'//ActionIndex в ArticlesController
);
?>