<?php

    include_once("libs/functions.php");
    $rost_cakes = file_get_contents("rostov-cakes.html");
    $task2= file_get_contents("http://old.code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/2/1.php");
    $task3= file_get_contents("http://old.code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/3/1.php");

    $menu = searchId($task3,"menu");

    $linksMenu =searchLink($menu,"marr");//ссылки из меню
    // var_dump($linksMenu);
    $imgs = searchTag($task3,"img");
    $classMore = searchClass($task3,"more");
    $classWrpMain= searchClass($rost_cakes,"wrapper--main","str","<script");
    var_dump($classWrpMain);
     
?>