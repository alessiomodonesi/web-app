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
            <h5 class="title text-center">Nessuna tabella disponibile</h5>
            <div class="row">
                <div class="col-12">
                    <table id="my-table" class="table table-striped" style="width:100%">
                        <thead>
                        </thead>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>

        <?php elseif (get_the_title() == "Product") : ?>
            <div class="row">
                <div class="col-12">
                    <table id="my-table" class="table table-striped" style="width:100%">
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
                        ajax: "../EditorPHP/controllers/test.php",
                        table: "#my-table",
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
                    var table = $('#my-table').DataTable({
                        dom: "Bfrtip",
                        ajax: "../EditorPHP/controllers/test.php",
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
            <h5 class="title text-center">Nessuna tabella disponibile</h5>
            <div class="row">
                <div class="col-12">
                    <table id="my-table" class="table table-striped" style="width:100%">
                        <thead>
                        </thead>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>

        <?php else : ?>
            <h5 class="title text-center">Nessuna tabella disponibile</h5>
            <div class="row">
                <div class="col-12">
                    <table id="my-table" class="table table-striped" style="width:100%">
                        <thead>
                        </thead>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>

        <?php endif ?>
    </div>

    <?php get_footer(); ?>