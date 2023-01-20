var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/ingredient.php",
        table: "#ingredient",
        fields: [
            {
                label: "Name:",
                name: "name"
            },
            {
                label: "Description:",
                name: "description"
            },
            {
                label: "Price:",
                name: "price",
                def: "0"
            },
            {
                label: "Extra:",
                name: "extra",
                def: "0"
            },
            {
                label: "Quantity:",
                name: "quantity"
            }
        ]
    });

    var table = $('#ingredient').DataTable({
        lengthChange: false,
        ajax: "../EditorPHP/controllers/ingredient.php",
        columns: [
            {
                data: "ID"
            },
            {
                data: "name"
            },
            {
                data: "description"
            },
            {
                data: "price"
            },
            {
                data: "extra"
            },
            {
                data: "quantity"
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