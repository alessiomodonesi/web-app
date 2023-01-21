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
        Field::inst('order.id as price')->set(false)
            ->getFormatter(function ($value, $data, $opts) use ($db) {
                $stmt = ('select sum(p.price * po.quantity) as price
            from `order` o 
            inner join product_order po on po.`order` = o.id 
            inner join product p on p.id = po.product
            inner join `user` u on u.id = o.`user` 
            where o.id = :id');
                $result = $db->raw()
                    ->bind(':id', $value)
                    ->exec($stmt);
                $row = $result->fetch(PDO::FETCH_ASSOC);
                if ( (bool)$row ) {
                    return $row["price"];
                }
                return 0;
         })


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

/*$editor->db()
    ->query('select', 'sum(product.price' * 'product_order.quantity)')
    ->from('order')
    ->leftJoin('product_order', 'product_order.order', '=', 'order.ID')
    ->leftJoin('product', 'product.ID', '=', 'product_order.product')
    ->exec();

/*Query da creare con datatables
select sum(p.price * po.quantity) as costo
from `order` o 
inner join product_order po on po.`order` = o.id 
inner join product p on p.id = po.product 
where 1=1
group by o.id;*/
