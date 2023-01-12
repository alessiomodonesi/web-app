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

// Build our Editor instance and process the data coming from _POST
Editor::inst($db, 'objects', 'ID')
	->fields(
		Field::inst('objects.first_name')
			->validator(
				Validate::notEmpty(
					ValidateOptions::inst()
						->message('A first name is required')
				)
			),
		Field::inst('objects.last_name')
			->validator(
				Validate::notEmpty(
					ValidateOptions::inst()
						->message('A last name is required')
				)
			),
		Field::inst('objects.position'),
		Field::inst('objects.email')
			->validator(
				Validate::email(
					ValidateOptions::inst()
						->message('Please enter an e-mail address')
				)
			),
		Field::inst('objects.office'),
		Field::inst('objects.extn'),
		Field::inst('objects.age')
			->validator(Validate::numeric())
			->setFormatter(Format::ifEmpty(null)),
		Field::inst('objects.salary')
			->validator(Validate::numeric())
			->setFormatter(Format::ifEmpty(null)),
		Field::inst('objects.start_date')
			->validator(Validate::dateFormat('Y-m-d'))
			->getFormatter(Format::dateSqlToFormat('Y-m-d'))
			->setFormatter(Format::dateFormatToSql('Y-m-d'))
	)
	->debug(true)
	->process($_POST)
	->json();
