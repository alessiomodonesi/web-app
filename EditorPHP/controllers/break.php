<?php

include("../lib/DataTables.php");

use
    DataTables\Editor,
    DataTables\Editor\Field;
// 	DataTables\Editor\Format,
// 	DataTables\Editor\Mjoin,
// 	DataTables\Editor\Options,
// 	DataTables\Editor\Upload,
// 	DataTables\Editor\Validate,
// 	DataTables\Editor\ValidateOptions;
// 	use DeliciousBrains\WPMDB\Container\Dotenv\Validator;
// 	use Illuminate\Support\Str;

Editor::inst($db, 'break', 'ID')
    ->fields(
        Field::inst('ID'),
        Field::inst('time')
    )
    ->debug(true)
    ->process($_POST)
    ->json();
