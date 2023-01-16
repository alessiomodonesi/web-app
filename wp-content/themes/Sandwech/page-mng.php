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
                <li class=""><a class="table-list-name" href="http://localhost/sandwech/allergen">allergen</a></li>
                <li class=""><a class="table-list-name" href="http://localhost/sandwech/break">break</a></li>
                <li class=""><a class="table-list-name" href="http://localhost/sandwech/class">class</a></li>
                <li class=""><a class="table-list-name" href="http://localhost/sandwech/pickup">pickup</a></li>
                <li class=""><a class="table-list-name" href="http://localhost/sandwech/pickup_break">pickup_break</a></li>
                <li class=""><a class="table-list-name" href="http://localhost/sandwech/reset">reset</a></li>
                <li class=""><a class="table-list-name" href="http://localhost/sandwech/status">status</a></li>
                <li class=""><a class="table-list-name" href="http://localhost/sandwech/user">user</a></li>
                <li class=""><a class="table-list-name" href="http://localhost/sandwech/user-class">user_class</a>
                </li>
            </ul>
        </div>
        <div class="col-8"></div>
        <div class="col-2"></div>
    </div>
</div>

<?php get_footer(); ?>