<?php
function resetPassword($email){
    $url = 'http://localhost/food-api/API/user/resetPass.php';
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url); // setta l'url
    curl_setopt($curl, CURLOPT_POST, true); // specifica che è una post request
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // ritorna il risultato come stringa

    $headers = array(
        "Content-Type: application/json",
        "Content-Lenght: 0",
    );

    $data = array("email" => $email);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); // setta gli headers della request

    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

    $responseJson = curl_exec($curl);

    curl_close($curl);

    $response = json_decode($responseJson);
    var_dump($response);
    if ($response->response == true) {
        unset($_SESSION['user_id']);
        header('Location: http://localhost/sandwech');
    } else {
        return -1;
    }
}
//resetPassword();
?>