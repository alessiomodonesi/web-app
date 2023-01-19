var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/user-class.php",
        table: "#user-class",
        fields: [
            {
                label: "User ID:",
                name: "user_ID"
            },
            {
                label: "Class ID:",
                name: "class_ID"
            },
            {
                label: "Year:",
                name: "year"
            }
        ]
    });

    var table = $('#user-class').DataTable({
        lengthChange: false,
        ajax: "../EditorPHP/controllers/user-class.php",
        columns: [
            {
                data: null, render: function (data) {
                    return data.name + ' ' + data.surname;
                }
            },
            {
                data: null, render: function (data) {
                    return data.class + data.section;
                }
            },
            {
                data: "year"
            }
        ],
        select: true,
        buttons: [
            {
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
