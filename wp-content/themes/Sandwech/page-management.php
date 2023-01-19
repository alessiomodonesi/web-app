<?php get_header(); ?>

<div class="container-fluid front-page-content">
    <div class="row">
        <div class="col-12">
            <h2 class="title text-center"><?php echo get_the_title() ?></h2>
            <hr />
        </div>
    </div>

    <div class="row">
        <?php require("php/home-mng.php"); ?>
    </div>
</div>

<?php get_footer(); ?>