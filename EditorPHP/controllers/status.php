<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'status', 'id')
    ->fields(
        Field::inst('id'),
        Field::inst('description')
    )
    ->debug(true)
    ->process($_POST)
    ->json();
