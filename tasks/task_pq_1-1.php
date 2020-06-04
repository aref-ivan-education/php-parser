<?php
include_once("libs/functions.php");
include_once('libs/curl.php');
include_once("libs/mysqli.php");
require_once "libs/phpQuery.php";

// $str=file_get_contents("rostov-cakes.html");

$site=getPageByUrl("http://old.code.mu/exercises/advanced/php/parsing/rabota-s-bibliotekoj-phpquery-v-php/1/1.php");


$pq=phpQuery::newDocument($site);

$content= $pq->find("#content");
$footer=$pq->find("#footer");
$sidebars=$pq->find(".sidebar");
$paragrafs=$pq->find("p");
$links=$pq->find('a[href]');
$prgfWww=$pq->find("p.www");
$linkWwwContent = pq($content)->find('a[href].www');
$linksPag=$pq->find(".pag .active a");
$prgfEeeFooter=pq($footer)->find('p.eee');

// echo pq($footer)->html();



// $linksText= $links->html();

foreach($prgfEeeFooter as $elem){
	

	echo "<p>".pq($elem)->html()."</p>";
}
// $linksHref=$links->attr("href");

// var_dump($href);
// var_dump($text);

	



   
?>  