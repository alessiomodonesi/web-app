<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'product_order', 'product')
    ->fields(
        Field::inst('product'),
        Field::inst('order')
    )
    ->debug(true)
    ->process($_POST)
    ->json();
