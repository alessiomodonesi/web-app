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
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Office</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Office</th>
                            <th>Salary</th>
                        </tr>
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
            var editor = new $.fn.dataTable.Editor({
                ajax: "EditorPHP/controllers/test.php",
                table: "#example",
                fields: [{
                        label: "First name:",
                        name: "first_name"
                    },
                    {
                        label: "Last name:",
                        name: "last_name"
                    },
                    {
                        label: "Email:",
                        name: "email"
                    },
                    {
                        label: "Office:",
                        name: "office"
                    },
                    {
                        label: "Salary:",
                        name: "salary"
                    }
                ]
            });

            var table = $('#example').DataTable({
                dom: "Bfrtip",
                ajax: "EditorPHP/controllers/test.php",
                columns: [{
                        data: "first_name"
                    },
                    {
                        data: "last_name"
                    },
                    {
                        data: "email"
                    },
                    {
                        data: "office"
                    },
                    {
                        data: "salary"
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
                .appendTo('#example_wrapper .col-md-6:eq(0)');
        });
    </script>

    <?php get_footer(); ?>