<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'nutritional_value', 'ID')
    ->fields(
        Field::inst('nutritional_value.ID', 'ID'),
        Field::inst('product.name', 'product'),
        Field::inst('nutritional_value.kcal', 'kcal'),
        Field::inst('nutritional_value.fats', 'fats'),
        Field::inst('nutritional_value.saturated_fats', 'saturated_fats'),
        Field::inst('nutritional_value.carbohydrates', 'carbohydrates'),
        Field::inst('nutritional_value.sugars', 'sugars'),
        Field::inst('nutritional_value.proteins', 'proteins'),
        Field::inst('nutritional_value.fiber', 'fiber'),
        Field::inst('nutritional_value.salt', 'salt')
    )
    ->leftJoin('product', 'product.nutritional_value', '=', 'nutritional_value.ID')
    ->debug(true)
    ->process($_POST)
    ->json();
