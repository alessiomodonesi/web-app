<?php

function login()
{
    session_start();
    $url = "http://localhost/food-api/API/user/login.php";
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $data = '
    {
        "email": "admin@gmail.com",
        "password": "admin"
    }';
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($curl);
    curl_close($curl);
    //echo $response;
    if (json_decode($response)->response == true) {
        //echo "i'm in";
        $_SESSION['id'] = json_decode($response)->userID;
        //echo $_SESSION['id'];
        return true;
    } else {
        return false;
    }
}

login();
