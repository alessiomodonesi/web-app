var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/order.php",
        table: "#order",
        fields: [
            {
                label: "User ID:",
                name: "user_ID"
            },
            {
                label: "Created:",
                name: "created"
            },
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

    var table = $('#order').DataTable({
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
            }
        ]
    });
});