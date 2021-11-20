<?php
return array(
    'news/([0-9]+)' => 'news/view/$1',

    /*'news/([0-9]+)' => 'news/view',*/
    'news' => 'news/index',//ActionIndex в NewsController
    'products' => 'product/list'//action list в productcontroller
);
?>