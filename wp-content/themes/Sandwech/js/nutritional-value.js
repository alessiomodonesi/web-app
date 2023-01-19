var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/nutritional-value.php",
        table: "#nutritional-value",
        fields: [
            {
                label: "Product ID:",
                name: "ID"
            },
            {
                label: "Kcal:",
                name: "kcal"
            },
            {
                label: "Grassi:",
                name: "fats"
            },
            {
                label: "Saturi:",
                name: "saturated_fats",
                def: "0"
            },
            {
                label: "Carboidrati:",
                name: "carbohydrates"
            },
            {
                label: "Zuccheri:",
                name: "sugars",
                def: "0"
            },
            {
                label: "Proteine:",
                name: "proteins"
            },
            {
                label: "Fibre:",
                name: "fiber",
                def: "0"
            },
            {
                label: "Sale:",
                name: "salt",
                def: "0"
            }
        ]
    });

    var table = $('#nutritional-value').DataTable({
        lengthChange: false,
        ajax: "../EditorPHP/controllers/nutritional-value.php",
        columns: [
            {
                data: "ID"
            },
            {
                data: "product"
            },
            {
                data: "kcal"
            },
            {
                data: "fats"
            },
            {
                data: "saturated_fats"
            },
            {
                data: "carbohydrates"
            },
            {
                data: "sugars"
            },
            {
                data: "proteins"
            },
            {
                data: "fiber"
            },
            {
                data: "salt"
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