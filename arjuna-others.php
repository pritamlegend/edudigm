<title>Edudigm || Arjuna Others</title>
<?php include 'inc/header.php'; ?>
<div class="kanyashree">
    <section class="container py-4">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-5 text-uppercase font-weight-bold ">Arjuna</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul id="tabs" class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="" data-target="#kanyashree_gallery" data-toggle="tab"
                            class="nav-link small text-uppercase active">gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#kanyashree_location" data-toggle="tab"
                            class="nav-link small text-uppercase">location</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#kanyashree_queries" data-toggle="tab"
                            class="nav-link small text-uppercase">queries</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#kanyashree_contact" data-toggle="tab"
                            class="nav-link small text-uppercase">contact</a>
                    </li>
                </ul>
                <div id="tabsContent" class="tab-content">
                    <div id="kanyashree_gallery" class="tab-pane fade active show">
                        <div class="p-5">
                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="assets/images/arjuna/g1.jpg" alt="">
                                        <div class="overlay">
                                            <!-- <h2>Orientation Day</h2> -->
                                            <div class="fancybox" rel="ligthbox" data-href="assets/images/arjuna/g1.jpg"
                                                data-title="ABC">
                                                <a class="info zoom" href="javascript:void(0)"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="assets/images/arjuna/g2.jpg" alt="">
                                        <div class="overlay">
                                            <!-- <h2>Orientation Day</h2> -->
                                            <div class="fancybox" rel="ligthbox" data-href="assets/images/arjuna/g2.jpg"
                                                data-title="ABC">
                                                <a class="info zoom" href="javascript:void(0)"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="kanyashree_location" class="tab-pane fade">
                        <div class="p-5">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14736.130412378221!2d88.4377639!3d22.5778839!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf4bf6113a07ceffa!2sAcknit%20Industries%20Limited%20Ecostation!5e0!3m2!1sen!2sin!4v1583506575447!5m2!1sen!2sin"
                                height="320" frameborder="0" style="border:0;width:100%;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div id="kanyashree_queries" class="tab-pane fade">
                        <form class="p-5" id="contact_form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname" class="text-uppercase">first name</label>
                                        <input type="text" class="form-control rounded-0 accept_letter emptyValidate"
                                            id="firstname" name="fname" aria-describedby="fname"
                                            placeholder="Enter Your First Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname" class="text-uppercase">last name</label>
                                        <input type="text" class="form-control rounded-0 accept_letter emptyValidate"
                                            id="lastname" name="lname" aria-describedby="lname" placeholder="Enter Your Last Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="text-uppercase">Email</label>
                                        <input type="email" class="form-control rounded-0 email emptyValidate"
                                            id="email" name="email" aria-describedby="email" placeholder="eg. rohan@xyz.com">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile" class="text-uppercase">Mobile</label>
                                        <input type="number"
                                            class="form-control rounded-0 mobile numberonly emptyValidate" id="mobile"
                                            name="mobile" aria-describedby="mobile" placeholder="Enter 10 Digit Mobile No">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="textarea" class="text-uppercase">message</label>
                                        <textarea class="form-control rounded-0 emptyValidate" id="msg" name="message"
                                            rows="3" placeholder="Write Your Query"></textarea>
                                    </div>
                                </div>
                                <!-- <div class="col-md-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input rounded-0" id="check">
                                        <label class="form-check-label text-justify" for="check">I agree all Terms & Conditions</label>
                                    </div>
                                </div> -->
                                <div class="col-md-12 text-center">
                                    <a href="javascript:;" type="submit"
                                        class="btn ndbutton team-bio-btn w-100 rounded-0 global-box-shadow text-uppercase mt-2 submit">submit</a>
                                        <i class="fa fa-spinner fa-spin" aria-hidden="true" style="display: none;"></i>
                                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center py-3">
                                    <div class="contact alert" style="display: none;"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="kanyashree_contact" class="tab-pane fade">
                        <div class="row">

                            <div class="col-md-12">
                                <h2 class="my-5 text-center"><i class="far fa-envelope-open"></i> contact@edudigm.in
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div id="myModal" class="photo modal">
    <span class="gallery_close">×</span>
    <span class="gallery_prev">
        &lt;</span> <img class="modal-content" id="img01">
    <span class="gallery_next">&gt;</span>
    <div id="caption"></div>
</div>
<?php include 'inc/footer.php'; ?>
<!--[if lt IE 7]>
               <p class="browsehappy ">You are using an <strong>outdated</strong> browser. Please <a href="# ">upgrade your browser</a> to improve your experience.</p>
               <![endif]-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js "></script>
<script src="assets/js/custom.js "></script>
<script src="assets/js/api.js "></script>
<script src="assets/js/owl.carousel.min.js "></script>
<script src="assets/js/SmoothScroll.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js "
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous ">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js "
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous ">
</script>
</body>
<script>
$(document).on('click', '.nav-item .nav-link', function() {
    $('#tabs .nav-item').removeAttr('style');
    $(this).parent().css('z-index', '0')
});
</script>
<script>
var flag = 0;

function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test($email);
}

function validateMobile($mobile) {
    var mobileReg = /^\d{10}$/;
    return mobileReg.test($mobile);
}

$('.email').on('input', function() {
    var value = $(this).val();
    if (value) {
        if (!validateEmail(value)) {
            $(this).css('border', '1px solid #ff4343');
            $(this).parent().find('p').remove();
            $(this).parent().append(
                '<p style="color: red;font-size: 12px;margin-bottom: 0;">Please Enter A Valid Email</p>');
        } else {
            $(this).css('border', '1px solid #008000');
            $(this).parent().find('p').remove();
        }
    } else {
        $(this).css('border', '1px solid #ff4343');
    }
});
$('.mobile').on('input', function() {
    var value = $(this).val();
    if (value != "") {
        if (!validateMobile(value)) {
            $(this).css('border', '1px solid #ff4343');
            $(this).parent().find('p').remove();
            $(this).parent().append(
                '<p style="color: red;font-size: 12px;margin-bottom: 0;">Please Enter A Valid Mobile</p>');
        } else {
            $(this).css('border', '1px solid #008000');
            $(this).parent().find('p').remove();
        }
    } else {
        $(this).css('border', '1px solid #ff4343');
    }
});
$('.emptyValidate').on('blur', function() {
    var value = $(this).val();
    if (value) {
        $(this).css('border', '1px solid green');
        $(this).parent().find('p').remove();
    } else {
        $(this).css('border', '1px solid #ff4343');
        $(this).parent().find('p').remove();
        $(this).parent().append(
            '<p style="color: red;font-size: 12px;margin-bottom: 0;">Above Field Is Mandatory</p>');
    }
});
$('.email').on('blur', function() {
    var value = $(this).val();
    if (value) {
        if (!validateEmail(value)) {
            $(this).css('border', '1px solid #ff4343');
            $(this).parent().find('p').remove();
            $(this).parent().append(
                '<p style="color: red;font-size: 12px;margin-bottom: 0;">Please Enter A Valid Email</p>');
        } else {
            $(this).css('border', '1px solid #008000');
            $(this).parent().find('p').remove();
        }
    } else {
        $(this).css('border', '1px solid #ff4343');
    }
});
$('.mobile').on('blur', function() {
    var value = $(this).val();
    if (value != "") {
        if (!validateMobile(value)) {
            $(this).css('border', '1px solid #ff4343');
            $(this).parent().find('p').remove();
            $(this).parent().append(
                '<p style="color: red;font-size: 12px;margin-bottom: 0;">Please Enter A Valid Mobile</p>');
        } else {
            $(this).css('border', '1px solid #008000');
            $(this).parent().find('p').remove();
        }
    } else {
        $(this).css('border', '1px solid #ff4343');
    }
});

function validation() {
    fname = $('#firstname').val();
    lname = $('#lastname').val();
    email = $('#email').val();
    mobile = $('#mobile').val();
    msg = $('#msg').val();
    $("input,textarea").each(function() {
        var val = $(this).val();
        if (val) {
            flag = 1;
        } else {
            $(this).css('border', '1px solid #ff0000');
            $(this).parent().find('p').remove();
            $(this).parent().append(
                '<p style="color: red;font-size: 12px;margin-bottom: 0;">Above Field Is Mandatory</p>');
            flag = 0;
        }
    });
    if (email) {
        if (!validateEmail(email)) {
            $(this).css('border', '1px solid #ff4343');
            $(this).parent().find('p').remove();
            $(this).parent().append(
                '<p style="color: red;font-size: 12px;margin-bottom: 0;">Please Enter A Valid Email</p>');
            flag = 0;
        } else {
            $(this).css('border', '1px solid #008000');
            $(this).parent().find('p').remove();
            flag = 1;
        }
    } else {
        $(this).css('border', '1px solid #ff4343');
    }
    if (mobile != "") {
        if (!validateMobile(mobile)) {
            $(this).css('border', '1px solid #ff4343');
            $(this).parent().find('p').remove();
            $(this).parent().append(
                '<p style="color: red;font-size: 12px;margin-bottom: 0;">Please Enter A Valid Mobile</p>');
            flag = 0;
        } else {
            $(this).css('border', '1px solid #008000');
            $(this).parent().find('p').remove();
            flag = 1;
        }
    } else {
        $(this).css('border', '1px solid #ff4343');
    }
}
$('.submit').click(function(e) {
    event.preventDefault();
    validation();
    var fname = $("input[name=fname]").val();
    var lname = $("input[name=lname]").val();
    var email = $("input[name=email]").val();
    var mobile = $("input[name=mobile]").val();
    var message = $("textarea[name=message]").val();

    if (flag == 1) {
        $('.btn').hide();
        $('.fa.fa-spinner').show();
        var contact_response = ContactUs(fname, lname, email, mobile, message);
        if (contact_response.response_code == "200") {
            $('.btn').hide();
            $('.fa.fa-spinner').hide();
            $('.contact.alert').show();
            $('.contact.alert').html(contact_response.response_msg);
            $('.contact.alert').css({
                "color": "white",
                "padding": "0px",
                "background-color": "#0e6723"
            });
            $('input, textarea').val('');
        } else {
            $('.contact.alert').show();
            $('.contact.alert').html(contact_response.response_msg);
            $('.contact.alert').css({
                "color": "red"
            });
            $('.btn').show();
            $('.fa.fa-spinner').hide();
        }
    } else {
        $('.contact.alert').show();
        $('.contact.alert').html("All Fields Are Mandatory");
        $('.contact.alert').css({
            "color": "red"
        })
    }
});
</script>

</html>