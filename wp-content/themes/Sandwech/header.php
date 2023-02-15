<?php

include_once dirname(__FILE__) . '/php/login/checkLogin.php';
include_once dirname(__FILE__) . '/php/search.php';
session_start();
$user = checkLogin();

// utenti
$admin = "admin@gmail.com";
$studente = "studente@gmail.com";
$vendite = "vendite@gmail.com";
$mng = "mng@gmail.com";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['search'] == null || $_POST['search'] == 'Search')
        echo "Please select a name";
    else
        search_page($_POST['search']);
}

// if ($user[0]->email == $admin || get_the_title() == 'Login') {
//     show_admin_bar(false);
// }

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

<body <?php body_class(); ?>>
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <img src="http://localhost/sandwech/wp-content/themes/Sandwech/assets/img/logo.png" alt="logo" width="50" height="35" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="http://localhost/sandwech">Home</a>
                        </li>
                        <?php if ($user[0]->email == $studente || $user[0]->email == $admin) : ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="http://localhost/sandwech/studente">Studente</a>
                            </li>
                        <?php endif ?>
                        <?php if ($user[0]->email == $mng || $user[0]->email == $admin) : ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="http://localhost/sandwech/management">Management</a>
                            </li>
                        <?php endif ?>
                        <?php if ($user[0]->email == $vendite || $user[0]->email == $admin) : ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="http://localhost/sandwech/vendite">Vendite</a>
                            </li>
                        <?php endif ?>
                    </ul>
                    <form class="d-flex" role="search" method='post'>
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id='search' name='search'>
                        <button class="btn btn-outline-dark search-btn" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>