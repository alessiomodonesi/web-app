var $ = jQuery;

$(window).on('load', function () {
    // fields dell'editor
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/product-ingredient.php",
        table: "#product-ingredient",
        fields: [{
            label: "Product:",
            name: "product"
        },
        {
            label: "Ingredient:",
            name: "ingredient"
        }
        ]
    });

    // fields della tabella
    var table = $('#product-ingredient').DataTable({
        dom: "Bfrtip",
        ajax: "../EditorPHP/controllers/product-ingredient.php",
        columns: [{
            data: "product"
        },
        {
            data: "ingredient"
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
