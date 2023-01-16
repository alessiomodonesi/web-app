<?php

function getActiveOrderByPickup()
{
    $url = 'http://localhost/food-api/API/order/getActiveOrdersByPickup.php';

    if (@file_get_contents($url) === false) {
        return -1;
    }
    $json = json_decode(file_get_contents($url));
    $order_active = array();
    foreach($json as $single_order){
        array_push($order_active, array($single_order->Punto_di_consegna, $single_order -> Id_Ordine, $single_order->Utente));
    }
    //echo json_encode($order_active);
    return $order_active;
}
//getActiveOrderByPickup();
?>