var $ = jQuery;
$(window).on('load', function () {
    $('#panini').DataTable({
        select: true,
        ajax: "../EditorPHP/controllers/panini.php",
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