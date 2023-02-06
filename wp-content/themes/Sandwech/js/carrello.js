var $ = jQuery;
$(window).on('load', function () {
    $('#carrello').DataTable({
        ajax: "../EditorPHP/controllers/cart.php",
        columns: [
            {
                data: "name"
            },
            {
                data: "quantity"
            },
            {
                data: "price"
            }
        ],
    });
});


