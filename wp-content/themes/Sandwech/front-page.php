<?php
get_header();
$user = checkLogin();

// utenti
$admin = "admin@gmail.com";
$vendite = "vendite@gmail.com";
$mng = "mng@gmail.com";
?>

<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-sm-10 col-md-8 col-lg-6 col-xl-4 text-center info-form">
            <div class="card mx-auto" style="border-radius: 30px 50px;">
                <img src="http://localhost/sandwech/wp-content/themes/Sandwech/assets/img/logo.png" alt="logo" class="d-inline-block align-text-top logo">
                <div class="container text-center">

                    <?php if ($user[0]->email == $admin) : ?>
                        <h4><b>Admin</b></h4>
                        <p>Email: <?php echo $user[0]->email; ?></p>
                        <p>Ruolo: Amministratore</p>

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
                        <p>Ruolo: Utente</p>

                    <?php endif ?>
                    <a class="btn btn-outline-dark logout-btn" href="http://localhost/sandwech/wp-content/themes/Sandwech/php/login/logout.php" role="button">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>