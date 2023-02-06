var $ = jQuery;
$(window).on('load', function () {
    $('#bibite').DataTable({
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
        ],
    });
});


