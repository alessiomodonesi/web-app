$(window).on('load', function () {
    // var btnRow = $(".dt-buttons");
    // btnRow.addClass("btn-group");
    // btnRow.addClass("flex-wrap");

    var btnCreate = $(".buttons-create");
    btnCreate.addClass("btn");
    btnCreate.addClass("btn-outline-dark btn-create");
    btnCreate.removeClass("dt-button");

    var btnEdit = $(".buttons-edit");
    btnEdit.addClass("btn");
    btnEdit.addClass("btn-outline-dark btn-edit");
    btnEdit.removeClass("dt-button");

    var btnRemove = $(".buttons-remove");
    btnRemove.addClass("btn");
    btnRemove.addClass("btn-outline-dark btn-remove");
    btnRemove.removeClass("dt-button");

    // export btn
    var btnExportCsv = $(".dt-button");
    btnExportCsv.addClass("btn");
    btnExportCsv.addClass("btn-outline-dark btn-export");
    btnExportCsv.removeClass("dt-button");
});