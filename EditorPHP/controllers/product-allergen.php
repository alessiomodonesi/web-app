<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'product_allergen', 'product')
    ->fields(
        Field::inst('product_allergen.product', 'product_ID'),
        Field::inst('product_allergen.allergen', 'allergen_ID'),
        Field::inst('product.name', 'product'),
        Field::inst('allergen.name', 'allergen')
    )
    ->leftJoin('product', 'product.ID', '=', 'product_allergen.product')
    ->leftJoin('allergen', 'allergen.ID', '=', 'product_allergen.allergen')
    ->debug(true)
    ->process($_POST)
    ->json();
