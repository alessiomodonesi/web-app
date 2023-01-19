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
    'nutritional-value',
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

// function search_if_exists($value)
// {
//     global $array_admin;
//     if (in_array($array_admin, $value)) {
//         echo 'found';
//         return true;
//     }
//     return false;
// }

// function search_substring($value)
// {
//     global $array_admin;
//     $close_calls = array();
//     for ($i = 0; $i < sizeof($array_admin); $i++) {
//         if (strpos($array_admin[$i], $value) == true) {
//             $close_calls[] = $array_admin[$i];
//         }
//     }
//     if (count($close_calls) == 0) {
//         echo 'Does not exist';
//         return false;
//     } else if (count($close_calls) == 1) {
//         echo 'Found';
//         return true;
//     } else
//         return $close_calls;
// }

function search_page($value)
{
    echo $value;

    // if (search_if_exists($value) == true) {
    if ($value == 'home')
        header("Location: http://localhost/sandwech");
    else
        header("Location: http://localhost/sandwech/" . $value);
    // }

    // $result = search_substring($value);
    // return $result;
}
