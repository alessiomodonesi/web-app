<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;
//     DataTables\Editor\Format,
//     DataTables\Editor\Mjoin,
//     DataTables\Editor\Options,
//     DataTables\Editor\Upload,
//     DataTables\Editor\Validate,
//     DataTables\Editor\ValidateOptions;
// use DeliciousBrains\WPMDB\Container\Dotenv\Validator;
// use Illuminate\Support\Str;

Editor::inst($db, 'user_class', 'user')
    ->fields(
        Field::inst('user'),
        Field::inst('class'),
        Field::inst('year')
    )
    ->debug(true)
    ->process($_POST)
    ->json();
