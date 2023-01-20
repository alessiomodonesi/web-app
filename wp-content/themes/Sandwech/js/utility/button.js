$(window).on('load', function () {
    var btnRow = $(".dt-buttons");
    btnRow.addClass("btn-group");
    btnRow.addClass("flex-wrap");

    var btnCreate = $(".buttons-create");
    btnCreate.addClass("btn");
    btnCreate.addClass("btn-warning btn-table");
    btnCreate.removeClass("dt-button");

    var btnEdit = $(".buttons-edit");
    btnEdit.addClass("btn");
    btnEdit.addClass("btn-warning btn-table");
    btnEdit.removeClass("dt-button");

    var btnRemove = $(".buttons-remove");
    btnRemove.addClass("btn");
    btnRemove.addClass("btn-warning btn-table");
    btnRemove.removeClass("dt-button");

    var btnExport = $(".buttons-export");
    btnExport.addClass("btn");
    btnExport.addClass("btn-warning btn-table");
    btnExport.removeClass("dt-button buttons-collection");
});