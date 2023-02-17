var $ = jQuery;
$(window).on('load', function () {
    $('#snack').DataTable({
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
            },
            {
                data: "ID"
            }
        ]
    });
});


