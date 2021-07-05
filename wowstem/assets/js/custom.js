flag = 0;
$(document).ready(function() {
    //$('#covid_download_popup').modal('show');
    var attr_btn = getUrlParameter("btn");
    if (attr_btn == "false") {
        $('.regiter_floatinf').hide();
    }
});
$(document).on("click", "#btn_register", function() {
    $('.emptyValidate').each(function() {
        var val = $(this).val();
        if (val == "") {
            flag = 0;
            //$(".error.text-danger").html("One or more mandatory fields are blank");
            $('html, body').animate({
                scrollTop: $(this).offset().top - 130
            }, 1000);
            $(this).css("border", "3px solid red");
            $(this).focus();
            return false
        } else {
            flag = 1;
            $(this).css("border-color", "#ccc");
        }
    });
    if (flag == 1) {
        var txt_name = $('#txt_name').val();
        var txt_email = $('#txt_email').val();
        var txt_mobile = $('#txt_mobile').val();
        var drp_dwn_class = $('#covid_reg_form .stu_class span.active').attr("id");
        var txt_school_name = $('#txt_school_name').val();
        var txt_question = $('#txt_question').val();
        var event_type = "covid";
        var response;
        if (drp_dwn_class) {
            if (txt_question) {
                response = EventDataSave('event-registration?student_name=' + txt_name +
                    '&student_email=' + txt_email +
                    '&student_mobile=' + txt_mobile +
                    '&student_class=' + drp_dwn_class +
                    '&student_schoolname=' + txt_school_name +
                    '&question=' + txt_question +
                    '&source=' + "web" +
                    '&event_type=' + event_type);
            } else {
                response = EventDataSave('event-registration?student_name=' + txt_name +
                    '&student_email=' + txt_email +
                    '&student_mobile=' + txt_mobile +
                    '&student_class=' + drp_dwn_class +
                    '&student_schoolname=' + txt_school_name +
                    '&source=' + "web" +
                    '&event_type=' + event_type);
            }
            if (response.response_code == 200) {
                //$(".error").removeClass("text-danger").addClass("text-success").html("Your Registration Is Successfull");
                $('#txt_name').val("");
                $('#txt_email').val("");
                $('#txt_mobile').val("");
                $('#drp_dwn_class').val("");
                $('#txt_school_name').val("");
                $('#drp_dwn_board').val("");
                $('#drp_dwn_state').val("");
                $('#txt_city').val("");
                $('#txt_question').val("");
                $('span.error_msg').remove();
                $('.classerror').remove();
                $('.stu_class span').removeClass('active');
                $('#covid_reg_form').modal('hide');
                $('#covid_download_popup').modal('show');
            } else {
                $(".error").addClass("text-danger").html(response.response_msg);
            }
        } else {
            $('.stuclss_error').html('<p class="text-center text-danger classerror">Please Select Class</p>')
        }
    }
});

function EventDataSave(e) {
    return $.parseJSON($.ajax({
        type: "POST",
        url: "https://crm.edudigm.com/api/" + e,
        dataType: "json",
        async: !1
    }).responseText)
}

function validateEmail(t) {
    return /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(t)
}
$(".email").on("input", function() {
    var t = $(this).val();
    t ? validateEmail(t) ? ($(this).css("border-bottom-color", "#008000"),
            $(this).parent().find(".error_msg").remove()) : ($(this).css("border-bottom-color", "#ff4343"),
            $(this).parent().find(".error_msg").remove(),
            $(this).parent().append('<span class="error_msg" style="color:red;">Please Enter A Valid Email Id</span>')) :
        $(this).css("border-bottom-color", "#ff4343")
});

function validateMobile(t) {
    return /^\d{10}$/.test(t)
}
$(".mobile").on("input", function() {
    var t = $(this).val();
    "" != t ? validateMobile(t) ? ($(this).css("border-bottom-color", "#008000"), $(this).parent().find(".error_msg").remove()) : ($(this).css("border-bottom-color", "#ff4343"), $(this).parent().find(".error_msg").remove(), $(this).parent().append('<span class="error_msg" style="color:red;">Please Enter A Valid Mobile Number</span>')) : $(this).css("border-bottom-color", "#ff4343")
});
$(document).on("click", ".faq p", function() {
    $(".faq").removeClass("active");
    $(this).parent().addClass("active");
});
$(document).on("click", "#covid_reg_form .stu_class span", function() {
    $('#covid_reg_form .stu_class span').removeClass('active');
    $(this).addClass('active');
});
$("#webinar").click(function() {
    $('html, body').animate({
        scrollTop: $(".second_sec").offset().top
    }, 100);
});
$("#chapters").click(function() {
    $('html, body').animate({
        scrollTop: $(".chapter").offset().top
    }, 100);
});
$("#benefits").click(function() {
    $('html, body').animate({
        scrollTop: $(".learn").offset().top
    }, 100);
});
$("#speaker").click(function() {
    $('html, body').animate({
        scrollTop: $(".meetspeaker").offset().top
    }, 100);
});
$("#faq").click(function() {
    $('html, body').animate({
        scrollTop: $(".faqs").offset().top
    }, 100);
});
$("#appdownload").click(function() {
    $('html, body').animate({
        scrollTop: $(".mobileapp").offset().top
    }, 100);
});

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};