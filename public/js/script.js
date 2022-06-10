$(document).ready(function () {
    const date = new Date();
    $("#t_checkin").attr(
        "min",
        new Date(date.setDate(date.getDate() + 1)).toISOString().split("T")[0]
    );
    $("#t_checkout").attr(
        "min",
        new Date(date.setDate(date.getDate() + 1)).toISOString().split("T")[0]
    );
});

$(document).ready(function () {
    $("#show-modal").click(function () {
        const checkin = $("#t_checkin").val();
        const checkout = $("#t_checkout").val();
        const jumlahKamar = $("#j_kamar").val();

        $("#checkin").attr("value", checkin);
        $("#checkout").attr("value", checkout);
        $("#k_jkamar").attr("value", jumlahKamar);
    });
});
