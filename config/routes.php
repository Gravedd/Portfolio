<?php
return array(
    'articles/([0-9]+)' => 'Articles/view/$1',

    /*'news/([0-9]+)' => 'news/view',*/
    'articles' => 'articles/index',//ActionIndex в NewsController
    'products' => 'product/list'//action list в productcontroller
);
?>