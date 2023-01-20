var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/offer.php",
        table: "#offer",
        fields: [
            {
                label: "Price:",
                name: "price"
            },
            {
                label: "Start:",
                name: "start"
            },
            {
                label: "Expiry:",
                name: "expiry"
            },
            {
                label: "Description:",
                name: "description"
            }
        ]
    });

    var table = $('#offer').DataTable({
        lengthChange: false,
        ajax: "../EditorPHP/controllers/offer.php",
        columns: [
            {
                data: "ID"
            },
            {
                data: "price"
            },
            {
                data: "start"
            },
            {
                data: "expiry"
            },
            {
                data: "description"
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


