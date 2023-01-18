<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'product_offer', 'product')
    ->fields(
        Field::inst('product'),
        Field::inst('offer')
    )
    ->debug(true)
    ->process($_POST)
    ->json();
