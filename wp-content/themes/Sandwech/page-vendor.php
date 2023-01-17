<?php get_header(); ?>

<div class="container-fluid front-page-content">
    <div class="row">
        <div class="col-12">
            <h1 class="title text-center"><?php echo get_the_title() ?></h1>
            <hr />
        </div>
    </div>

    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 text-center">
            <ul id="table-list">
                <a class="btn btn-outline-warning btn-list" href="http://localhost/sandwech/ingredient" role="button">ingredient</a>
                <a class="btn btn-outline-warning btn-list" href="http://localhost/sandwech/offer" role="button">offer</a>
                <a class="btn btn-outline-warning btn-list" href="http://localhost/sandwech/order" role="button">order</a>
                <a class="btn btn-outline-warning btn-list" href="http://localhost/sandwech/product" role="button">product</a>
                <a class="btn btn-outline-warning btn-list" href="http://localhost/sandwech/product-allergen" role="button">product_allergen</a>
                <a class="btn btn-outline-warning btn-list" href="http://localhost/sandwech/product-ingredient" role="button">product_ingredient</a>
                <a class="btn btn-outline-warning btn-list" href="http://localhost/sandwech/product-offer" role="button">product_offer</a>
                <a class="btn btn-outline-warning btn-list" href="http://localhost/sandwech/product-order" role="button">product_order</a>
                <a class="btn btn-outline-warning btn-list" href="http://localhost/sandwech/product-tag" role="button">product_tag</a>
                <a class="btn btn-outline-warning btn-list" href="http://localhost/sandwech/tag" role="button">tag</a>
            </ul>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php get_footer(); ?>