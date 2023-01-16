var $ = jQuery;

$(window).on('load', function () {
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
            name: "active"
        }
        ]
    });

    var table = $('#user').DataTable({
        //dom: "Bfrtip",
        lengthChange: false,
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

    new $.fn.dataTable.Buttons(table, [
        { extend: "create", editor: editor },
        { extend: "edit", editor: editor },
        { extend: "remove", editor: editor }
    ]);

    table.buttons().container()
        .appendTo($('.col-md-6:eq(0)', table.table().container()));
});


