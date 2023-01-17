var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/product-allergen.php",
        table: "#product-allergen",
        fields: [
            {
                label: "Product:",
                name: "product"
            },
            {
                label: "Allergen:",
                name: "allergen"
            }
        ]
    });

    var table = $('#product-allergen').DataTable({
        lengthChange: false,
        ajax: "../EditorPHP/controllers/product-allergen.php",
        columns: [
            {
                data: "product"
            },
            {
                data: "allergen"
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

