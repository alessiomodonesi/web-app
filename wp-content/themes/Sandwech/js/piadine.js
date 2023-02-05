var $ = jQuery;
$(window).on('load', function () {
    $('#panini').DataTable({
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
        ],
    });
});


