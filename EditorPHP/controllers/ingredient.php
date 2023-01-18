<?php

include("../lib/DataTables.php");

use
	DataTables\Editor,
	DataTables\Editor\Field;

Editor::inst($db, 'ingredient', 'ID')
	->fields(
		Field::inst('ID'),
		Field::inst('name'),
		Field::inst('description'),
		Field::inst('price'),
		Field::inst('extra'),
		Field::inst('quantity')
	)
	->debug(true)
	->process($_POST)
	->json();
