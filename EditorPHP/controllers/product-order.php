<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'product_order', 'product', 'order')
    ->fields(
        Field::inst('product_order.product', 'product_ID'),
        Field::inst('product_order.order', 'order_ID'),
        Field::inst('product_order.quantity', 'quantity'),
        Field::inst('product.name', 'product')
    )
    ->leftJoin('product', 'product.ID', '=', 'product_order.product')
    ->leftJoin('order', 'order.ID', '=', 'product_order.order')
    ->debug(true)
    ->process($_POST)
    ->json();
