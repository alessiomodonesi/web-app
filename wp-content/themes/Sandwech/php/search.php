<?php
$array_admin = array('allergen', 'break', 'class', 'ingredient','login', 'management' , 'offer', 'order', 'pickup-break', 'pickup', 'product-allergen', 'product-ingredient', 'product-offer', 'product-order', 'product-tag', 'product', 'reset', 'status', 'tag');

function search_page($value){
    echo $value;
    header("Location: http://localhost/sandwech/". $value."/");
}
?>