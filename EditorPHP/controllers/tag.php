<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'tag', 'id')
    ->fields(
        Field::inst('id'),
        Field::inst('name')
    )
    ->debug(true)
    ->process($_POST)
    ->json();
