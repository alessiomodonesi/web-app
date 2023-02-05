var $ = jQuery;
$(window).on('load', function () {
    $('#panini').DataTable({
        ajax: "../EditorPHP/controllers/cart.php",
        columns: [
            {
                data: "product"
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


