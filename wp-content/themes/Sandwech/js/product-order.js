var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/product-order.php",
        table: "#product-order",
        fields: [{
            label: "Product:",
            name: "product"
        },
        {
            label: "Order:",
            name: "order"
        }
        ]
    });

    var table = $('#product-order').DataTable({
        //dom: "Bfrtip",
        lengthChange: false,
        ajax: "../EditorPHP/controllers/product-order.php",
        columns: [{
            data: "product"
        },
        {
            data: "order"
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