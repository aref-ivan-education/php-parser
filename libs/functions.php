<?php

function searchLink($target,$type="arr"){
    $regLink='#<\s*?a\s+?[^>]*?>(.+?)</a>#su';
    $regHref='#href\s*?=\s*?([^\s]{1,2})\s*?(.+?)\1#';
    // $regClassLink='#class\s*?=\s*?"(.+?)"\s*?#';
    $arr=[];
    $link="";
    $name="";   
    preg_match_all($regLink,$target,$linkArr);  
    foreach ($linkArr[0] as $key => $value){
        $name=$linkArr[1][$key];
        preg_match($regHref,$value,$href);   
        if(empty($href[2])){$href[2]="";}     
        $href[2]=preg_replace('#[\'"\s]#',"",$href[2]);
        ;
        $arr[$key]=[$value,$href[2],$name];
        
    }
    switch($type){
        case "arr":
            return $arr;
            break;
        case "str": 
            return implode($linkArr[0]);
            break;
        case "marr": 
            return $linkArr;
            break;
        default:
            return $arr;
            break;

    }
   
}

function searchImg($target,$type="arr"){
    $regImg="#<\s*?img\s+?[^>]*?>#su";
    $regSrc = '#src\s*?=\s*?([^\s]{1,2})\s*?(.+?)\1#';
    $regAlt = '#alt\s*?=\s*?([^\s]{1,2})\s*?(.+?)\1#';
    $arr=[];

    preg_match_all($regImg,$target,$imgArr);

    foreach($imgArr[0] as $key=> $value){
        preg_match($regSrc,$value,$src);
        preg_match($regAlt,$value,$alt);
        if(!$alt){$alt[2]="";}
        $arr[$key]=[$value,$src[2],$alt[2]];

    }

    switch($type){
        case "arr":
            return $arr;
            break;
        case "str": 
            return implode($imgArr[0]);
            break;
        case "marr": 
            return $imgArr;
            break;
        default:
            return $arr;
            break;

    }



}

function searchClass($str,$className,$type="str",$endHook=""){
    $regClass = '#<\s*?([a-z]{1,})\s+?[^>]*?class\s*?=\s*([^\s]{1,2})[\sa-z0-9\-_]*?'.$className.'[\sa-z0-9\-_]*?\2[^>]*?>(.+?)<\s*?/\1\s*?>\s*?'.$endHook.'#su';
    preg_match_all($regClass,$str,$arr);
    if($type=="str"){
        return implode($arr[0]);
    }else{
       return $arr;
    }
    
}
function searchId($str,$idName,$type="str",$endHook=""){
    $regID='#<\s*?([a-z]{3,})\s+?[^>]*?id\s*?=\s*?\"\s*?'.$idName.'\s*?\"[^>]*?>(.+?)<\s*?/\1\s*?>\s*?'.$endHook.'#su';
    preg_match_all($regID,$str,$arr);
    if($type=="str"){
        return implode($arr[0]);
    }else{
       return $arr;
    }
}
function searchTag($str,$tag,$type="str",$endHook=""){
    $regTag="#<".$tag."[^>]*>(.*?)</".$tag.">\s*?".$endHook."#su";
    preg_match_all($regTag,$str,$arr);
    if($type=="str"){
        return implode($arr[0]);
    }else{
       return $arr;
    }

}
?>

