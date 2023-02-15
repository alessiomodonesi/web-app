<?php

include_once dirname(__FILE__) . '/php/login/checkLogin.php';
include_once dirname(__FILE__) . '/php/navbar/search.php';
session_start();
$user = checkLogin();
remove_admin_bar();

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

<body <?php

        body_class();
        if (get_the_title() == "Home") :

        ?> id="body-login" <?php else : ?> id="body-logged" <?php endif; ?>>

    <?php
    if (get_the_title() == "Home")
        require("php/navbar/navbar-white.php");
    else
        require("php/navbar/navbar-black.php");
    ?>