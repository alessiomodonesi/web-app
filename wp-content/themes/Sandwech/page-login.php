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
            $loginErr = "Email o Password errate";
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
                        <button class="btn btn-outline-dark search-btn" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="title text-center"><?php echo get_the_title(); ?></h2>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1 col-md-2 col-lg-3 col-xl-4"></div>
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-4 text-center login-form">
                <img src="http://localhost/sandwech/wp-content/themes/Sandwech/assets/img/logo.png" alt="logo" class="d-inline-block align-text-top logo">
                <form method="post">
                    <div class="form-floating mb-3 email">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3 password">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="show-btn" onclick="hidePasswd()">
                        <label class="form-check-label" id="show-passwd">Show Password</label>
                        <a onclick="showModal()" id="help-a">Ho bisogno di aiuto</a>
                    </div>
                    <button type="submit" class="btn btn-outline-dark login-btn">Login</button>
                </form>
            </div>
            <div class="col-sm-1 col-md-2 col-lg-3 col-xl-4"></div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Accessi</h4>
                    <img src="http://localhost/sandwech/wp-content/themes/Sandwech/assets/img/logo.png" alt="logo" id="logoModal">
                </div>
                <div class="modal-body">
                    <h6>Admin</h6>
                    <p>admin@gmail.com - admin</p>
                    <hr />
                    <h6>Management</h6>
                    <p>mng@gmail.com - mng</p>
                    <hr />
                    <h6>Vendite</h6>
                    <p>vendite@gmail.com - vendite</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" onclick="hideModal()">Chiudi</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        var $ = jQuery;

        function hidePasswd() {
            var x = document.getElementById("floatingPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function showModal() {
            $('#modal').modal('show');
        }

        function hideModal() {
            $('#modal').modal('toggle');
        }
    </script>

    <?php get_footer(); ?>