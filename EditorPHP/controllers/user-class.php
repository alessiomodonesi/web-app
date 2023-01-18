<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'user_class', 'user')
    ->fields(
        Field::inst('user'),
        Field::inst('class'),
        Field::inst('year')
    )
    ->debug(true)
    ->process($_POST)
    ->json();
