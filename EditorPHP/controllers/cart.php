<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'cart', 'user')
    ->fields(
        Field::inst('cart.user', 'user'),
        Field::inst('cart.product', 'product'),
        Field::inst('cart.quantity', 'quantity'),
        Field::inst('cart.price', 'price')
    )
    ->leftJoin('product', 'product.ID', '=', 'cart.product')
    ->debug(true)
    ->process($_POST)
    ->json();
