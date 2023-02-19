<script type="text/javascript">
    async function getProduct(id) {
        const response = await fetch("http://localhost/food-api/API/product/getProduct.php?PRODUCT_ID=" + id)
            .then((response) => response.json())
            .then((data) => {
                console.log(data);
                return data;
            });
    }

    $(window).on('load', function() {
        $('#<?php echo strtolower(get_the_title()) ?> tbody').on('click', 'tr', function() {
            var id = $(this).attr("id").split("_");
            var product = getProduct(id[1]);
        });
    });
</script>

<div class="row">
    <div class="position-relative">
        <div class="btn-group position-absolute top-50 start-50 translate-middle" role="group">
            <a class="btn btn-outline-dark btn-cart" href="#" role="button"> - </a>
            <a class="btn btn-outline-dark btn-quantity" role="button"> 3 </a>
            <a class="btn btn-outline-dark btn-cart" href="#" role="button"> + </a>
            <a class="btn btn-outline-dark btn-cart" href="#" role="button">
                <img src="http://localhost/sandwech/wp-content/themes/Sandwech/assets/img/trash.png" alt="home" width="25" height="25" class="d-inline-block home-png">
            </a>
        </div>
    </div>
</div>