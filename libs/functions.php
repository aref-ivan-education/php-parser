<?php

function searchLink($target){
    $regLink='#<\s*?a\s+?[^>]*?>(.+?)</a>#su';
    $regHref='#href\s*?=(.)(.+?)\1#';
    $regClassLink='#class\s*?=\s*?"(.+?)"\s*?#';
    

    
    preg_match_all($regLink,$target,$linkArr);
    // echo $site;
    foreach ($linkArr[0] as $key => $value){

        preg_match($regHref,$value,$href);
        
        $href[2]=preg_replace('#[\'"\s]#',"",$href[2]);

        preg_match($regClassLink,$value,$classLink);
        

        echo "href: " . $href[2] . "<br>";
        if($classLink)
            {echo "class: " . $classLink[1] . "<br>";}
        else{echo "class: " . "отсутствует" . "<br>";};
        echo "Название: " . $linkArr[1][$key] . "<br>";
    }
    

}
?>