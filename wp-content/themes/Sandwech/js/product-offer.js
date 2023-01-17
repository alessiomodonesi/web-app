var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/product-offer.php",
        table: "#product-offer",
        fields: [
            {
                label: "Product:",
                name: "product"
            },
            {
                label: "Offer:",
                name: "offer"
            }
        ]
    });

    var table = $('#product-offer').DataTable({
        lengthChange: false,
        ajax: "../EditorPHP/controllers/product-offer.php",
        columns: [
            {
                data: "product"
            },
            {
                data: "offer"
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


