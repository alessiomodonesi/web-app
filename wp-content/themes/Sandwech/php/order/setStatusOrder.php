<?php

function setStatusOrder($id)
{
    $url = 'http://localhost/food-api/API/order/setStatusOrder.php?ID=' . $id;
    return json_decode(file_get_contents($url));
}
