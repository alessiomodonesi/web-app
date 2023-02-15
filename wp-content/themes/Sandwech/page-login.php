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
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/default/jquery-3.6.0.min.js"></script>
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css">
    <?php wp_head(); ?>
</head>

<body id="body-1" <?php body_class(); ?>>
    <?php require("php/navbar/navbar-login.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
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
                    <div class="row utils">
                        <div class="col-6">
                            <input type="checkbox" class="form-check-input" id="show-btn" onclick="hidePasswd()">
                            <label class="form-check-label  text-white" id="show-passwd">Show Password</label>
                        </div>
                        <div class="col-6 text-white">
                            <a onclick="showModal()" id="help-btn" style="cursor: pointer;">Show Account</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-light login-btn">Login</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Account</h4>
                    <img src="http://localhost/sandwech/wp-content/themes/Sandwech/assets/img/logo.png" alt="logo" id="logoModal">
                </div>
                <div class="modal-body">
                    <h6>Amministratore</h6>
                    <p>admin@gmail.com - admin</p>
                    <hr />
                    <h6>Studente</h6>
                    <p>studente@gmail.com - studente</p>
                    <hr />
                    <h6>Management</h6>
                    <p>mng@gmail.com - mng</p>
                    <hr />
                    <h6>Reparto Vendite</h6>
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