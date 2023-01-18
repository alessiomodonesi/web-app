<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'product_tag', 'product')
    ->fields(
        Field::inst('product'),
        Field::inst('tag')
    )
    ->debug(true)
    ->process($_POST)
    ->json();
