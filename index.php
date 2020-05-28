<?php
    $str= file_get_contents("http://old.code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/2/1.php");
    $regBody="#<body[^>]*>(.*)</body>#su";
    $str1='href="\\\'test\'\\"';
    $regRef='#href=(.)(.+?)\1#su';
    $regID='#<\s*?([a-z]{3,})\s+?[^>]*?id\s*?=\s*?\"\s*?content\s*?\"[^>]*?>(.+?)<\s*?/\1\s*?>\s*?<script#su';

    preg_match_all($regID,$str,$contentArr);
    preg_match_all($regBody,$str,$bodyArr);

    $bodyContent=$bodyArr[1][0];
    $content=$contentArr[2][0];
    // echo $bodyContent;
    // preg_match_all($regRef,$str,$refArr);
    // echo $str;
    var_dump($content);
?>