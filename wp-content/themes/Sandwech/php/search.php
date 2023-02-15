<?php

$array_admin = array(
    'allergen',
    'bibite',
    'break',
    'brioches',
    'carrello',
    'class',
    'home',
    'ingredient',
    'management',
    'nutritional-value',
    'offer',
    'order',
    'panini',
    'piadine',
    'pickup',
    'pickup-break',
    'product',
    'product-allergen',
    'product-ingredient',
    'product-offer',
    'product-order',
    'product-tag',
    'reset',
    'snack',
    'status',
    'studente',
    'tag',
    'user',
    'user-class',
    'vendite'
);

function search_if_exists($value, $array_admin)
{
    if (in_array($value, $array_admin)) {
        return true;
    }
    return false;
}

function search_substring($value, $array_admin)
{
    $close_calls = array();
    for ($i = 0; $i < sizeof($array_admin); $i++) {
        if (str_contains($array_admin[$i], $value) == true) {
            array_push($close_calls, $array_admin[$i]);
        }
    }
    echo json_encode($close_calls);
    if (count($close_calls) == 0) {
        return false;
    } else {
        return $close_calls;
    }
}

function search_page($value)
{
    echo $value;
    $array_admin = array(
        'allergen',
        'bibite',
        'break',
        'brioches',
        'carrello',
        'class',
        'home',
        'ingredient',
        'management',
        'nutritional-value',
        'offer',
        'order',
        'panini',
        'piadine',
        'pickup',
        'pickup-break',
        'product',
        'product-allergen',
        'product-ingredient',
        'product-offer',
        'product-order',
        'product-tag',
        'reset',
        'snack',
        'status',
        'studente',
        'tag',
        'user',
        'user-class',
        'vendite'
    );

    if (search_if_exists(strtolower($value), $array_admin) == true) {
        if (strtolower($value) == 'home')
            header("Location: http://localhost/sandwech");
        else
            header("Location: http://localhost/sandwech/" . $value);
    }

    $result = search_substring(strtolower($value), $array_admin);
    echo json_encode($result);
    if ($result == false) {
        header('Location: http://localhost/sandwech');
    } else {
        header('Location: http://localhost/sandwech/' . $result[0]);
    }
}
