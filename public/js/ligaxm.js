var row;
$("#deleteTeam").on('click', function(ev) {
    ev.preventDefault();
    row = $("#deleteTeam").parents("tr");
});
$("#deleteFormTeam").on('click', function(ev) {
    ev.preventDefault();
    var form = $("#formDeleteTeam");
    var id = row.data("id");
    var url = form.attr('action').replace(':USER_ID', id);
    $.ajax({
        url: url,
        method: form.attr("method"),
        data: form.serialize(),
        dataType: "JSON",
        beforeSend: function() {
            $("#deleteFormTeam").val("Eliminando...");
        },
        success: function(result) {
            console.log(result);
            $("#deleteModal").modal("toggle");
            row.css({
                "background-color": "maroon",
                color: "white"
            }).fadeOut(3000);
        },
        error: function(e) {
            console.log(e);
        }
    });
    return false;
});

var rowP;
$("#deletePlayer").on("click", function(ev) {
    ev.preventDefault();
    rowP = $("#deletePlayer").parents("tr");
    console.log(rowP.data("id"));
});
$("#deleteFormPlayer").on("click", function(ev) {
    ev.preventDefault();
    var form = $("#formDeletePlayer");
    console.log(rowP.data("id"));
    var id = rowP.data("id");
    var url = form.attr("action").replace(":USER_ID", id);
    $.ajax({
        url: url,
        method: form.attr("method"),
        data: form.serialize(),
        dataType: "JSON",
        beforeSend: function() {
            $("#deleteFormPlayer").val("Eliminando...");
        },
        success: function(result) {
            console.log(result);
            $("#deleteModal").modal("toggle");
            rowP.css({
                "background-color": "maroon",
                color: "white"
            }).fadeOut(3000);
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