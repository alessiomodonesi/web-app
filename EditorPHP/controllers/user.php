<?php

include("../lib/DataTables.php");

use
	DataTables\Editor,
	DataTables\Editor\Field;

Editor::inst($db, 'user', 'id')
	->fields(
		Field::inst('id'),
		Field::inst('name'),
		Field::inst('surname'),
		Field::inst('email'),
		Field::inst('password'),
		Field::inst('active')
	)
	->debug(true)
	->process($_POST)
	->json();
