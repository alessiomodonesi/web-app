<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'product_allergen', 'product')
    ->fields(
        Field::inst('product'),
        Field::inst('allergen')
    )
    ->debug(true)
    ->process($_POST)
    ->json();
