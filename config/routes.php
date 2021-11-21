<?php
return array(
    /*Статья*/
    'articles/([0-9]+)' => 'Articles/view/$1',
    'articles' => 'articles/index',

    /*АДМИН*/
    'admin/login' => 'admin/login',
    'admin/auth' => 'admin/auth',
    'admin' => 'admin/index',//админ - главное. Должно стоять в конце


    //главная страница
    'index.php' => 'site/index',
    '' => 'site/index',//в самом конце
);
?>