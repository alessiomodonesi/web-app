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

    var table = $('#product-order').DataTable({
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
            }
        ]
    });

    table.buttons().container()
        .appendTo($('.col-md-6:eq(0)', table.table().container()));
});