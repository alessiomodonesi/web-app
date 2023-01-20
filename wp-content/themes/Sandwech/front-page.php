<?php
get_header();
$user = checkLogin();

// utenti
$admin = "admin@gmail.com";
$vendite = "vendite@gmail.com";
$mng = "mng@gmail.com";
?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="title text-center">Ciao, <?php echo $user[0]->surname; ?>!</h2>
                <hr />
            </div>
        </div>

        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 text-center login-form">
                <img src="http://localhost/sandwech/wp-content/themes/Sandwech/assets/img/logo.png" alt="logo" class="d-inline-block align-text-top logo">
                <ul class="list-group">
                    <li class="list-group-item">Name: <?php echo $user[0]->name; ?></li>
                    <li class="list-group-item">Surname: <?php echo $user[0]->surname; ?></li>
                    <li class="list-group-item">Email: <?php echo $user[0]->email; ?></li>
                    <?php if ($user[0]->email == $admin) : ?>
                        <li class="list-group-item">Role: admin</li>
                    <?php elseif ($user[0]->email == $mng) : ?>
                        <li class="list-group-item">Role: management</li>
                    <?php elseif ($user[0]->email == $vendite) : ?>
                        <li class="list-group-item">Role: vendite</li>
                    <? endif ?>
                </ul>
                <a class="btn btn-outline-dark logout-btn" href="http://localhost/sandwech/wp-content/themes/Sandwech/php/login/logout.php" role="button">Logout</a>
            </div>
            <div class="col-4">
            </div>
        </div>
    </div>

    <?php get_footer(); ?>