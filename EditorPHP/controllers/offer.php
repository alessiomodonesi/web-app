<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'offer', 'ID')
    ->fields(
        Field::inst('ID'),
        Field::inst('price'),
        Field::inst('start'),
        Field::inst('expiry'),
        Field::inst('description')
    )
    ->debug(true)
    ->process($_POST)
    ->json();
