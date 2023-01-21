var $ = jQuery;
$(window).on("load", function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/tag.php",
        table: "#tag",
        fields: [
            {
                label: "Name:",
                name: "name"
            }
        ]
    });

    $('#tag').DataTable({
        dom: "Bfrtip",
        lengthChange: false,
        ajax: "../EditorPHP/controllers/tag.php",
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


