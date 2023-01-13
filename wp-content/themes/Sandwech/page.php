<?php get_header(); ?>

<body>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <h1 class="title text-center"><?php echo get_the_title(); ?></h1>
                <hr />
            </div>
        </div>
        <?php if (get_the_title() == "Login") : ?>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4 text-center">
                    <form>
                        <div class="mb-3">
                            <label for="InputUsername" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="InputPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary" id="login">Login</button>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>

        <?php elseif (get_the_title() == "User") : ?>
            <div class="row">
                <div class="col-12">
                    <table id="user" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Email</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>

        <?php elseif (get_the_title() == "User-Class") : ?>
            <div class="row">
                <div class="col-12">
                    <table id="user-class" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Class</th>
                                <th>Year</th>
                            </tr>
                        </thead>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>

        <?php elseif (get_the_title() == "Class") : ?>
            <div class="row">
                <div class="col-12">
                    <table id="class" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Section</th>
                            </tr>
                        </thead>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>

        <?php elseif (get_the_title() == "Product") : ?>
            <div class="row">
                <div class="col-12">
                    <table id="product" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>

        <?php elseif (get_the_title() == "Product-Ingredient") : ?>
            <div class="row">
                <div class="col-12">
                    <table id="product-ingredient" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Ingredient</th>
                            </tr>
                        </thead>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>

        <?php elseif (get_the_title() == "Ingredient") : ?>
            <div class="row">
                <div class="col-12">
                    <table id="ingredient" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Extra</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>

        <?php else : ?>
            <h5 class="title text-center">Nessuna tabella disponibile</h5>

        <?php endif ?>
    </div>

    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/<?php echo strtolower(get_the_title()) ?>.js"></script>

    <?php get_footer(); ?>