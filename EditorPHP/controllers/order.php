<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'order', 'ID')
    ->fields(
        Field::inst('order.ID', 'ID'),
        Field::inst('user.name', 'name'),
        Field::inst('user.surname', 'surname'),
        Field::inst('class.year', 'year'),
        Field::inst('class.section', 'section'),
        Field::inst('order.created', 'created'),
        Field::inst('pickup.name', 'pickup'),
        Field::inst('break.time', 'break'),
        Field::inst('status.description', 'status'),

    )
    ->leftJoin('user', 'user.ID', '=', 'order.user')
    ->leftJoin('user_class', 'user_class.user', '=', 'user.ID')
    ->leftJoin('class', 'user_class.class', '=', 'class.ID')
    ->leftJoin('pickup', 'pickup.ID', '=', 'order.pickup')
    ->leftJoin('break', 'break.ID', '=', 'order.break')
    ->leftJoin('status', 'status.ID', '=', 'order.status')
    ->debug(true)
    ->process($_POST)
    ->json();
