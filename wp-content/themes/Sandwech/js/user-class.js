var $ = jQuery;
$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/user-class.php",
        table: "#user-class",
        fields: [
            {
                label: "User ID:",
                name: "user_ID"
            },
            {
                label: "Class ID:",
                name: "class_ID"
            },
            {
                label: "Year:",
                name: "year"
            }
        ]
    });

    $('#user-class').DataTable({
        dom: "Bfrtip",
        lengthChange: false,
        ajax: "../EditorPHP/controllers/user-class.php",
        columns: [
            {
                data: null, render: function (data) {
                    return data.name + ' ' + data.surname;
                }
            },
            {
                data: null, render: function (data) {
                    return data.class + data.section;
                }
            },
            {
                data: "year"
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
