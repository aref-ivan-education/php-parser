<?php

function searchLink($target){
    $regLink='#<\s*?a\s+?[^>]*?>(.+?)</a>#su';
    $regHref='#href\s*?=(.)(.+?)\1#';
    $regClassLink='#class\s*?=\s*?"(.+?)"\s*?#';
    $arr=[];
    $link="";
    $name="";

    
    preg_match_all($regLink,$target,$linkArr);
    
    foreach ($linkArr[0] as $key => $value){
        $name=$linkArr[1][$key];
        preg_match($regHref,$value,$href);        
        $href[2]=preg_replace('#[\'"\s]#',"",$href[2]);
        preg_match($regClassLink,$value,$classLink);

        if($classLink){
            $class=$classLink[1];
        }
        else{
            $class="";
        }
        ;

        $arr[$key]=[$value,$href[2],$name,$class];
        

        // echo "href: " . $href[2] . "<br>";
        // if($classLink)
        //     {echo "class: " . $classLink[1] . "<br>";}
        // else{echo "class: " . "отсутствует" . "<br>";};
        // echo "Название: " . $linkArr[1][$key] . "<br>";
    }
    
    return $arr;
}

function searchClass($str,$className,$endHook=""){
    $regClass = '#<\s*?([a-z]{1,})\s+?[^>]*?class\s*?=\s*([^\s]{1,2})\s*?'.$className.'\s*?\2[^>]*?>(.+?)<\s*?/\1\s*?>\s*?'.$endHook.'#su';
    preg_match_all($regClass,$str,$arr);
    return implode($arr[0]);
}
function searchId($str,$idName,$endHook=""){
    $regID='#<\s*?([a-z]{3,})\s+?[^>]*?id\s*?=\s*?\"\s*?'.$idName.'\s*?\"[^>]*?>(.+?)<\s*?/\1\s*?>\s*?'.$endHook.'#su';
    preg_match_all($regID,$str,$arr);
    return implode($arr[0]);
}
function searchTag($str,$tag,$endHook=""){
    $regTag="#<".$tag."[^>]*>(.*?)</".$tag.">\s*?".$endHook."#su";
    preg_match_all($regTag,$str,$arr);
    return implode($arr[0]);

}
?>

