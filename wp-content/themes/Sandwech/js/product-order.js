var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/product-order.php",
        table: "#product-order",
        fields: [
            {
                label: "Product ID:",
                name: "product_ID"
            },
            {
                label: "Order ID:",
                name: "order_ID"
            }
        ]
    });

    $('#product-order').DataTable({
        dom: "Bfrtip",
        lengthChange: false,
        ajax: "../EditorPHP/controllers/product-order.php",
        columns: [
            {
                data: "product"
            },
            {
                data: "order_ID"
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