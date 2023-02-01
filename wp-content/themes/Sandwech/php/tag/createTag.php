<?php 
function createTag($tag){
    $url = 'http://localhost/food-api/API/tag/createTag.php';
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url); // setta l'url
    curl_setopt($curl, CURLOPT_POST, true); // specifica che è una post request
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // ritorna il risultato come stringa

    $headers = array(
        "Content-Type: application/json",
        "Content-Lenght: 0",
    );

    $data = array("tag_name" => $tag);
    //echo json_encode($data);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); // setta gli headers della request

    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

    $response = json_decode(curl_exec($curl));
    curl_close($curl);
    //echo json_encode($response);
    if($response->Creation == "Done"){
        echo ("SIUUU");
    }
}
createTag("PANINOCODE");
?>