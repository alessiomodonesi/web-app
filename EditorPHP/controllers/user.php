<?php

include("../lib/DataTables.php");

use
	DataTables\Editor,
	DataTables\Editor\Field;

Editor::inst($db, 'user', 'ID')
	->fields(
		Field::inst('user.ID', 'ID'),

		Field::inst('user.name', 'name'),
		Field::inst('user.surname', 'surname'),

		Field::inst('class.year', 'year'),
		Field::inst('class.section', 'section'),

		Field::inst('user.email', 'email'),
		Field::inst('user.password', 'password'),

		Field::inst('user.active', 'active')
	)
	->leftJoin('user_class', 'user_class.user', '=', 'user.ID')
	->leftJoin('class', 'user_class.class', '=', 'class.ID')
	->debug(true)
	->process($_POST)
	->json();
