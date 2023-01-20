var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/product-ingredient.php",
        table: "#product-ingredient",
        fields: [
            {
                label: "Product ID:",
                name: "product_ID"
            },
            {
                label: "Ingredient ID:",
                name: "ingredient_ID"
            }
        ]
    });

    $('#product-ingredient').DataTable({
        lengthChange: false,
        ajax: "../EditorPHP/controllers/product-ingredient.php",
        columns: [
            {
                data: "product"
            },
            {
                data: "ingredient"
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
});
