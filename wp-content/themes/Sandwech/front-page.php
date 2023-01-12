<?php get_header(); ?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="title text-center">Home Page</h1>
                <hr />
            </div>
        </div>

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
        <hr />
    </div>


    <script type="text/javascript">
        var $ = jQuery;
        var rows = null;

        $(document).ready(function() {});

        $(window).on('load', function() {
            // fields dell'editor
            var editor = new $.fn.dataTable.Editor({
                ajax: "EditorPHP/controllers/test.php",
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
                ajax: "EditorPHP/controllers/test.php",
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
            table.buttons().container()
                .appendTo('#my-table_wrapper .col-md-6:eq(0)');
        });
    </script>

    <?php get_footer(); ?>