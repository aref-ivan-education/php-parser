<?php
include_once("libs/functions.php");
include_once('libs/curl.php');
include_once("libs/mysqli.php");
	// //Устанавливаем доступы к базе данных:
	// 	$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
	// 	$user = 'root'; //имя пользователя, по умолчанию это root
	// 	$password = ''; //пароль, по умолчанию пустой
	// 	$db_name = 'parsesite'; //имя базы данных

	// //Соединяемся с базой данных используя наши доступы:
    //     $link = mysqli_connect($host, $user, $password, $db_name);
    //     mysqli_query($link, "SET NAMES 'utf8'")
    //         or die( mysqli_error($link) );

	// /*
	// 	Соединение записывается в переменную $link,
	// 	которая используется дальше для работы mysqi_query.
    // */
    $table='1_task_sites';
	$result = db_query("SELECT ref FROM ".$table." WHERE id>0");
	

	// for( $sites=[]; $row=mysqli_fetch_assoc($result); $sites[]=$row["ref"]);
	
	// file_put_contents("sites.txt",implode("??",$sites));
	$sites=explode("??",file_get_contents("sites.txt"));

	var_dump($sites);

	

   
?>  