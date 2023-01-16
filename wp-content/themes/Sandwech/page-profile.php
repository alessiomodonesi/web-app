<?php
get_header();
$user = checkLogin();
?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="title text-center">Ciao, <?php echo $user[0]->name; ?></h1>
                <hr />
            </div>
        </div>

        <div class="row" style="margin-top: 1vw;">
            <div class="col-4"></div>
            <div class="col-4 text-center">
                <p class="title text-center"><?php echo $user[0]->name; ?></p>
                <p class="title text-center"><?php echo $user[0]->surname; ?></p>
                <p class="title text-center"><?php echo $user[0]->email; ?></p>
                <a class="btn btn-outline-dark" href="http://localhost/sandwech/wp-content/themes/Sandwech/php/logout.php" role="button">Logout</a>
            </div>
            <div class=" col-4">
            </div>
        </div>
    </div>

    <?php get_footer(); ?>