var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/break.php",
        table: "#break",
        fields: [
            {
                label: "Time:",
                name: "time"
            }
        ]
    });

    var table = $('#break').DataTable({
        lengthChange: false,
        ajax: "../EditorPHP/controllers/break.php",
        columns: [
            {
                data: "ID"
            },
            {
                data: "time"
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


