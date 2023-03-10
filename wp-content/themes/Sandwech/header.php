<?php

include_once dirname(__FILE__) . '/php/login/checkLogin.php';
include_once dirname(__FILE__) . '/php/navbar/search.php';
global $id, $user, $admin, $studente, $vendite, $mng;

session_start();
$user = checkLogin();
$id = $user[0]->id;

// utenti
$admin = "admin@gmail.com";
$studente = "studente@gmail.com";
$vendite = "vendite@gmail.com";
$mng = "mng@gmail.com";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['search'] != null && $_POST['search'] != 'Search')
        search_page($_POST['search']);
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sandwech</title>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/default/jquery-3.6.0.min.js"></script>
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css">
    <?php wp_head(); ?>
</head>

<body <?php body_class();
        if (get_the_title() == "Home") : ?> id="body-1" <?php else : ?> id="body-2" <?php endif; ?>>

    <!-- Scelgo la navbar in base alla pagina -->
    <?php
    if (get_the_title() == "Home")
        require("php/navbar/navbar-white.php");
    else
        require("php/navbar/navbar-black.php");
    ?>