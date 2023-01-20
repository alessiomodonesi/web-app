var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/product-allergen.php",
        table: "#product-allergen",
        fields: [
            {
                label: "Product ID:",
                name: "product_ID"
            },
            {
                label: "Allergen ID:",
                name: "allergen_ID"
            }
        ]
    });

    $('#product-allergen').DataTable({
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
});


