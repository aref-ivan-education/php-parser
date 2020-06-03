<?php
    function db_query($query,$dbSettings=[
        "host" => 'localhost', //имя хоста, на локальном компьютере это localhost
		"user" => 'root', //имя пользователя, по умолчанию это root
		"password" => '', //пароль, по умолчанию пустой
		"db_name" => 'parsesite' //имя базы данных
    ]){
        $host=$dbSettings["host"];
        $user=$dbSettings["user"];
        $password=$dbSettings["password"];
        $db_name=$dbSettings["db_name"];
        //Соединяемся с базой данных используя наши доступы:
        $link = mysqli_connect($host, $user, $password, $db_name);

        mysqli_query($link, "SET NAMES 'utf8'") or die ( mysqli_error($link) );
        // if(is_object(mysqli_query($link, $query))){
        //     $result = mysqli_query($link, $query);

        //     for( $data=[]; $row=mysqli_fetch_assoc($result); $data[]=$row["ref"]);

        //     return $data;
        // }else{
            mysqli_query($link, $query);
        // }
    };
		

	

	

?>