var $ = jQuery;
$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/reset.php",
        table: "#reset",
        fields: [
            {
                label: "User ID:",
                name: "user_ID"
            },
            {
                label: "Password:",
                name: "password"
            },
            {
                label: "Requested:",
                name: "requested"
            },
            {
                label: "Expires:",
                name: "expires"
            },
            {
                label: "Completed:",
                name: "completed",
                def: "0"
            }
        ]
    });

    $('#reset').DataTable({
        dom: "Bfrtip",
        lengthChange: false,
        ajax: "../EditorPHP/controllers/reset.php",
        columns: [
            {
                data: "ID"
            },
            {
                data: null, render: function (data) {
                    return data.name + ' ' + data.surname;
                }
            },
            {
                data: "requested"
            },
            {
                data: "expires"
            },
            {
                data: "completed"
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


