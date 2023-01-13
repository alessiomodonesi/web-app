var $ = jQuery;

$(window).on('load', function () {
    // fields dell'editor
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/class.php",
        table: "#class",
        fields: [{
            label: "Year:",
            name: "year"
        },
        {
            label: "Section:",
            name: "section"
        }
        ]
    });

    // fields della tabella
    var table = $('#class').DataTable({
        dom: "Bfrtip",
        ajax: "../EditorPHP/controllers/class.php",
        columns: [{
            data: "year"
        },
        {
            data: "section"
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
