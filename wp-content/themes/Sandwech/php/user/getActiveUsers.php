<?php 
function getActiveUsers(){
    $url = 'http://localhost/food-api/API/user/getActiveUser.php';
    if(@file_get_contents($url) == false){
        return false;
    }
    $data  = json_decode(file_get_contents($url));
    $users = array();
    foreach ($data as $user) {
        array_push($users, array($user->id, $user->name, $user->surname, $user->email));
        //echo json_encode($user);
        //echo "\n";
    }
    //echo json_encode($users);
    return $users;
}
//getActiveUsers();
?>