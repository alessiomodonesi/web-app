<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'product_ingredient', 'product')
    ->fields(
        Field::inst('product'),
        Field::inst('ingredient')
    )
    ->debug(true)
    ->process($_POST)
    ->json();
