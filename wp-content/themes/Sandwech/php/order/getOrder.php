<?php

error_reporting(0);

function getOrder($id)
{
    $url = 'http://localhost/food-api/API/order/getOrder.php?ID=' . $id;
    return json_decode(file_get_contents($url));
}
