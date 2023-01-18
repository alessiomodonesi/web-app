<?php
function deleteTag($id){
    $url = 'http://localhost/food-api/API/user/deleteAccount.php?id='.$id;
    $curl = curl_init();
    //$data = json_decode(file_get_contents($url));
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    $response = json_decode($result);
    //var_dump($result);
    $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    if($http_code == 200){
        //echo json_encode('bene');
        return true;
    }else{
        return false;
    }
    //echo json_encode('male'); 
}
//deleteTag(1);
?>