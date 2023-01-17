<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="title text-center"><?php echo get_the_title(); ?></h1>
            <hr />
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/<?php echo strtolower(get_the_title()) ?>.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/button.js"></script>