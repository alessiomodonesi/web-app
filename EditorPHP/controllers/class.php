<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'class', 'ID')
    ->fields(
        Field::inst('ID'),
        Field::inst('year'),
        Field::inst('section')
    )
    ->debug(true)
    ->process($_POST)
    ->json();
