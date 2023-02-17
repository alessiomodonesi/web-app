var $ = jQuery;
$(window).on('load', function () {
    $('#snack').DataTable({
        select: true,
        ajax: "../EditorPHP/controllers/snack.php",
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


