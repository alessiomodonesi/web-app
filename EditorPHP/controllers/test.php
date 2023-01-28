<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'user', 'ID')
    ->fields(
        Field::inst('ID'),
        Field::inst('name'),
        Field::inst('surname'),
        Field::inst('email'),
        Field::inst('password'),
        Field::inst('active')
    )
    ->debug(true)
    ->process($_POST)
    ->json();
