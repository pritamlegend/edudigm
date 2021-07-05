<title>Edudigm || EAST</title>
<?php include 'inc/header.php'; ?>
<style>
p.error {
    font-weight: 700 !important;
}
.eastwwhr p{
    font-size: 18px;
    font-weight: 900!important;
    cursor: pointer;
}
.eastwwhr img{
    cursor: pointer;
}
#school{
    display: none;
}
select{
    height: 30px !important;
    line-height: 15px !important;
}
</style>
<div class="pvp-tms">
    <section class="container py-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-3 mb-5 text-uppercase font-weight-bold " style="letter-spacing: 2px;">Edudigm
                    Aptitude cum Scholarship Test (EAST)</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="tabsContent" class="tab-content text-center h-100">
                    <div id="pvp-tms_about" class="tab-pane fade active show">
                        <div class="p-4">
                            <div class="row">
                                <div class="col-md-12 pb-5 eastwwhr">
                                    <div class="row">
                                        <div class="col" caseOf="when">
                                            <img src="assets/images/when.png" alt="" class="w-100">
                                            <p class="text-center">WHEN</p>
                                        </div>
                                        <div class="col" caseOf="what">
                                            <img src="assets/images/what.png" alt="" class="w-100">
                                            <p class="text-center">WHAT</p>
                                        </div>
                                        <div class="col" caseOf="how">
                                            <img src="assets/images/how.png" alt="" class="w-100">
                                            <p class="text-center">HOW</p>
                                        </div>
                                        <div class="col" caseOf="syllabus">
                                            <img src="assets/images/syllabus.png" alt="" class="w-100">
                                            <p class="text-center">Result & Benefits</p>
                                        </div>
                                    </div>
                                    <!-- <h2 class="font-weight-bold text-uppercase pb-4">About</h2>
                                    <p class="pt-3 text-justify">
                                        Edudigm Aptitude cum Scholarship Test (EAST) enables a student to assess his/her
                                        skill sets
                                        in STEM (Science, Technology, Engineering &amp; Medical). The parents and the
                                        school fraternity
                                        would get a detailed analysis in terms of the child’s potential, areas where
                                        improvement is
                                        required and most importantly how to pursue a successful career path in a
                                        systematic manner.
                                        Rewards are assured in the form of certificates and scholarships, depending on
                                        the results
                                        achieved.
                                        <br><br><b>Specifics :-</b><br>
                                        <b>1. </b>100 Questions (50 - Aptitude, 40 - Science)<br>
                                        <b>2. </b>Duration - 90 Minutes<br>
                                        <b>3. </b>Analysis Report - Bloom’s Taxonomy<br>
                                        <b>4. </b>Rewards - a. Certificates b. Scholarships based on results <br><br>
                                    </p> -->
                                </div>
                                <div class="col-md-6">
                                    <img src="assets/images/east.jpg" class="img-fluid" alt=""style="height:365px;">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body" style="border: 2px solid #002a38;border-radius: 4px;">
                                        <h4 class="text-center pb-3">REGISTRATION</h4>
                                        <form class="text-center east">
                                            <p class="text-danger" style="font-size:12px;">* Note all fields are mandatory</p>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name" placeholder="Your name"  required="">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control email" id="email"
                                                    placeholder="Your email (e.g. rohan@xyz.com)" required="">
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" class="form-control mobile" id="mobile"
                                                    placeholder="Enter your 10 digit mobile number" maxlength="10" minlength="10"
                                                    onkeypress="return (event.charCode !=8 &amp;&amp; event.charCode ==0 || (event.charCode >= 48 &amp;&amp; event.charCode <= 57))"
                                                    required="">
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control " id="drp_dwn_school">
                                                    <option value="">Select School</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control " id="school"
                                                    placeholder="Enter your school name" required="">
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" id="drp_dwn_class" required="">
                                                    <option value="">Your class (Academic session of 2021-22)</option>
                                                    <option value="IV">IV</option>
                                                    <option value="V">V</option>
                                                    <option value="VI">VI</option>
                                                    <option value="VII">VII</option>
                                                    <option value="VIII">VIII</option>
                                                    <option value="IX">IX</option>
                                                    <option value="X">X</option>
                                                    <option value="XI">XI</option>
                                                    <option value="XII">XII</option>
                                                </select>
                                            </div>
                                            <span class="btn btn-primary east_submit">Submit</span>
                                            <p class="error text-center text-danger"></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <div class="modal fade bd-example-modal-lg" id="case_study_modal" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="font-size:30px;">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    </div>
                </div>
            </div>
        </div>
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
<script>
    whom_html = "<p>Meant for students of classes 3 to 12 studying in any school affiliated to CBSE/ICSE/State Board across India or abroad,&nbsp;EAST&nbsp;aims to&nbsp;<strong>Recognise&nbsp;</strong>talented students<strong>, Reward&nbsp;</strong>top performers<strong>&nbsp;</strong>and<strong>&nbsp;Encourage</strong>&nbsp;all&nbsp;participants to realise their true potential in the various state and national level competitive examinations.&nbsp;EAST&nbsp;as a platform helps schools, students and parents to understand the student's aptitude and thinking ability that they can then further improve upon</p>";

    what_html = "<p>EAST&nbsp;is a&nbsp;90 minutes test that can be taken either offline or online and is divided into two sections:</p>";
    what_html += "<p>Section A: Science &amp; Mathematics</p>";
    what_html += "<p>Section B: Aptitude, logical reasoning and general knowledge</p>";
    what_html += "<p>There are a total of 100 questions with each section having 50 questions each. Each question carries&nbsp;+4 marks for correct answer and -1 marks for incorrect answer. In all other cases, 0 mark is awarded.</p>";
    what_html += "<p>Syllabus: For Section A, the syllabus will be similar to the one covered in the school curriculum of the respective class and board of the student. For Section B, the questions will be based on general aptitude. No special preparation is required for either of the two sections.</p>";

    how_html = "<p>&nbsp;EAST&nbsp;can be taken either in pen and paper (offline) mode in the school OR it can be taken in Computer/Mobile based (online) mode. For the online mode, the test can be taken either at the school or from home through our web-portal or through our mobile app. Currently, the online test from home option has been made available due to COVID restrictions. A student needs to register for the EAST by filling-up the registration form. Post registration, an admit card will be generated for the student where the unique id along with the log-in id and password (for online EAST) will be provided.&nbsp;</p>";

    result_html = "After a student has taken EAST, the result of the same will be declared on a given day (generally within 7 working days) online. All EAST takers will be given certificates (merit and participation) and the top performers will be awarded with prizes. An interactive session with students and parents will also be conducted where they would be able get their queries pertaining to careers, exams, scholarships and academics addressed. A detailed report card will also be given to the participants along with a free one-to-one counselling session.";
    $('.east_submit').click(function() {
        name = $('.east #name').val();
        email = $('.east #email').val();
        mobile = $('.east #mobile').val();
        school = $('.east #school').val();
        stu_class = $('.east #drp_dwn_class').val();
        if (name && email && mobile && stu_class && school) {
            var response = UserAdmitCard(name, email, mobile, stu_class, school);
            //console.log(response);
            if (response.response_code == "400") {
                $('.east .error').html("")
                $('.east .error').html("<p style='color:red'>" + response.response_msg + "</p>")
            } else if (response.response_code == "402") {
                $('.east .error').html("")
                $('.east .error').html("<p style='color:red'>" + response.response_msg + "</p>")
            } else if (response.response_code == "200") {
                var alldata = {
                    "firstName": name,
                    "phoneNumber": mobile,
                    "class": stu_class,
                    "email": email,
                    "mode": "Online",
                    "id": response.response_data.id
                }
                sessionStorage.setItem("userval", JSON.stringify(alldata));
                window.location.href = "admitcard";
            }
        } else {
            $('.error').html("All Fields Are Mandatory")
        }
    });
    $('.eastwwhr p,.eastwwhr img').click(function() {
        $('#case_study_modal').modal('show');
        $('#case_study_modal').modal('handleUpdate');
        var caseof = $(this).parent().attr('caseOf');
        if (caseof == "teacher") {
            $('#case_study_modal .modal-title').html('Teacher');
            $('#case_study_modal .modal-body').html(cse_stdy_teacher_html)
        } else if (caseof == "govt") {
            $('#case_study_modal .modal-title').html('Government & CSR');
            $('#case_study_modal .modal-body').html(cse_stdy_govt_html);
        } else if (caseof == "parent") {
            $('#case_study_modal .modal-title').html('Students & Parents');
            $('#case_study_modal .modal-body').html(cse_stdy_student_html)
        } else if (caseof == "school") {
            $('#case_study_modal .modal-title').html('School');
            $('#case_study_modal .modal-body').html(cse_stdy_school_html)
        } else if (caseof == "what") {
            $('#case_study_modal .modal-title').html('What');
            $('#case_study_modal .modal-body').html(what_html)
        } else if (caseof == "when") {
            $('#case_study_modal .modal-title').html('Whom');
            $('#case_study_modal .modal-body').html(whom_html)
        } else if (caseof == "how") {
            $('#case_study_modal .modal-title').html('How');
            $('#case_study_modal .modal-body').html(how_html)
        } else if (caseof == "syllabus") {
            $('#case_study_modal .modal-title').html('Result & Benefits');
            $('#case_study_modal .modal-body').html(result_html)
        }
    });
    $(document).ready(function() {
        $.get('https://crm.edudigm.com/api/school-with-link',
            function(response, textStatus, jqXHR) {
                if (response.response_code == "200") {
                    $.each(response.response_data.schools_data, function(key, value) {
                        $('#drp_dwn_school').append($("<option></option>").attr("value", value.id).text(value.name));
                    });
                    $('#drp_dwn_school').append($("<option></option>").attr("value", "others").text("Others"));
                }
        });
    });
    $('#drp_dwn_school').on('change', function() {
        var val = $(this).val();
        var text = $("#drp_dwn_school option:selected").text();
        if (val == "others") {
            $('#school').show();
            $('#school').val('');
        } else {
            $('#school').val(text);
            $('#school').hide();
        }
    });
</script>
</body>

</html>