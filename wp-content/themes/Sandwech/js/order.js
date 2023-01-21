var $ = jQuery;
$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/order.php",
        table: "#order",
        fields: [
            {
                label: "Pickup ID:",
                name: "pickup_ID"
            },
            {
                label: "Break ID:",
                name: "break_ID"
            },
            {
                label: "Status ID:",
                name: "status_ID"
            }
        ]
    });

    $('#order').DataTable({
        dom: "Bfrtip",
        lengthChange: false,
        ajax: "../EditorPHP/controllers/order.php",
        columns:
            [
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
                    data: "price"
                },
                {
                    data: "created"
                },
                {
                    data: "pickup"
                },
                {
                    data: "break"
                },
                {
                    data: "status"
                }
            ],
        select: true,
        buttons: [
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