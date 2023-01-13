var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/product.php",
        table: "#product",
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
            name: "active"
        }
        ]
    });

    var table = $('#product').DataTable({
        //dom: "Bfrtip",
        lengthChange: false,
        ajax: "../EditorPHP/controllers/product.php",
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

    new $.fn.dataTable.Buttons(table, [
        { extend: "create", editor: editor },
        { extend: "edit", editor: editor },
        { extend: "remove", editor: editor }
    ]);

    table.buttons().container()
        .appendTo($('.col-md-6:eq(0)', table.table().container()));
});