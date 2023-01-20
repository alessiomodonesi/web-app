var $ = jQuery;

$(window).on('load', function () {
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
        }
        ]
    });
});


