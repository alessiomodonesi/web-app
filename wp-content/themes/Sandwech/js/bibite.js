var $ = jQuery;
$(window).on('load', function () {
    $('#bibite').DataTable({
        select: true,
        ajax: "../EditorPHP/controllers/bibite.php",
        columns: [
            {
                data: "name"
            },
            {
                data: "description"
            },
            {
                data: "price"
            }
        ]
    });
});


