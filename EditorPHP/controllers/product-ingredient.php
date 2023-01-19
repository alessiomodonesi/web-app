<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'product_ingredient', 'product')
    ->fields(
        Field::inst('product_ingredient.product', 'product_ID'),
        Field::inst('product_ingredient.ingredient', 'ingredient_ID'),
        Field::inst('product.name', 'product'),
        Field::inst('ingredient.name', 'ingredient')
    )
    ->leftJoin('product', 'product.ID', '=', 'product_ingredient.product')
    ->leftJoin('ingredient', 'ingredient.ID', '=', 'product_ingredient.ingredient')
    ->debug(true)
    ->process($_POST)
    ->json();
