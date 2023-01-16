<?php

function getActiveOrderByPickup($id)
{
    $url = 'http://localhost/food-api/API/order/getArchiveOrderByPickup.php?ID=' . $id;

    if (@file_get_contents($url) === false) {
        return -1;
    } else {
        $json_data = file_get_contents($url);
        $decode_data = json_decode($json_data);
        $active_order_data = $decode_data;
        $order_arr_active = array();
        foreach ($active_order_data as $order) {
            $order_record = array(
                'id' => $order->id,
                'created' => $order->created,
                'user' => $order->user,
                'pickup' => $order->pickup,
                'break' => $order->break,
                'status' => $order->status,
                'json' => $order->json
            );
            array_push($order_arr_active, $order_record);
        }
        return $order_arr_active;
    }
}
