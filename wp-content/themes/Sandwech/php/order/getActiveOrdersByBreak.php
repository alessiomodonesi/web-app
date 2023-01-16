<?php

function getActiveOrderByBreak()
{
    $url = 'http://localhost/food-api/API/order/getActiveOrdersByBreak.php' ;

    if (@file_get_contents($url) === false) {
        return false;
    }
    $json = json_decode(file_get_contents($url));
    $order_active = array();
    foreach($json as $single_order){
        array_push($order_active, array($single_order->Orario_della_ricreazione, $single_order->Id_Ordine, $single_order->Utente));
    }
    //echo json_encode($order_active);
    return $order_active;

}
//getActiveOrderByBreak();
?>
