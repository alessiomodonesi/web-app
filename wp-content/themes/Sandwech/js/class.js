var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/class.php",
        table: "#class",
        fields: [
            {
                label: "Year:",
                name: "year"
            },
            {
                label: "Section:",
                name: "section"
            }
        ]
    });

    var table = $('#class').DataTable({
        lengthChange: false,
        ajax: "../EditorPHP/controllers/class.php",
        columns: [
            {
                data: "ID"
            },
            {
                data: "year"
            },
            {
                data: "section"
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

    new $.fn.dataTable.Buttons(table, [
        { extend: "create", editor: editor },
        { extend: "edit", editor: editor },
        { extend: "remove", editor: editor }
    ]);

    table.buttons().container()
        .appendTo($('.col-md-6:eq(0)', table.table().container()));
});
