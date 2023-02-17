var $ = jQuery;
$(window).on('load', function () {
    $('#brioches').DataTable({
        select: true,
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
        ]
    });
});


