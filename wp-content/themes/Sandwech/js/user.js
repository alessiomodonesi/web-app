var $ = jQuery;

function selectColumns(editor, csv, header) {
    var selectEditor = new $.fn.dataTable.Editor();
    var fields = editor.order();

    for (var i = 0; i < fields.length; i++) {
        var field = editor.field(fields[i]);

        selectEditor.add({
            label: field.label(),
            name: field.name(),
            type: 'select',
            options: header,
            def: header[i]
        });
    }

    selectEditor.create({
        title: 'Map CSV fields',
        buttons: 'Import ' + csv.length + ' records',
        message: 'Select the CSV column you want to use the data from for each field.',
        onComplete: 'none'
    });

    selectEditor.on('submitComplete', function (e, json, data, action) {
        editor.create(csv.length, {
            title: 'Confirm import',
            buttons: 'Submit',
            message: 'Click the <i>Submit</i> button to confirm the import of ' + csv.length + ' rows of data. Optionally, override the value for a field to set a common value by clicking on the field below.'
        });

        for (var i = 0; i < fields.length; i++) {
            var field = editor.field(fields[i]);
            var mapped = data[field.name()];

            for (var j = 0; j < csv.length; j++) {
                field.multiSet(j, csv[j][mapped]);
            }
        }
    });
}

$(window).on("load", function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/user.php",
        table: "#user",
        fields: [
            {
                label: "Name:",
                name: "name"
            },
            {
                label: "Surname:",
                name: "surname"
            },
            {
                label: "Email:",
                name: "email"
            },
            {
                label: "Password:",
                name: "password"
            },
            {
                label: "Active:",
                name: "active",
                def: "1"
            }
        ]
    });

    var uploadEditor = new $.fn.dataTable.Editor({
        fields: [{
            label: 'CSV file:',
            name: 'csv',
            type: 'upload',
            ajax: function (files, done) {
                Papa.parse(files[0], {
                    header: true,
                    skipEmptyLines: true,
                    complete: function (results) {
                        if (results.errors.length) {
                            console.log(results);
                            uploadEditor.field('csv').error('CSV parsing error: ' + results.errors[0].message);
                        }
                        else {
                            selectColumns(editor, results.data, results.meta.fields);
                        }
                        done([0]);
                    }
                });
            }
        }]
    });

    $("#user").DataTable({
        dom: "Bfrtip",
        lengthChange: false,
        ajax: "../EditorPHP/controllers/user.php",
        columns: [
            {
                data: "ID"
            },
            {
                data: null, render: function (data) {
                    return data.name + " " + data.surname;
                }
            },
            {
                data: null, render: function (data) {
                    return data.year + data.section;
                }
            },
            {
                data: "email"
            }
        ],
        select: true,
        buttons: [{
            extend: "create",
            editor: editor
        },
        {
            extend: "edit",
            editor: editor
        },
        {
            extend: "remove",
            editor: editor
        },
        {
            extend: 'csv',
            text: 'Export CSV',
            className: 'btn-space',
            exportOptions: {
                orthogonal: null
            }
        },
        // {
        //     text: 'Import CSV',
        //     action: function () {
        //         uploadEditor.create({
        //             title: 'CSV file import'
        //         });
        //     }
        // },
        {
            extend: 'selectAll',
            className: 'btn-space'
        },
            'selectNone',
        ]
    });
});