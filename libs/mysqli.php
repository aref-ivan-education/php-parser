<?php
    function db_query($query,$dbSettings=[]){
        $host=(isset($dbSettings["host"]))?$dbSettings['host'] : "localhost";
        $user=(isset($dbSettings["user"]))?$dbSettings["user"]:"root";
        $password=(isset($dbSettings["password"]))?$dbSettings["password"]:"";
        $db_name=(isset($dbSettings["db_name"]))?$dbSettings["db_name"]:"parsesites";
        //Соединяемся с базой данных используя наши доступы:
        $link = mysqli_connect($host, $user, $password, $db_name);

        mysqli_query($link, "SET NAMES 'utf8'") or die ( mysqli_error($link) );
        $result = mysqli_query($link, $query);

        if(is_object($result)){

            for( $data=[]; $row=mysqli_fetch_assoc($result); $data[]=$row["ref"]);

            return $data;
        }
    };
		

	

	

?>