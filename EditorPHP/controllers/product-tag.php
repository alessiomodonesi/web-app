<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'product_tag', 'product')
    ->fields(
        Field::inst('product_tag.product', 'product_ID'),
        Field::inst('product_tag.tag', 'tag_ID'),
        Field::inst('product.name', 'product'),
        Field::inst('tag.name', 'tag')
    )
    ->leftJoin('product', 'product.ID', '=', 'product_tag.product')
    ->leftJoin('tag', 'tag.ID', '=', 'product_tag.tag')
    ->debug(true)
    ->process($_POST)
    ->json();
