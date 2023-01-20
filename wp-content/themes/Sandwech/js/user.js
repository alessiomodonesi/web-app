var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/user.php",
        table: "#user",
        fields: [
            {
                label: "Name:",
                name: "name"
            },
            {
                label: "Surname:",
                name: "surname"
            },
            {
                label: "Email:",
                name: "email"
            },
            {
                label: "Password:",
                name: "password"
            },
            {
                label: "Active:",
                name: "active",
                def: "1"
            }
        ]
    });

    var table = $('#user').DataTable({
        dom: 'Bfrtip',
        lengthChange: false,
        ajax: "../EditorPHP/controllers/user.php",
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
                data: null, render: function (data) {
                    return data.year + data.section;
                }
            },
            {
                data: "email"
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
            extend: 'collection',
            text: 'Export',
            buttons: [
                'copy',
                'excel',
                'csv',
                'pdf',
                'print'
            ]
        }
        ]
    });

    table.buttons().container()
        .appendTo($('.col-md-6:eq(0)', table.table().container()));
});


