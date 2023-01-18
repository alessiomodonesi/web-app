<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'reset', 'id')
    ->fields(
        Field::inst('id'),
        Field::inst('user'),
        Field::inst('password'),
        Field::inst('requested'),
        Field::inst('expires'),
        Field::inst('completed'),
    )
    ->debug(true)
    ->process($_POST)
    ->json();
