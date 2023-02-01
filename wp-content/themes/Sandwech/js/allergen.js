var $ = jQuery;
$(window).on("load", function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/allergen.php",
        table: "#allergen",
        fields: [
            {
                label: "Name:",
                name: "name"
            }
        ]
    });

    $('#allergen').DataTable({
        dom: "Bfrtip",
        lengthChange: false,
        ajax: "../EditorPHP/controllers/allergen.php",
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


