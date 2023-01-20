var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/product-tag.php",
        table: "#product-tag",
        fields: [
            {
                label: "Product ID:",
                name: "product_ID"
            },
            {
                label: "Tag ID:",
                name: "tag_ID"
            }
        ]
    });

    var table = $('#product-tag').DataTable({
        lengthChange: false,
        ajax: "../EditorPHP/controllers/product-tag.php",
        columns: [
            {
                data: "product"
            },
            {
                data: "tag"
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


