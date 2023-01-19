<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'pickup_break', 'pickup')
    ->fields(
        Field::inst('pickup_break.pickup', 'pickup_ID'),
        Field::inst('pickup_break.break', 'break_ID'),
        Field::inst('pickup.name', 'pickup'),
        Field::inst('break.time', 'break')
    )
    ->leftJoin('pickup', 'pickup.ID', '=', 'pickup_break.pickup')
    ->leftJoin('break', 'break.ID', '=', 'pickup_break.break')
    ->debug(true)
    ->process($_POST)
    ->json();
