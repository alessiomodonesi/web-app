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

    $('#class').DataTable({
        dom: "Bfrtip",
        lengthChange: false,
        ajax: "../EditorPHP/controllers/class.php",
        columns: [
            {
                data: "ID"
            },
            {
                data: null, render: function (data) {
                    return data.year + data.section;
                }
            },
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
