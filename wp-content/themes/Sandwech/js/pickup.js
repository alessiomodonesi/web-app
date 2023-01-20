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

    var table = $('#pickup').DataTable({
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
        }
        ]
    });

    table.buttons().container()
        .appendTo($('.col-md-6:eq(0)', table.table().container()));
});


