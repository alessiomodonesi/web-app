<?php 
function getOrderByClassAndBreak(){
    $url = 'http://localhost/food-api/API/order/getOrdersByClassandBreak.php';
    if(file_get_contents($url) == false){
        return false;
    }
    $json = json_decode(file_get_contents($url));
    $order_active = array();
    foreach($json as $single_order){
        array_push($order_active, $single_order);
    }
    //echo json_encode($order_active);
    return $order_active;
}
//getOrderByClassAndBreak();
?>