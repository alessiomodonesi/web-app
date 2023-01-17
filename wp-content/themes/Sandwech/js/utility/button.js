$(window).on('load', function () {
    var btnRow = $(".dt-buttons");
    btnRow.addClass("btn-group");
    btnRow.addClass("flex-wrap");

    var btnCreate = $(".buttons-create");
    btnCreate.addClass("btn");
    btnCreate.addClass("btn-warning");
    btnCreate.removeClass("dt-button");

    var btnEdit = $(".buttons-edit");
    btnEdit.addClass("btn");
    btnEdit.addClass("btn-warning");
    btnEdit.removeClass("dt-button");

    var btnRemove = $(".buttons-remove");
    btnRemove.addClass("btn");
    btnRemove.addClass("btn-warning");
    btnRemove.removeClass("dt-button");
});