<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'status', 'ID')
    ->fields(
        Field::inst('ID'),
        Field::inst('description')
    )
    ->debug(true)
    ->process($_POST)
    ->json();
