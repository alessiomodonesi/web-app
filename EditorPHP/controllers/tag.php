<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'tag', 'ID')
    ->fields(
        Field::inst('ID'),
        Field::inst('name')
    )
    ->debug(true)
    ->process($_POST)
    ->json();
