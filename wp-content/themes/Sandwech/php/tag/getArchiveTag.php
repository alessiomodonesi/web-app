<?php
function getArchiveTag(){
    $url = 'http://localhost/food-api/API/tag/getArchiveTag.php';

    if(@file_get_contents($url) == false){
        return false;
    }
    $data = json_decode(file_get_contents($url));
    $tags = array();
    foreach ($data as $key){
        array_push($tags, array($key->id,$key->name));
    }
    return $tags;
}
getArchiveTag();
?>