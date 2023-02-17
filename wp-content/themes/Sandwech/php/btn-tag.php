<?php include_once dirname(__FILE__) . '/product/getProduct.php'; ?>

<script type="text/javascript">
    $(window).on('load', function() {
        $('#<?php echo strtolower(get_the_title()) ?> tbody').on('click', 'tr', function() {
            var id = $(this).attr("id").split("_");

            $.ajax({
                url: "../wp-content/themes/Sandwech/php/product/getProduct.php",
                method: "POST",
                data: {
                    id: id[1]
                },
                success: function(response) {
                    console.log(response);
                }
            });
        });
    });
</script>

<?php $product = getProduct(); ?>

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