<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'user_class', 'user')
    ->fields(
        Field::inst('user_class.user', 'user_ID'),
        Field::inst('user_class.class', 'class_ID'),
        Field::inst('user.name', 'name'),
        Field::inst('user.surname', 'surname'),
        Field::inst('class.year', 'class'),
        Field::inst('class.section', 'section'),
        Field::inst('user_class.year', 'year')
    )
    ->leftJoin('user', 'user.ID', '=', 'user_class.user')
    ->leftJoin('class', 'class.ID', '=', 'user_class.class')
    ->debug(true)
    ->process($_POST)
    ->json();
