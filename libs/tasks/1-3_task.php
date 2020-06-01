<?php 
    include_once("libs/functions.php");
    $rost_cakes = file_get_contents("rostov-cakes.html");
    $task2= file_get_contents("http://old.code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/2/1.php");
    $task3= file_get_contents("http://old.code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/3/1.php");

    $menu = searchId($task3,"menu");

    $linksMenu =searchLink($menu,"marr");//ссылки из меню
    // var_dump($linksMenu);
    $imgs = searchImg($rost_cakes);
    $classMore = searchClass($task3,"more");
    // $classWrpMain= searchClass($rost_cakes,"wrapper--main","str","<script");
   $content=searchId($task3,"content","str","<div\s+?id=\"foo");
   $scriptSContent=searchTag($content,"script","arr");

    $content=str_replace($scriptSContent[0]," ",$content);//удалили скрипты
    $imgContent=searchImg($content,"marr");
    $content=str_replace($imgContent[0],"",$content);//удалили картинки
    $classMoreContent = searchClass($content,"more","arr");
    $content=str_replace($classMoreContent[0],"",$content);//удалили more
    $contentH2=searchTag($content,"h2","arr")[0];
    $linkH2 = searchLink(implode($contentH2),"marr");
    $contentH2NoLinks=str_replace($linkH2[0],$linkH2[1],$contentH2);

    $content=str_replace($contentH2,$contentH2NoLinks,$content);
    $content = preg_replace("#<\s*?p[^>]*?>#su","<p>",$content);
    // var_dump($content);

    $content = preg_replace('#<\s*?span[^>]*?>|<\s*?/\s*?span[^>]*?>#su',"",$content);
    var_dump($content);
?>  
