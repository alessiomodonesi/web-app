<?php
get_header();
$user = checkLogin();

// utenti
$admin = "admin@gmail.com";
$vendite = "vendite@gmail.com";
$mng = "mng@gmail.com";
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sandwech</title>
    <!-- <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css"> -->
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
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
                <div class="card mx-auto">
                    <img src="http://localhost/sandwech/wp-content/themes/Sandwech/assets/img/logo.png" alt="logo" class="d-inline-block align-text-top logo">
                    <div class="container text-center">

                        <?php if ($user[0]->email == $admin) : ?>
                            <h4><b>Admin</b></h4>
                            <p>Email: <?php echo $user[0]->email; ?></p>
                            <p>Ruolo: Administrator</p>

                        <?php elseif ($user[0]->email == $mng) : ?>
                            <h4><b>Management</b></h4>
                            <p>Email: <?php echo $user[0]->email; ?></p>
                            <p>Ruolo: Accounts Management</p>

                        <?php elseif ($user[0]->email == $vendite) : ?>
                            <h4><b>Vendite</b></h4>
                            <p>Email: <?php echo $user[0]->email; ?></p>
                            <p>Ruolo: Gestore Vendite</p>

                        <?php else : ?>
                            <h4><b><?php echo $user[0]->name; ?> <?php echo $user[0]->surname; ?></b></h4>
                            <p>Email: <?php echo $user[0]->email; ?></p>
                            <p>Ruolo: User</p>

                        <?php endif ?>

                    </div>
                </div>

                <a class="btn btn-outline-dark logout-btn" href="http://localhost/sandwech/wp-content/themes/Sandwech/php/login/logout.php" role="button">Esci</a>
            </div>
            <div class="col-4">
            </div>
        </div>
    </div>

    <?php get_footer(); ?>