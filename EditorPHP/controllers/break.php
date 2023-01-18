<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'break', 'id')
    ->fields(
        Field::inst('id'),
        Field::inst('time')
    )
    ->debug(true)
    ->process($_POST)
    ->json();
