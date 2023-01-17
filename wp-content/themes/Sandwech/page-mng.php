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
                <a class="btn btn-warning table-list-name" href="http://localhost/sandwech/allergen">allergen</a>
                <a class="btn btn-warning table-list-name" href="http://localhost/sandwech/break">break</a>
                <a class="btn btn-warning table-list-name" href="http://localhost/sandwech/class">class</a>
                <a class="btn btn-warning table-list-name" href="http://localhost/sandwech/pickup">pickup</a>
                <a class="btn btn-warning table-list-name" href="http://localhost/sandwech/pickup-break">pickup_break</a>
                <a class="btn btn-warning table-list-name" href="http://localhost/sandwech/reset">reset</a>
                <a class="btn btn-warning table-list-name" href="http://localhost/sandwech/status">status</a>
                <a class="btn btn-warning table-list-name" href="http://localhost/sandwech/user">user</a>
                <a class="btn btn-warning table-list-name" href="http://localhost/sandwech/user-class">user_class</a>
            </ul>
        </div>
        <div class="col-10"></div>
    </div>
</div>

<?php get_footer(); ?>