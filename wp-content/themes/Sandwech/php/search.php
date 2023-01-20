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

function search_if_exists($value, $array_admin)
{
    if (in_array($value, $array_admin)) {
        //echo 'found';
        return true;
    }
    return false;
}

function search_substring($value, $array_admin)
{
    //echo sizeof($array_admin);
    $close_calls = array();
    for ($i = 0; $i < sizeof($array_admin); $i++) {
        if (str_contains($array_admin[$i], $value) == true) {
            array_push($close_calls, $array_admin[$i]);
        }
    }
    echo json_encode($close_calls);
    if (count($close_calls) == 0) {
        //echo 'Does not exist';
        return false;
    } else {
        //echo 'Found';
        return $close_calls;
    }
}

function search_page($value)
{
    echo $value;
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
    //$array_mng = array();
    if (search_if_exists(strtolower($value), $array_admin) == true) {
        if (strtolower($value) == 'home')
            header("Location: http://localhost/sandwech");
        else
            header("Location: http://localhost/sandwech/" . $value);
    }

    $result = search_substring(strtolower($value), $array_admin);
    echo json_encode($result);
    if($result == false){
        header('Location: http://localhost/sandwech');
    }else{
        header('Location: http://localhost/sandwech/'. $result[0]);
    }
    // return $result;
}
