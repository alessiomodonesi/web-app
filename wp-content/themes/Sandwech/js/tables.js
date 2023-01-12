var $ = jQuery;
var editor;

$(document).ready(function () {
    // fields dell'editor
    editor = new $.fn.dataTable.Editor({
        ajax: "../../../EditorPHP/controllers/staff.php",
        table: "#my-table",
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
    $('#my-table').DataTable({
        dom: "Bfrtip",
        ajax: "../../../EditorPHP/controllers/staff.php",
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