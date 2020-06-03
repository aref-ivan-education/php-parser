<?php
	function getPageByUrl ($url)
	{
		//Инициализируем сеанс
		$curl = curl_init();

		//Указываем адрес страницы
		curl_setopt($curl, CURLOPT_URL, $url);

        //Ответ сервера сохранять в переменную, а не на экран		
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        
        //Переходить по редиректам
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);

        //Выполняем запрос:		
        $result = curl_exec($curl);

		//Отлавливаем ошибки подключения
		if ($result === false) {
			echo "Ошибка CURL: " . curl_error($curl);
			return false;
		} else {
			return $result;
		}
	}

?>