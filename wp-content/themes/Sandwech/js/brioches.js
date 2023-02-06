var $ = jQuery;
$(window).on('load', function () {
    $('#brioches').DataTable({
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


