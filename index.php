<?php
include_once("libs/functions.php");
include_once('libs/curl.php');
include_once("libs/mysqli.php");

    $table='1_task_sites';
	// $sites = db_query("SELECT ref FROM ".$table." WHERE id>0");
	$sites=explode("??",file_get_contents("sites.txt"));

	foreach($sites as $key=> $url){
		$html="";
		$html=getPageByUrl($url);
		$title=implode(searchTag($html,"title","marr")[1]);
		var_dump($title);
		var_dump($key);
		// db_query("INSERT INTO 1_task SET id=".$key."  title='".$title."'");
	}

	



   
?>  