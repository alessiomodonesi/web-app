$(window).on('load', function () {
    var btnRow = $(".dt-buttons");
    btnRow.addClass("btn-group");
    btnRow.addClass("flex-wrap");

    var btnCreate = $(".buttons-create");
    btnCreate.addClass("btn");
    btnCreate.addClass("btn-warning btn-create");
    btnCreate.removeClass("dt-button");

    var btnEdit = $(".buttons-edit");
    btnEdit.addClass("btn");
    btnEdit.addClass("btn-warning btn-edit");
    btnEdit.removeClass("dt-button");

    var btnRemove = $(".buttons-remove");
    btnRemove.addClass("btn");
    btnRemove.addClass("btn-warning btn-remove");
    btnRemove.removeClass("dt-button");

    // export button
    // buttons-collection btn btn-warning btn-table
    var btnExport = $(".buttons-collection");
    btnExport.addClass("btn");
    btnExport.addClass("btn-warning btn-export");
    btnExport.removeClass("dt-button");

    // export dropdown
    var btnCopy = $(".buttons-copy.buttons-html5");
    btnCopy.addClass("btn");
    btnCopy.addClass("btn-warning btn-dropdown");
    btnCopy.removeClass("dt-button");

    var btnExcel = $(".buttons-excel.buttons-html5");
    btnExcel.addClass("btn");
    btnExcel.addClass("btn-warning btn-dropdown");
    btnExcel.removeClass("dt-button");

    var btnCsv = $(".buttons-csv.buttons-html5");
    btnCsv.addClass("btn");
    btnCsv.addClass("btn-warning btn-dropdown");
    btnCsv.removeClass("dt-button");

    var btnPdf = $(".buttons-pdf.buttons-html5");
    btnPdf.addClass("btn");
    btnPdf.addClass("btn-warning btn-dropdown");
    btnPdf.removeClass("dt-button");

    var btnPrint = $(".buttons-print");
    btnPrint.addClass("btn");
    btnPrint.addClass("btn-warning btn-dropdown");
    btnPrint.removeClass("dt-button");
});