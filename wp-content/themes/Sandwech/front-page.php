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
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Cognome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ruolo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $user[0]->name; ?></td>
                            <td><?php echo $user[0]->surname; ?></td>
                            <td><?php echo $user[0]->email; ?></td>
                            <?php if ($user[0]->email == $admin) : ?>
                                <td>Admin</td>
                            <?php elseif ($user[0]->email == $mng) : ?>
                                <td>Management</td>
                            <?php elseif ($user[0]->email == $vendite) : ?>
                                <td>Vendite</td>
                            <? endif ?>
                        </tr>
                    </tbody>
                </table>
                <a class="btn btn-outline-dark logout-btn" href="http://localhost/sandwech/wp-content/themes/Sandwech/php/login/logout.php" role="button">Logout</a>
            </div>
            <div class="col-4">
            </div>
        </div>
    </div>

    <?php get_footer(); ?>