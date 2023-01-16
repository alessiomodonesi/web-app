<?php
function getArchiveProducts(){
    $url = 'http://localhost/food-api/API/product/getArchiveProducts.php';
    if(@file_get_contents($url) == false){
        return false;
    }
    $json = json_decode(file_get_contents($url));
    $products_array = array();
    $prod = 'Nome prodotto';
    foreach($json as $product){
        array_push($products_array, array($product->ID,$product->$prod, $product->Prezzo, $product->Tag));
    }
    echo json_encode($products_array);
}
getArchiveProducts();
?>