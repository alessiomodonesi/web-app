var $ = jQuery;
$(window).on('load', function () {
    $('#piadine').DataTable({
        select: true,
        ajax: "../EditorPHP/controllers/piadine.php",
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


