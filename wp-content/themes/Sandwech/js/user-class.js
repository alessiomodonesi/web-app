var $ = jQuery;

$(window).on('load', function () {
    // fields dell'editor
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/user-class.php",
        table: "#user-class",
        fields: [{
            label: "User:",
            name: "user"
        },
        {
            label: "Class:",
            name: "class"
        },
        {
            label: "Year:",
            name: "year"
        }
        ]
    });

    // fields della tabella
    var table = $('#user-class').DataTable({
        dom: "Bfrtip",
        ajax: "../EditorPHP/controllers/user-class.php",
        columns: [{
            data: "user"
        },
        {
            data: "class"
        },
        {
            data: "year"
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
        .appendTo($('.col-md-6:eq(0)', table.table().container()));
});
