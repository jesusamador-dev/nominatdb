var rowP;
$("#deleteEmpleado").on("click", function(ev) {
    ev.preventDefault();
    rowP = $("#deleteEmpleado").parents("tr");
    console.log(rowP.data("id"));
});

$("#deleteFormEmpleado").on("click", function(ev) {
    ev.preventDefault();
    var form = $("#formDeleteEmpleado");
    console.log(rowP.data("id"));
    var id = rowP.data("id");
    var url = form.attr("action").replace(":USER_ID", id);
    $.ajax({
        url: url,
        method: form.attr("method"),
        data: form.serialize(),
        dataType: "JSON",
        beforeSend: function() {
            $("#deleteFormEmpleado").val("Eliminando...");
        },
        success: function(result) {
            alert(result[0]['msg']);
            location.reload();
        },
        error: function() {
            console.log("Error");
        }
    });
    return false;
});

$(function() {
    //Tooltip
    $('[data-tooltip="tooltip"]').tooltip();

    //Popover
    $('[data-toggle="popover"]').popover();
});

var $demoMaskedInput = $('.demo-masked-input');
$demoMaskedInput
    .find(".datetime")
    .inputmask("d-m-y h:s", {
        placeholder: "__-__-____ __:__",
        alias: "datetime",
        hourFormat: "24"
    });