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
                <img src="http://localhost/sandwech/wp-content/themes/Sandwech/assets/img/logo.png" alt="logo" width="120" height="100" class="d-inline-block align-text-top logo">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $user[0]->name; ?></td>
                            <td><?php echo $user[0]->surname; ?></td>
                            <td><?php echo $user[0]->email; ?></td>
                        </tr>
                    </tbody>
                </table>
                <a class="btn btn-warning logout" href="http://localhost/sandwech/wp-content/themes/Sandwech/php/login/logout.php" role="button">Logout</a>
            </div>
            <div class=" col-4">
            </div>
        </div>
    </div>

    <?php get_footer(); ?>