<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'order', 'id')
    ->fields(
        Field::inst('order.id', 'id'),
        Field::inst('user.name', 'name'),
        Field::inst('user.surname', 'surname'),
        Field::inst('class.year', 'year'),
        Field::inst('class.section', 'section'),
        Field::inst('order.created', 'created'),
        Field::inst('pickup.name', 'pickup'),
        Field::inst('break.time', 'break'),
        Field::inst('status.description', 'status'),

    )
    ->leftJoin('user', 'user.id', '=', 'order.user')
    ->leftJoin('user_class', 'user_class.user', '=', 'user.id')
    ->leftJoin('class', 'user_class.class', '=', 'class.id')
    ->leftJoin('pickup', 'pickup.id', '=', 'order.pickup')
    ->leftJoin('break', 'break.id', '=', 'order.break')
    ->leftJoin('status', 'status.id', '=', 'order.status')
    ->debug(true)
    ->process($_POST)
    ->json();
