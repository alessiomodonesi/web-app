<?php

session_start();

include_once dirname(__FILE__) . '/php/login.php';

$err = "";
$loginErr = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $data = [
            "email" => $_POST['email'],
            "password" => $_POST['password'],
        ];

        if (login($data) == -1) {
            $loginErr = "Email o password errata";
        }
    } else {
        $err = "Campo richiesto";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="login-container">
        <div class="screen-1">
            <img src="static/img/app_logo.png" id="logo">
            <g transform="matrix(1.01 0 0 1.01 362.9 210.9)">
                <circle style="stroke: rgb(0, 0, 0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1" cx="0" cy="0" r="40"></circle>
            </g>
            <g transform="matrix(0.92 0 0 0.92 318.5 286.5)">
                <circle style="stroke: rgb(0, 0, 0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1" cx="0" cy="0" r="40"></circle>
            </g>
            <g transform="matrix(0.16 -0.12 0.49 0.66 290.57 243.57)">
                <polygon style="stroke: rgb(0, 0, 0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1" points="-50,-50 -50,50 50,50 50,-50 "></polygon>
            </g>
            <g transform="matrix(0.16 0.1 -0.44 0.69 342.03 248.34)">
                <polygon style="stroke: rgb(0, 0, 0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1" vector-effect="non-scaling-stroke" points="-50,-50 -50,50 50,50 50,-50 "></polygon>
            </g>
            <form method="post">
                <div class="email">
                    <label for="email">Email Address</label>
                    <div class="sec-2">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" placeholder="Username@gmail.com" />
                    </div>
                    <span class="error-msg"><?php echo $err ?></span>
                </div><br>
                <div class="password">
                    <label for="password">Password</label>
                    <div class="sec-2">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input class="pas" type="password" name="password" placeholder="············" />
                        <ion-icon class="show-hide" name="eye-outline"></ion-icon>
                    </div>
                    <span class="error-msg"><?php echo $err ?></span>
                </div><br>
                <button class="login">Login</button>
                <span class="error-login"><?php echo $loginErr ?></span>
            </form>
            <div class="footer"><span>Sign up</span><span>Forgot Password?</span></div>
        </div>
    </div>
</body>

</html>