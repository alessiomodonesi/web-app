<?php get_header(); ?>

<div class="container-fluid front-page-content">
    <div class="row">
        <div class="col-12">
            <h1 class="title text-center"><?php echo get_the_title() ?></h1>
            <hr />
        </div>
    </div>

    <div class="row">
        <div class="col-2">
            <ul id="table-list">
                <li class=""><a class="table-list-name" href="http://localhost/sandwech/ingredient">ingredient</a>
                </li>
                <li class=""><a class="table-list-name" href="http://localhost/sandwech/offer">offer</a></li>
                <li class=""><a class="table-list-name" href="http://localhost/sandwech/order">order</a></li>
                <li class=""><a class="table-list-name" href="http://localhost/sandwech/product">product</a></li>
                <li class=""><a class="table-list-name" href="http://localhost/sandwech/product_allergen">product_allergen</a>
                </li>
                <li class=""><a class="table-list-name" href="http://localhost/sandwech/product-ingredient">product_ingredient</a></li>
                <li class=""><a class="table-list-name" href="http://localhost/sandwech/product-offer">product_offer</a>
                </li>
                <li class=""><a class="table-list-name" href="http://localhost/sandwech/product-order">product_order</a>
                </li>
                <li class=""><a class="table-list-name" href="http://localhost/sandwech/product-tag">product_tag</a></li>
                <li class=""><a class="table-list-name" href="http://localhost/sandwech/tag">tag</a></li>
                </li>
            </ul>
        </div>
        <div class="col-8"></div>
        <div class="col-2"></div>
    </div>
</div>

<?php get_footer(); ?>