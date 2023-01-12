<?php

/*
 * Example PHP implementation used for the index.html example
 */

// DataTables PHP library
include("../lib/DataTables.php");

// Alias Editor classes so they are easy to use
use
DataTables\Editor,
DataTables\Editor\Field,
DataTables\Editor\Format,
DataTables\Editor\Mjoin,
DataTables\Editor\Options,
DataTables\Editor\Upload,
DataTables\Editor\Validate,
DataTables\Editor\ValidateOptions;
use DeliciousBrains\WPMDB\Container\Dotenv\Validator;
use Illuminate\Support\Str;

// Build our Editor instance and process the data coming from _POST

//$db->sql('set names utf8');
Editor::inst($db, 'objects', 'ID')
	->fields(
		Field::inst('first_name'),
		Field::inst('last_name'),
		Field::inst('position'),
		Field::inst('email'),
		Field::inst('office'),
		Field::inst('salary')
	)
	->debug(true)
	->process($_POST)
	->json();