<?php
    // $str="aaa bcd xxx efg";
    // $mail="mymail@mail.ru my.mail@mail.ru my-mail@mail.ru eer r  ttrt my_mail@mail.ru  eegfff  rreer mail@mail.com  eegfff  rreer mail@mail.by  eegfff  rreer mail@yandex.r  eegfff  rreer fhjdhsjhfdhjsjdh.ru";
    // $regMail="#[a-z0-9_.-]+@[a-z_.-]+\.[a-z]{2,}#";
    // $regDomen="#(^https?://[a-z\d\-_]+\.[a-z]{2,}/?$#";
    // function vertMail($arr,$regMail){
    //     foreach ($arr as $key=> $value) {
    //         if(preg_match($regMail,$value)){
    //             echo $key .": ". $value . ": является валидным адресом <br>";
    //         }
    //         else{
    //             echo $key .": ". $value . ": не является валидным адресом <br>";
    //         }
    //     }
    // }
    // vertMail($mail)
    // echo $str

	// function findMail($str,$regMail){
    //     preg_match_all($regMail,$str,$mailArr);
    //     // echo var_dump($mailArr);
    //     foreach ($mailArr[0] as $key => $value) {
    //         echo $key+1 . " : ". $value . "<br>"; 
    //     }
                    
    //     }
    //     findMail($mail,$regMail);
    //     // echo $str;
    $str1="a1b2c3";
    
    
    echo preg_replace_callback("#([\d]+)#", 'quart' ,$str1);

    function quart($arr){
        return pow($arr[0],8);
    }

    #\[([biem]{2})\](.*)#\[/\1\]#
    // echo preg_replace($regSite, $href ,$str2);

   
    
?>


