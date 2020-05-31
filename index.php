<?php

    include_once("libs/functions.php");
    $str= file_get_contents("http://old.code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/2/1.php");
    $regBody="#<body[^>]*>(.*)</body>#su";
    $str1='href="\\\'test\'\\"';
    file_put_contents("2.php",$str);

    $elemID="content";

    $regParagraf='#<\s*?p\s*?[^>]*?>(.+?)<\s*?/p\s*?>#su';
     $regClass = '#<\s*?(a|p|div)\s+?class\s*?=\s*.?www[^>]*?>#su';
    $regRef='#href=(.)(.+?)\1#su';
    $regID='#<\s*?([a-z]{3,})\s+?[^>]*?id\s*?=\s*?\"\s*?'.$elemID.'\s*?\"[^>]*?>(.+?)<\s*?/\1\s*?>\s*?<script#su';
    preg_match_all($regClass,$str,$classArr);
    var_dump($classArr[0]);
    preg_match_all($regBody,$str,$bodyArr);
    $body=$bodyArr[1][0]; //Нашли <body>

    preg_match_all($regID,$body,$contentArr);
    $content=$contentArr[2][0]; //нашли содержимое id="content"

    preg_match_all($regParagraf,$body,$paragrafArrBody);
    preg_match_all($regParagraf,$content,$paragrafArrContent);
    $paragrafsBody=$paragrafArrBody[0];
    // foreach ($paragrafArrBody[0] as $paragraf){
    //     if(preg_match($regClass,$paragraf)){
    //     echo $paragraf ."<br>";
    //     }
    //     else  echo 1 . "<br>";
    // };
    // var_dump($paragrafArr);
    
    
    // echo $bodyContent;
    // preg_match_all($regRef,$str,$refArr);
    // searchLink($content); //нашли ссылки в content
    // echo $str;
//    foreach ($paragrafsBody as $paragraf){
    //    echo $paragraf;}

    
?>