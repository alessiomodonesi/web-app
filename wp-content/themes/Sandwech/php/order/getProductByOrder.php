<?php 

function getProductsByOrder($id){
    $url = 'http://localhost/food-api/API/order/getOrderProduct.php?ORDER_ID='.$id;
    if(@file_get_contents($url) == false){
        return false;
    }
    $json = json_decode(file_get_contents($url));
    $order_active = array();
    foreach($json as $prod_order){
        array_push($order_active, array($prod_order->order, $prod_order->product));
    }
    //echo json_encode($order_active);
    return $order_active;

}
//getProductsByOrder(1);
?>