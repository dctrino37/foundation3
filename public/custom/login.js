$(document).ready(function () {
    // errr msg and success msg javascript div hide by default
    $("#error_msg").hide();
    $("#success_msg").hide();

    // hide confirm otp button
    $("#confirm_otp").hide();

    // add active class on password div tab
    $("#passdiv_tab").addClass("active");

    $("#otp_block").hide();

    // PASSWORD DIV TAB CLICK
    $("#passdiv_tab").click(function () {
        $("#otpdiv_tab").removeClass("active");
        $("#passdiv_tab").addClass("active");

        // show block
        $("#otp_block").hide();
        $("#password_block").show();
    });

    // onclick add class on otp div tab
    $("#otpdiv_tab").click(function () {
        $("#passdiv_tab").removeClass("active");
        $("#otpdiv_tab").addClass("active");

        // show block
        $("#send_otp").show();
        $("#password_block").hide();
        $("#otp_div").hide();
        // $("#confirm_otp").hide();
        $("input[name='type']").val("2");
        $("#otp_block").show();
    });

    // onclick send_otp button
    $("#send_otp").click(function () {
        var mobile = $("#mobile").val();
        var url = $("#url").val() + "/send_otp";
        // var url = window.location.origin;
        console.log(url);

        $.ajax({
            url: url,
            dataType: "Json",
            type: "GET",
            data: {
                mobile: mobile,
            },
            success: function (data) {
                console.log(data);
                if (data.success == true) {
                    $("#success_msg").html(data.data);
                    $("#success_msg").show();
                    $("#otp_div").show();
                    $("#send_otp").hide();
                    $("#confirm_otp").show();
                } else {
                    $("#error_msg").html(data.data);
                    $("#error_msg").show();
                    $("#success_msg").html(data.data);
                }
            },
        });
    });

    //onclick confirm otp
    $("#confirm_otp").click(function () {
        var mobile = $("#mobile").val();
        var otp = $("#otp").val();
        var dashboard = $("#dashboard").val();
        var url = $("#url").val() + "/confirm_otp";
        // var url = window.location.origin;
        console.log(url);

        $.ajax({
            url: url,
            dataType: "Json",
            type: "GET",
            data: {
                mobile: mobile,
                otp: otp,
            },
            success: function (data) {
                console.log(data);
                if (data.success == true) {
                    window.location.replace(dashboard);
                } else {
                    $("#error_msg").html(data.data);
                    $("#error_msg").show();
                }
            },
        });
    });

    // to hide alerts after some time
    window.setInterval(function () {
        if ($(".alert").is(":visible")) {
            $(".alert").delay(2000).fadeOut("slow");
        }
    }, 1000);
});
