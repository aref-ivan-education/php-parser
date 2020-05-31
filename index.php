<?php

    include_once("libs/functions.php");
    $task2= file_get_contents("http://old.code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/2/1.php");
    $task3= file_get_contents("http://old.code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/3/1.php");

    $menu = searchId($task3,"menu");

    $linksMenu =searchLink($menu);//ссылки из меню
    var_dump($linksMenu);
    $imgs = searchTag($task3,"img");
     
?>