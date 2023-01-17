var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/reset.php",
        table: "#reset",
        fields: [
            {
                label: "ID:",
                name: "ID"
            },
            {
                label: "User:",
                name: "user"
            },
            {
                label: "Password:",
                name: "password"
            },
            {
                label: "Requested:",
                name: "requested"
            },
            {
                label: "Expires:",
                name: "expires"
            },
            {
                label: "Completed:",
                name: "completed"
            }
        ]
    });

    var table = $('#reset').DataTable({
        lengthChange: false,
        ajax: "../EditorPHP/controllers/reset.php",
        columns: [
            {
                data: "ID"
            },
            {
                data: "user"
            },
            {
                data: "password"
            },
            {
                data: "requested"
            },
            {
                data: "expires"
            },
            {
                data: "completed"
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

    new $.fn.dataTable.Buttons(table, [
        { extend: "create", editor: editor },
        { extend: "edit", editor: editor },
        { extend: "remove", editor: editor }
    ]);

    table.buttons().container()
        .appendTo($('.col-md-6:eq(0)', table.table().container()));
});


