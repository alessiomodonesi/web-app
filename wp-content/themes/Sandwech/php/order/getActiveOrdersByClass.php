<?php

function getActiveOrderByClass()
{
    $url = 'http://localhost/food-api/API/order/getActiveOrdersByClass.php';

    if (@file_get_contents($url) === false) {
        return false;
    }
    $json = json_decode(file_get_contents($url));
    $order_active = array();
    foreach($json as $single_order){
        array_push($order_active, array($single_order->id_classe, $single_order->anno_classe, $single_order->sezione, $single_order->id_ordine));
    }
    //echo json_encode($order_active);
    return $order_active;
}

//getActiveOrderByClass();

?>