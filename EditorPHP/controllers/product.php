<?php

include("../lib/DataTables.php");

use
	DataTables\Editor,
	DataTables\Editor\Field;

Editor::inst($db, 'product', 'ID')
	->fields(
		Field::inst('ID'),
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
