<script>
    $(window).on('load', function() {
        $('#<?php echo strtolower(get_the_title()) ?> tbody').on('click', 'tr', function() {
            const id = $(this).attr("id").split("_");
            console.log("id: " + id[1]);
        });
    });
</script>

<div class="row">
    <div class="position-relative">
        <div class="btn-group position-absolute top-50 start-50 translate-middle" role="group">
            <a class="btn btn-outline-dark btn-cart" href="#" role="button"> - </a>
            <a class="btn btn-outline-dark btn-quantity" role="button"><?php echo $quantity; ?></a>
            <a class="btn btn-outline-dark btn-cart" href="#" role="button"> + </a>
            <a class="btn btn-outline-dark btn-cart" href="#" role="button">
                <img src="http://localhost/sandwech/wp-content/themes/Sandwech/assets/img/trash.png" alt="home" width="25" height="25" class="d-inline-block home-png">
            </a>
        </div>
    </div>
</div>