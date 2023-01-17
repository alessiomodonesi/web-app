var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/order.php",
        table: "#order",
        fields: [
            {
                label: "User:",
                name: "user"
            },
            {
                label: "Created:",
                name: "created"
            },
            {
                label: "Pickup:",
                name: "pickup"
            },
            {
                label: "Break:",
                name: "break"
            },
            {
                label: "Status:",
                name: "status"
            },
            {
                label: "Json:",
                name: "json"
            }
        ]
    });

    var table = $('#order').DataTable({
        lengthChange: false,
        ajax: "../EditorPHP/controllers/order.php",
        columns:
            [
                {
                    data: "ID"
                },
                {
                    data: "user"
                },
                {
                    data: "created"
                },
                {
                    data: "pickup"
                },
                {
                    data: "break"
                },
                {
                    data: "status"
                },
                {
                    data: "json"
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