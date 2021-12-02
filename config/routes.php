<?php
return array(
    /*Статья*/
    'articles/([0-9]+)' => 'Articles/view/$1',
    'articles' => 'articles/index',

    /*АДМИН*/
    'admin/login' => 'admin/login',
    'admin/auth' => 'admin/auth',
    'admin/editprewiew' => 'admin/editpreview',
    'admin/saveEditPost' => 'admin/saveEditPost',
    'admin/newpostspreview' => 'admin/newpostspreview',
    'admin/addnewpost' => 'admin/addnewpost',
    'admin/addposts' => 'admin/addposts',
    'admin/allposts' => 'admin/seeall',
    'admin/logout' => 'admin/logout',
    'admin/deletepost/([0-9]+)' => 'admin/deletepost/$1',
    'admin/editpost/([0-9]+)' => 'admin/editpost/$1',
    'admin' => 'admin/index',//админ - главная страница. Должно стоять в конце


    //главная страница
    'index.php' => 'site/index',
    '' => 'site/index',//в самом конце
);
?>