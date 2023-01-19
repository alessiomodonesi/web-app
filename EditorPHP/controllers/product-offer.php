<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'product_offer', 'product')
    ->fields(
        Field::inst('product_offer.product', 'product_ID'),
        Field::inst('product.name', 'product'),

        Field::inst('product_offer.offer', 'offer_ID'),
        Field::inst('offer.price', 'price'),
        Field::inst('offer.description', 'description')
    )
    ->leftJoin('product', 'product.ID', '=', 'product_offer.product')
    ->leftJoin('offer', 'offer.ID', '=', 'product_offer.offer')
    ->debug(true)
    ->process($_POST)
    ->json();
