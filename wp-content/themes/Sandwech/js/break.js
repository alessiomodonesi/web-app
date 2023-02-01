var $ = jQuery;
$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/break.php",
        table: "#break",
        fields: [
            {
                label: "Time:",
                name: "time"
            }
        ]
    });

    $('#break').DataTable({
        dom: "Bfrtip",
        lengthChange: false,
        ajax: "../EditorPHP/controllers/break.php",
        columns: [
            {
                data: "ID"
            },
            {
                data: "time"
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


