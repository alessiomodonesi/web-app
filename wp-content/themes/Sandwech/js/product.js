var $ = jQuery;
$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/product.php",
        table: "#product",
        fields: [
            {
                label: "Name:",
                name: "name"
            },
            {
                label: "Price:",
                name: "price"
            },
            {
                label: "Description:",
                name: "description"
            },
            {
                label: "Quantity:",
                name: "quantity"
            },
            {
                label: "Nutritional ID:",
                name: "nutritional_value"
            },
            {
                label: "Active:",
                name: "active",
                def: "1"
            }
        ]
    });

    $('#product').DataTable({
        dom: "Bfrtip",
        lengthChange: false,
        ajax: "../EditorPHP/controllers/product.php",
        columns: [
            {
                data: "ID"
            },
            {
                data: "name"
            },
            {
                data: "price"
            },
            {
                data: "description"
            },
            {
                data: "quantity"
            },
            {
                data: "active"
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