<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;

Editor::inst($db, 'pickup_break', 'pickup')
    ->fields(
        Field::inst('pickup'),
        Field::inst('break')
    )
    ->debug(true)
    ->process($_POST)
    ->json();
