<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'reset', 'ID')
    ->fields(
        Field::inst('reset.ID', 'ID'),
        Field::inst('reset.user', 'user_ID'),
        Field::inst('user.name', 'name'),
        Field::inst('user.surname', 'surname'),
        Field::inst('reset.password', 'password'),
        Field::inst('reset.requested', 'requested'),
        Field::inst('reset.expires', 'expires'),
        Field::inst('reset.completed', 'completed')
    )
    ->leftJoin('user', 'user.ID', '=', 'reset.user')
    ->debug(true)
    ->process($_POST)
    ->json();
