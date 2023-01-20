<?php
include_once dirname(__FILE__) . '/php/login/login.php';
session_start();
$err = "";
$loginErr = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $data = [
            "email" => $_POST['email'],
            "password" => $_POST['password'],
        ];

        if (login($data) == -1)
            $loginErr = "Credenziali errate";
    } else
        $err = "Campo richiesto";
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sandwech</title>
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
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
                            <a class="nav-link active">Home</a>
                        </li>
                        <li class=" nav-item">
                            <a class="nav-link active">Management</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active">Vendite</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="title text-center"><?php echo get_the_title() ?></h2>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 text-center login-form">
                <img src="http://localhost/sandwech/wp-content/themes/Sandwech/assets/img/logo.png" alt="logo" class="d-inline-block align-text-top logo">
                <form method="post">
                    <div class="mb-3 email">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control text-center" name="email" placeholder="username@gmail.com">
                        <span class="error-msg"><?php echo $err ?></span>
                    </div>

                    <div class="mb-3 password">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control text-center" name="password" placeholder="password" id="passwd">
                        <span class="error-msg"><?php echo $err ?></span>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input position-absolute" onclick="hide()">
                        <label class="form-check-label">Show Password</label>
                    </div>

                    <button type="submit" class="btn btn-outline-dark login-btn">Login</button>
                </form>
                <span class="error-login"><?php echo $loginErr ?></span>
            </div>
            <div class="col-4"></div>
        </div>
    </div>

    <script>
        function hide() {
            var x = document.getElementById("passwd");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <?php get_footer(); ?>