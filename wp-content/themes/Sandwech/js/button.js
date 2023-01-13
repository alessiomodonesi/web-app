$(window).on('load', function () {
    var btnRow = $(".dt-buttons");
    btnRow.addClass("btn-group");
    btnRow.addClass("flex-wrap");

    var btnCreate = $(".buttons-create");
    btnCreate.addClass("btn");
    btnCreate.addClass("btn-outline-primary");
    btnCreate.removeClass("dt-button");

    var btnCreate = $(".buttons-edit");
    btnCreate.addClass("btn");
    btnCreate.addClass("btn-outline-primary");
    btnCreate.removeClass("dt-button");

    var btnCreate = $(".buttons-remove");
    btnCreate.addClass("btn");
    btnCreate.addClass("btn-outline-primary");
    btnCreate.removeClass("dt-button");
});