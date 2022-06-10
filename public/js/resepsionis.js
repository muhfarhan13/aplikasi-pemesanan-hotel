$(document).ready(function () {
    $("#filter_checkin").removeAttr("style");

    fetch_customer_data();
    function fetch_customer_data(query = "") {
        $.ajax({
            url: "cari",
            method: "GET",
            data: { query: query },
            dataType: "json",
            success: function (data) {
                $(".reservasi-resepsionis tbody").html(data.table_data);
            },
            error: function (data) {
                var errors = data.responseJSON;
                console.log(errors);
            },
        });
    }

    $(document).on("keyup", "#search", function () {
        var query = $(this).val();
        fetch_customer_data(query);
    });

    var $button = $("#sort_icon");
    $("#filter_checkin").datepicker();
    $button.on("click", function () {
        $("#filter_checkin").datepicker("show");
    });

    fetch_sort_data();
    function fetch_sort_data(quey = "") {
        $.ajax({
            url: "filter-checkin",
            method: "GET",
            data: { quey: quey },
            dataType: "json",
            success: function (data) {
                $(".reservasi-resepsionis tbody").html(data.table_reservasi);
            },
            error: function (error) {
                var errors = error.responseJSON;
                console.log(errors);
            },
        });
    }

    $(document).on("change", "#filter_checkin", function () {
        var quey = $("#filter_checkin").val();
        fetch_sort_data(quey);
    });
});
