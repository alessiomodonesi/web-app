<?php

get_header();
$title = explode("-", get_the_title());
$num = count($title);

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">

        <?php if ($num == 0) : ?>
                <h2 class="title text-center"><?php echo get_the_title(); ?></h2>

            <?php else : ?>
                <h2 class="title text-center"><?php echo "$title[0] $title[1]"; ?></h2>

            <?php endif; ?>

            <hr />
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/<?php echo strtolower(get_the_title()) ?>.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/utility/button.js"></script>