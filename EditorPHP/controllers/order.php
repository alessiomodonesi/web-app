<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'order', 'ID')
    ->fields(
        Field::inst('order.ID', 'ID'),
        Field::inst('order.user', 'user_ID'),
        Field::inst('order.pickup', 'pickup_ID'),
        Field::inst('order.break', 'break_ID'),
        Field::inst('order.status', 'status_ID'),
        Field::inst('user.name', 'name'),
        Field::inst('user.surname', 'surname'),
        Field::inst('class.year', 'year'),
        Field::inst('class.section', 'section'),
        Field::inst('order.created', 'created'),
        Field::inst('pickup.name', 'pickup'),
        Field::inst('break.time', 'break'),
        Field::inst('status.description', 'status'),
        Field::inst('order.json', 'json'),
        Field::inst('product_order.quantity', 'quantity'),
        Field::inst('product.price', 'price')


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

$editor->db()
    ->query('select', 'product.price' * 'product_order.quantity')
    ->leftJoin('product_order', 'product_order.order', '=', 'order.ID')
    ->leftJoin('product', 'product.ID', '=', 'product_order.product')
    ->where('order.id', 'product_order.order')
    ->exec();
