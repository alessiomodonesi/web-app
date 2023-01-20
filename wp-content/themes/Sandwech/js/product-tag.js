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

    $('#product-tag').DataTable({
        dom: "Bfrtip",
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
        },
        {
            extend: "collection",
            text: "Export",
            buttons: [
                "copy",
                "excel",
                "csv",
                "pdf",
                "print"
            ]
        }
        ]
    });
});


