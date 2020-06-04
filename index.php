<?php
include_once("libs/functions.php");
include_once('libs/curl.php');
include_once("libs/mysqli.php");
require_once "libs/phpQuery.php";

// $str=file_get_contents("rostov-cakes.html");

$site=getPageByUrl("http://old.code.mu/exercises/advanced/php/parsing/rabota-s-bibliotekoj-phpquery-v-php/2/1.php");


$pq=phpQuery::newDocument($site);

$pq->find('img')->remove();
$pq->find('.more')->remove();
$pq->find("p[class=\'more\']")->remove();
$pq->find('p')->wrap('<div>');
$pq->find('p')->wrapInner('<b>');
// $link=$pq->find('div.block a[href]');



// foreach($link as $elem){
    
//     // pq($elem)->replaceWith(pq($elem)->html());
//     echo pq($elem)->html()."<br>";

// }

echo $pq->html();


	



   
?>  