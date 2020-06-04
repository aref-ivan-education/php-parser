<?php
include_once("libs/functions.php");
include_once('libs/curl.php');
include_once("libs/mysqli.php");
require_once "libs/phpQuery.php";

// $str=file_get_contents("rostov-cakes.html");

$site=getPageByUrl("http://old.code.mu/exercises/advanced/php/parsing/rabota-s-bibliotekoj-phpquery-v-php/2/1.php");


$pq=phpQuery::newDocument($site);

$pq->find('img')->remove();
$pq->find('p.more')->remove();
$pq->find('p')->wrap('<div>');
$pq->find('p')->wrapInner('<b>');
echo $pq->html();

// echo pq($footer)->html();



// $linksText= $links->html();

// foreach($content as $elem){
	

// 	echo "<p>".pq($elem)->attr('src')."</p>";
// }
// $linksHref=$links->attr("href");

// var_dump($href);
// var_dump($text);

	



   
?>  