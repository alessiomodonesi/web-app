<?php

function getProduct()
{
    $url = 'http://localhost/food-api/API/product/getProduct.php?PRODUCT_ID=' . $_POST["id"];
    return json_decode(file_get_contents($url));
}
