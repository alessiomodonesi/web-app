var $ = jQuery;
$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/product-offer.php",
        table: "#product-offer",
        fields: [
            {
                label: "Product ID:",
                name: "product_ID"
            },
            {
                label: "Offer ID:",
                name: "offer_ID"
            }
        ]
    });

    $('#product-offer').DataTable({
        dom: "Bfrtip",
        lengthChange: false,
        ajax: "../EditorPHP/controllers/product-offer.php",
        columns: [
            {
                data: "product"
            },
            {
                data: "price"
            },
            {
                data: "description"
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
            extend: 'csv',
            text: 'Export CSV',
            className: 'btn-space',
            exportOptions: {
                orthogonal: null
            }
        },
        {
            extend: 'selectAll',
            className: 'btn-space'
        },
            'selectNone',
        ]
    });
});


