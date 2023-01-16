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

Editor::inst($db, 'product', 'ID')
	->fields(
		Field::inst('name'),
		Field::inst('price'),
		Field::inst('description'),
		Field::inst('quantity'),
		Field::inst('nutritional_value'),
		Field::inst('active')
	)
	->debug(true)
	->process($_POST)
	->json();
