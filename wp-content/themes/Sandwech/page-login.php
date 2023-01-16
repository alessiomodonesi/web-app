<?php

get_header();
include_once dirname(__FILE__) . '/php/login.php';
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
            $loginErr = "Email o password errata";
    } else
        $err = "Campo richiesto";
}

?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 text-center">
                <form method="post">

                    <div class="mb-3 email">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="username@gmail.com">
                        <span class="error-msg"><?php echo $err ?></span>
                    </div>

                    <div class="mb-3 password">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="password">
                        <span class="error-msg"><?php echo $err ?></span>
                    </div>

                    <button type="submit" class="btn btn-outline-dark login">Login</button>
                    <span class="error-login"><?php echo $loginErr ?></span>

                </form>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>