<?php

function load_stylesheets()
{
	wp_enqueue_style('bootstrap', get_template_directory_uri() . "/css/default/bootstrap.min.css", array(), '5.2.3', 'all');
	wp_enqueue_style('datatables', get_template_directory_uri() . "/css/default/dataTables.bootstrap5.min.css", array(), '1.13.1', 'all');
	wp_enqueue_style('buttons', get_template_directory_uri() . "/css/default/buttons.bootstrap5.min.css", array(), '2.3.3', 'all');
	wp_enqueue_style('select', get_template_directory_uri() . "/css/default/select.bootstrap5.min.css", array(), '1.5.0', 'all');
	wp_enqueue_style('dateTime', get_template_directory_uri() . "/css/default/dataTables.dateTime.min.css", array(), '1.2.0', 'all');
	wp_enqueue_style('editor_bootstrap', "/EditorPHP/css/editor.bootstrap5.min.css", array(), '2.0.10', 'all');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_js()
{
	wp_enqueue_script('jQuery_dataTables', get_template_directory_uri() . "/js/default/jquery.dataTables.min.js", array(), '1.13.1', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . "/js/default/bootstrap.bundle.min.js", array(), '5.1.3', true);
	wp_enqueue_script('datatables', get_template_directory_uri() . "/js/default/dataTables.bootstrap5.min.js", array(), '1.13.1', true);
	wp_enqueue_script('buttons_dt', get_template_directory_uri() . "/js/default/dataTables.buttons.min.js", array(), '2.3.3', true);
	wp_enqueue_script('select', get_template_directory_uri() . "/js/default/dataTables.select.min.js", array(), '1.5.0', true);
	wp_enqueue_script('dateTime', get_template_directory_uri() . "/js/default/dataTables.dateTime.min.js", array(), '1.2.0', true);
	wp_enqueue_script('editor_data', "/EditorPHP/js/dataTables.editor.min.js", array(), '2.0.10', true);
	wp_enqueue_script('editor_bootstrap', "/EditorPHP/js/editor.bootstrap5.min.js", array(), '2.0.10', true);
}
add_action('wp_enqueue_scripts', 'load_js');
