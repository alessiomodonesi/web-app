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

    // export button
    var btnExport = $(".buttons-collection");
    btnExport.addClass("btn");
    btnExport.addClass("btn-outline-dark btn-export");
    btnExport.removeClass("dt-button");

    var btnExport = $(".dt-down-arrow");
    btnExport.addClass("arrow");

    // export dropdown
    var btnCopy = $(".buttons-copy");
    btnCopy.addClass("btn");
    btnCopy.addClass("btn-outline-dark btn-copy");
    btnCopy.removeClass("dt-button");

    var btnExcel = $(".buttons-excel");
    btnExcel.addClass("btn");
    btnExcel.addClass("btn-outline-dark btn-excel");
    btnExcel.removeClass("dt-button");

    var btnCsv = $(".buttons-csv");
    btnCsv.addClass("btn");
    btnCsv.addClass("btn-outline-dark btn-csv");
    btnCsv.removeClass("dt-button");

    var btnPdf = $(".buttons-pdf");
    btnPdf.addClass("btn");
    btnPdf.addClass("btn-outline-dark btn-pdf");
    btnPdf.removeClass("dt-button");

    var btnPrint = $(".buttons-print");
    btnPrint.addClass("btn");
    btnPrint.addClass("btn-outline-dark btn-print");
    btnPrint.removeClass("dt-button");
});