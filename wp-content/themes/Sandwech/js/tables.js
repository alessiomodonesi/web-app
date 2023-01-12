var $ = jQuery;
var editor;

$(document).ready(function () {
    // fields dell'editor
    editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/product.php",
        table: "#product",
        fields: [{
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
            label: "Nutritional value:",
            name: "nutritional_value"
        },
        {
            label: "Active:",
            name: "active"
        }
        ]
    });

    // fields della tabella
    $('#product').DataTable({
        dom: "Bfrtip",
        ajax: "../EditorPHP/controllers/product.php",
        columns: [
            { data: "name" },
            { data: "price" },
            { data: "description" },
            { data: "quantity" }
        ],
        select: true,
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit", editor: editor },
            { extend: "remove", editor: editor }
        ]
    });
});