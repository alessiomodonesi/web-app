<?php
function getTag($id){
    $tag = null;
    if(gettype($id) == 'integer'){
        $url = 'http://localhost/food-api/API/tag/getTag.php?tag_ID=' . $id;
    }else{
        $url = sprintf('http://localhost/food-api/API/tag/getTag.php?tag_name=%s',$id);
    }
    echo json_encode($url) . "<br />";

    if(@file_get_contents($url) == false){
        echo 'aoooo';
    }
    $data = json_decode(file_get_contents($url));
    echo json_encode($data) . "<br />";
}
getTag(1);
getTag('aooo');
?>