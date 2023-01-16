var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/ingredient.php",
        table: "#ingredient",
        fields: [
            {
                label: "ID:",
                name: "id"
            },
            {
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

    var table = $('#ingredient').DataTable({
        lengthChange: false,
        ajax: "../EditorPHP/controllers/ingredient.php",
        columns: [
            {
                data: "id"
            },
            {
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