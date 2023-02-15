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
        Field::inst('product.name', 'name'),
        Field::inst('cart.product as price')->set(false)
            ->getFormatter(function ($value) use ($db) {
                $stmt = ('select sum(p.price * c.quantity) as price
            from `cart` c 
            left join product p on p.id = c.product
            left join `user` u on u.id = c.`user` 
            where c.user = :id');
                $result = $db->raw()
                    ->bind(':id', $value)
                    ->exec($stmt);
                $row = $result->fetch(PDO::FETCH_ASSOC);
                if ((bool)$row) {
                    return $row["price"];
                }
                return 0;
            })
    )
    ->leftJoin('product', 'product.ID', '=', 'cart.product')
    ->leftJoin('user', 'user.ID', '=', 'cart.user')
    // ->where('cart.user', $user[0]->id)
    ->debug(true)
    ->process($_POST)
    ->json();
