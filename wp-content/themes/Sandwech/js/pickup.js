var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/pickup.php",
        table: "#pickup",
        fields: [
            {
                label: "Name:",
                name: "name"
            }
        ]
    });

    $('#pickup').DataTable({
        dom: "Bfrtip",
        lengthChange: false,
        ajax: "../EditorPHP/controllers/pickup.php",
        columns: [
            {
                data: "ID"
            },
            {
                data: "name"
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


