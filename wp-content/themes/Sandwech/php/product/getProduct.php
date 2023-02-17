<?php

function getProduct($id)
{
    $url = 'http://localhost/food-api/API/product/getProduct.php?PRODUCT_ID=' . $id;
    return json_decode(file_get_contents($url));
}
