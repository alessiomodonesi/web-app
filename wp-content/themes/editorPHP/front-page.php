<?php get_header(); ?>

<body>
    <h1>Sandwech</h1>

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

    <!-- <script type="text/javascript" src="<?php //echo get_template_directory_uri(); 
                                                ?>/js/tables.js"></script> -->

    <script type="text/javascript">
        var $ = jQuery;
        var rows = null;

        $(document).ready(function() {});

        $(window).on('load', function() {
            /*
            var jqxhr = $.get("Editor/controllers/prova.php", function(data) {
                    //alert("success");
                    rows = JSON.parse(data);
                    console.log(rows["data"]);
                })
                .done(function() {
                    //alert("second success");
                })
                .fail(function() {
                    alert("error");
                })
            */

            var editor = new $.fn.dataTable.Editor({
                ajax: "Editor/controllers/prova.php",
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
                ajax: "Editor/controllers/prova.php",
                columns: [
                    /*{
                        data: null,
                        render: function(data, type, row) {
                            // Combine the first and last names into a single table field
                            return data.first_name + ' ' + data.last_name;
                        }
                    },
                    */
                    {
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
            });

            // Display the buttons
            new $.fn.dataTable.Buttons(table, [{
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
            ]);
            table.buttons().container()
                .appendTo($('.col-md-6:eq(0)', table.table().container()));
        });
    </script>

    <?php get_footer(); ?>