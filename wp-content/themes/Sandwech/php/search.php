<?php
$array_admin = array(
    'allergen',
    'break',
    'class',
    'home',
    'ingredient',
    'management',
    'offer',
    'order',
    'pickup-break',
    'pickup',
    'product-allergen',
    'product-ingredient',
    'product-offer',
    'product-order',
    'product-tag',
    'product',
    'reset',
    'status',
    'tag'
);

function search_page($value)
{
    echo $value;

    if ($value == 'home')
        header("Location: http://localhost/sandwech");
    else
        header("Location: http://localhost/sandwech/" . $value);
}
