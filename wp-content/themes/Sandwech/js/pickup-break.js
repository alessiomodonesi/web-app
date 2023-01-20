var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/pickup-break.php",
        table: "#pickup-break",
        fields: [
            {
                label: "Pickup ID:",
                name: "pickup_ID"
            },
            {
                label: "Break ID:",
                name: "break_ID"
            }
        ]
    });

    $('#pickup-break').DataTable({
        lengthChange: false,
        ajax: "../EditorPHP/controllers/pickup-break.php",
        columns: [
            {
                data: "pickup"
            },
            {
                data: "break"
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
});


