<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'product', 'ID')
    ->fields(
        Field::inst('product.ID', 'ID'),
        Field::inst('product.name', 'name'),
        Field::inst('product.price', 'price'),
        Field::inst('product.description', 'description'),
        Field::inst('product.quantity', 'quantity'),
        Field::inst('product.nutritional_value', 'nutritional_value'),
        Field::inst('product.active', 'active')
    )
    ->leftJoin('product_tag', 'product_tag.product', '=', 'product.ID')
    ->leftJoin('tag', 'tag.ID', '=', 'product_tag.tag')
    ->where('tag.name', 'piadine')
    ->debug(true)
    ->process($_POST)
    ->json();
