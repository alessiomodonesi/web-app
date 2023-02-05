var $ = jQuery;
$(window).on('load', function () {
    $('#panini').DataTable({
        ajax: "../EditorPHP/controllers/brioches.php",
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


