<?php get_header(); ?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="title text-center"><?php echo get_the_title(); ?></h1>
                <hr />
            </div>
        </div>

        <div class="row">
            <div class="col-4"></div>

            <div class="col-4 text-center">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@sandwech.com</span>
                </div>

                <div class="mb-3">
                    <label for="basic-url" class="form-label">Your vanity URL</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon3">https://sandwech.com/users/</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                    <div class="form-text">Example help text goes outside the input group.</div>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                </div>

                <div class="input-group">
                    <span class="input-group-text">With textarea</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
            </div>

            <div class="col-4"></div>
        </div>
    </div>

    <?php get_footer(); ?>