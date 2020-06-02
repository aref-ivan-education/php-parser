<?php

    include_once("libs/functions.php");
    $str= file_get_contents("http://old.code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/2/1.php");
    $body = searchTag($str,"body");
    $bodyStr = implode($body[0]); 

    $contentId = searchId($bodyStr,"content","<script");
    $contentStr= implode($contentId[0]);
    $linkContent = searchLink($contentStr);
    
    $paragrafs = implode(searchTag($str,"p")[0]);

    $paragrafsClassWWW=searchClass($paragrafs,'www');
    $linkClassWWWContents=searchLink(implode(searchClass(implode(searchTag($contentStr,"a")[0]),"www")[0]));//нашли все <a> в content, потом среди них нашли с классом www, и передали в массив
    $pag=implode(searchClass($str,"pag")[0]);
    $linksPag = searchLink($pag);
    $linkActive=searchLink(implode(searchClass($pag,"active")[0]));
    $footer = implode(searchId($str,"footer")[0]);
    
    $parClassEEEFooter = searchClass(implode(searchTag($footer,"p")[0]),"eee");
    var_dump($parClassEEEFooter);

    
?>