<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'break', 'ID')
    ->fields(
        Field::inst('ID'),
        Field::inst('time')
    )
    ->debug(true)
    ->process($_POST)
    ->json();
