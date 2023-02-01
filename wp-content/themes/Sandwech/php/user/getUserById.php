<?php
function getUserById($id){
    $url = 'http://localhost/food-api/API/user/getUser.php?id=' . $id;

    if(@file_get_contents($url) == false){
        return false;
    }
    $result = json_decode(file_get_contents($url));
    return $result[0]->email;
}
?>