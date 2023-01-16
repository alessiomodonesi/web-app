<?php 

function createOffer($data){
    $url = 'http://localhost/food-api/API/offer/setOfferExpiry.php';
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $header = array('Content-Type: application/json','Content-Lenght: 0');

    curl_setopt($curl, CURLOPT_HEADER, $header);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

    $response = json_decode(curl_exec($curl));

    curl_close($curl);

    if($response->response == true){
        echo ('Modificata la data');
        return true;
    }
    return false;
}
?>