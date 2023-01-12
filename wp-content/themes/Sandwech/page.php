<?php get_header(); ?>

<body>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <h1 class="title text-center"><?php echo get_the_title(); ?></h1>
                <hr />
            </div>
        </div>

        <?php if (get_the_title() == "User") : ?>
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

            <script type="text/javascript">
                var $ = jQuery;
                var rows = null;

                $(document).ready(function() {});

                $(window).on('load', function() {
                    // fields dell'editor
                    var editor = new $.fn.dataTable.Editor({
                        ajax: "../EditorPHP/controllers/user.php",
                        table: "#user",
                        fields: [{
                                label: "Name:",
                                name: "name"
                            },
                            {
                                label: "Surname:",
                                name: "surname"
                            },
                            {
                                label: "Email:",
                                name: "email"
                            },
                            {
                                label: "Password:",
                                name: "password"
                            },
                            {
                                label: "Active:",
                                name: "Active"
                            }
                        ]
                    });

                    // fields della tabella
                    var table = $('#user').DataTable({
                        dom: "Bfrtip",
                        ajax: "../EditorPHP/controllers/user.php",
                        columns: [{
                                data: "name"
                            },
                            {
                                data: "surname"
                            },
                            {
                                data: "email"
                            },
                            {
                                data: "password"
                            }
                        ],
                        select: true,
                        buttons: [{
                                extend: "create",
                                editor: editor
                            },
                            {
                                extend: "edit",
                                editor: editor
                            },
                            {
                                extend: "remove",
                                editor: editor
                            }
                        ]
                    });
                });
            </script>

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

            <script type="text/javascript">
                var $ = jQuery;
                var rows = null;

                $(document).ready(function() {});

                $(window).on('load', function() {
                    // fields dell'editor
                    var editor = new $.fn.dataTable.Editor({
                        ajax: "../EditorPHP/controllers/product.php",
                        table: "#product",
                        fields: [{
                                label: "Name:",
                                name: "name"
                            },
                            {
                                label: "Price:",
                                name: "price"
                            },
                            {
                                label: "Description:",
                                name: "description"
                            },
                            {
                                label: "Quantity:",
                                name: "quantity"
                            },
                            {
                                label: "Nutritional value:",
                                name: "nutritional_value"
                            },
                            {
                                label: "Active:",
                                name: "Active"
                            }
                        ]
                    });

                    // fields della tabella
                    var table = $('#product').DataTable({
                        dom: "Bfrtip",
                        ajax: "../EditorPHP/controllers/product.php",
                        columns: [{
                                data: "name"
                            },
                            {
                                data: "price"
                            },
                            {
                                data: "description"
                            },
                            {
                                data: "quantity"
                            }
                        ],
                        select: true,
                        buttons: [{
                                extend: "create",
                                editor: editor
                            },
                            {
                                extend: "edit",
                                editor: editor
                            },
                            {
                                extend: "remove",
                                editor: editor
                            }
                        ]
                    });
                });
            </script>

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

            <script type="text/javascript">
                var $ = jQuery;
                var rows = null;

                $(document).ready(function() {});

                $(window).on('load', function() {
                    // fields dell'editor
                    var editor = new $.fn.dataTable.Editor({
                        ajax: "../EditorPHP/controllers/ingredient.php",
                        table: "#ingredient",
                        fields: [{
                                label: "Name:",
                                name: "name"
                            },
                            {
                                label: "Description:",
                                name: "description"
                            },
                            {
                                label: "Price:",
                                name: "price"
                            },
                            {
                                label: "Extra:",
                                name: "extra"
                            },
                            {
                                label: "Quantity:",
                                name: "quantity"
                            }
                        ]
                    });

                    // fields della tabella
                    var table = $('#ingredient').DataTable({
                        dom: "Bfrtip",
                        ajax: "../EditorPHP/controllers/ingredient.php",
                        columns: [{
                                data: "name"
                            },
                            {
                                data: "description"
                            },
                            {
                                data: "price"
                            },
                            {
                                data: "extra"
                            },
                            {
                                data: "quantity"
                            }
                        ],
                        select: true,
                        buttons: [{
                                extend: "create",
                                editor: editor
                            },
                            {
                                extend: "edit",
                                editor: editor
                            },
                            {
                                extend: "remove",
                                editor: editor
                            }
                        ]
                    });
                });
            </script>

        <?php else : ?>
            <h5 class="title text-center">Nessuna tabella disponibile</h5>

        <?php endif ?>
    </div>

    <?php get_footer(); ?>