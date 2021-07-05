<title>Edudigm || Course List</title>
<?php include 'inc/header.php'; ?>
<style>
    .active::before {
        background-color: unset;
    }

    .owl-nav i {
        display: none;
    }
    #coursecount,#totalcount{
        font-size: 15px;
    }
    .owl-carousel .owl-nav button.owl-next,
    .owl-carousel .owl-nav button.owl-prev,
    .owl-carousel button.owl-dot {
        background: #fcfef7;
        ;
    }

    #nav-tab a span {
        font-size: 20px;
    }

    #nav-tab a span.active {
        border-bottom: 2px solid #f8cc5d;
    }
    .blink {
        border-bottom: 1px #000000 solid;        
        animation: blink 1s;
        animation-iteration-count: 1000;
    }
    @keyframes blink { 50% { border-color:#fff ; }  }
</style>
<div class="course">
    <!-- <section class="banner-slider py-5">
        <div class="container">
            <div class="col-md-12">
                <div class="carousel-wrap">
                    <div class="owl-carousel">
                        <div class="item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="video">

                                    </div>
                                </div>
                                <div class="col-md-12 py-4">
                                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.Duis aute irure dolor in reprehenderit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="video">

                                    </div>
                                </div>
                                <div class="col-md-12 py-4">
                                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.Duis aute irure dolor in reprehenderit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="video">

                                    </div>
                                </div>
                                <div class="col-md-12 py-4">
                                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.Duis aute irure dolor in reprehenderit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="video">

                                    </div>
                                </div>
                                <div class="col-md-12 py-4">
                                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.Duis aute irure dolor in reprehenderit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="course-tab">
        <div class="sticky-top">
            <nav class="pt-1">
                <div class="container">
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <!-- <a class="nav-item nav-link text-uppercase top_menu" mode_id="2470" href="javascript:void(0)">
                            <span>Offline Classes</span>
                        </a> -->
                        <a class="nav-item nav-link text-uppercase top_menu" mode_id="2471" href="javascript:void(0)">
                            <span class="active">live online classes</span>
                        </a>
                        <a class="nav-item nav-link text-uppercase top_menu" mode_id="2599" href="javascript:void(0)">
                            <span>study kit + e-learning </span>
                        </a>
                        <a class="nav-item nav-link text-uppercase top_menu" mode_id="2472" href="javascript:void(0)">
                            <span>e-learning</span>
                        </a>                        
                        
                    </div>
                </div>
            </nav>
            <div class="filter py-3">
                <div class="container">
                    <div class="row m-auto justify-content-center">
                        <!-- <div class="col-md-3">
                                <select class="" id="drp_dwn_sub">
                                    <option value="">Subject</option>
                                    <option value="PCM">PCM</option>
                                    <option value="PCB">PCB</option>
                                    <option value="PCMB">PCMB</option>
                                    <option value="P">P</option>
                                    <option value="C">C</option>
                                    <option value="M">M</option>
                                    <option value="B">B</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="" id="drp_dwn_dur">
                                    <option value="">Duration</option>
                                    <option value="24">24</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="" id="drp_dwn_cls">
                                    <option value="">Class</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                    <option value="XII+">XII+</option>
                                </select>
                        </div> -->
                        <div class="col-md-3">
                            <select class="" id="drp_dwn_cls">
                                <option value="">Class</option>
                                <option value="IV">IV</option>
                                <option value="V">V</option>
                                <option value="VI">VI</option>
                                <option value="VII">VII</option>
                                <option value="VIII">VIII</option>
                                <option value="IX">IX</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                                <option value="XII+">XII+</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="" id="drp_dwn_brd">
                                <option value="">Board</option>
                                <option value="1">Andhra Pradesh Board ofvIntermediate Education</option>
                                <option value="2">Andhra Pradesh Board of Secondary Education</option>
                                <option value="3">Andhra Pradesh Open School Society</option>
                                <option value="4">Assam Higher Secondary Education Council</option>
                                <option value="5">Assam Board of Secondary Education</option>
                                <option value="6">Bihar Intermediate Education Council</option>
                                <option value="7">Bihar School Examination Board</option>
                                <option value="8">Bihar Sanskrit Shiksha Board</option>
                                <option value="9">Chhatisgarh Board of Secondary Education</option>
                                <option value="10">Board of Higher Secondary Education</option>
                                <option value="11">Goa Board of Secondary  & Higher Secondary Education</option>
                                <option value="12">Gujarat Secondary  & Higher Secondary Education Board</option>
                                <option value="13">Haryana Board of Education</option>
                                <option value="14">Haryana Open School</option>
                                <option value="15">Himachal Pradesh Board of School Education</option>
                                <option value="16">J & K State Board of School Education</option>
                                <option value="17">J & K State Open School</option>
                                <option value="18">Jharkhand Academic Council</option>
                                <option value="19">Karnataka Board of the Pre-University Education</option>
                                <option value="20">Karnataka Secondary Education Examination Borad</option>
                                <option value="21">Karnataka Open School</option>
                                <option value="22">Kerala Board of Public Examinations</option>
                                <option value="23">Kerala Board of Higher Secondary Education</option>
                                <option value="24">Kerala State Open School</option>
                                <option value="25">Maharashtra State Board of Secondary and Higher Secondary Education</option>
                                <option value="26">Madhya Pradesh Board of Secondary Education</option>
                                <option value="27">M.P. State Open School</option>
                                <option value="28">Manipur Council of Higher Secondary Education</option>
                                <option value="29">Manipur Board of Secondary Education</option>
                                <option value="30">Meghalaya Board of School Education</option>
                                <option value="31">Mizoram Board of School Education Chaltlan</option>
                                <option value="32">Nagaland Board of School Education</option>
                                <option value="33">Orissa Council of Higher Secondary Education Bhubaneswar</option>
                                <option value="34">Orissa Board of Secondary Education</option>
                                <option value="35">Punjab School Education Board</option>
                                <option value="36">Rajasthan Board of Secondary Education</option>
                                <option value="37">Rajasthan State Open School</option>
                                <option value="38">Tamil Nadu Board of Secondary Education</option>
                                <option value="39">Tamil Nadu Board of Higher Secondary Education</option>
                                <option value="40">Tripura Board of Secondary Education</option>
                                <option value="41">U.P. Board of High School & Intermediate Education</option>
                                <option value="42">Uttranchal Shiksha Evm Pariksha Parishad</option>
                                <option value="43">West Bengal Board of Secondary Education</option>
                                <option value="44">West Bengal Council of Higher Secondary Education</option>
                                <option value="45">Rabindra Mukta Vidyalaya (W.B. State Open School)</option>
                                <option value="46">West Bengal Board of Madarsa Education</option>
                                <option value="47">National Institute of Open Schooling (formarly National Open School)</option>
                                <option value="48">Central Board of Secondary Education</option>
                                <option value="49">Council for Indian School Certificate Examinations</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="" id="drp_dwn_dur">
                                <option value="">Course Type</option>
                                <option value="short-term">Short Term</option>
                                <option value="long-term">Long Term</option>
                            </select>
                        </div>                        
                        <!-- <div class="col-md-2">
                            <a href="javascript:;" class="btn ndbutton hover-shadow filter_apply">Apply</a>
                        </div> -->
                        <div class="col-md-2">
                            <a class="btn ndbutton hover-shadow" id="clearfilter">Clear</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content py-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="xi">
                            <div class="text-center" id="loader" style="display: none;">
                                <img src="assets/images/loading.gif" alt="">
                            </div>
                            <p class="text-center">Showing <span id="coursecount"></span> of <span id="totalcount"></span></p>
                            <div class="row justify-content-center data">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'inc/footer.php'; ?>

<!--[if lt IE 7]>
        <p class="browsehappy ">You are using an <strong>outdated</strong> browser. Please <a href="# ">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js "></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/api.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/SmoothScroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js "
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous ">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js "
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous ">
</script>
</body>
<script>
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 100) {
            $(".navbar").removeClass("fixed-header");
        }
    });
</script>

<script>
    var final_filter_param = '';
    var boardhtml=$('#drp_dwn_brd').html();
    $(document).ready(function() {
        var category_id = getUrlParameter("category");
        var stu_class = getUrlParameter("class");
        var board = getUrlParameter("board");
        var duration = getUrlParameter("duration");
        if(category_id){
            $(".top_menu").each(function() {
                var modeid = $(this).attr("mode_id");
                if (category_id == modeid) {
                    $(".top_menu").find('span').removeClass("active")
                    $(this).find('span').addClass("active");
                }
            });
            setTimeout(function() {
                $('#drp_dwn_cls,#drp_dwn_brd,#drp_dwn_dur').addClass('blink');       
            }, 3000);            
            setTimeout(function() {
                $('#drp_dwn_cls,#drp_dwn_brd,#drp_dwn_dur').removeClass('blink');            
            }, 5000);
        }
        if(stu_class){
            $('#drp_dwn_cls').val(stu_class);
            setTimeout(function() {
                $('#drp_dwn_cls,#drp_dwn_brd,#drp_dwn_dur').addClass('blink');       
            }, 3000);            
            setTimeout(function() {
                $('#drp_dwn_cls,#drp_dwn_brd,#drp_dwn_dur').removeClass('blink');            
            }, 5000);
            generateCourse();
        }
        if(board){
            $('#drp_dwn_brd').val(board);
            setTimeout(function() {
                $('#drp_dwn_cls,#drp_dwn_brd,#drp_dwn_dur').addClass('blink');       
            }, 3000);            
            setTimeout(function() {
                $('#drp_dwn_cls,#drp_dwn_brd,#drp_dwn_dur').removeClass('blink');            
            }, 5000);
        }
        if(duration){
            $('#drp_dwn_dur').val(duration);
            setTimeout(function() {
                $('#drp_dwn_cls,#drp_dwn_brd,#drp_dwn_dur').addClass('blink');       
            }, 3000);            
            setTimeout(function() {
                $('#drp_dwn_cls,#drp_dwn_brd,#drp_dwn_dur').removeClass('blink');            
            }, 5000);
        }
        generatefilterarray();
    });
    $(document).on('click', '.top_menu', function() {
        $('.top_menu').find('span').removeClass("active");
        $(this).find('span').addClass("active");
        generatefilterarray();
    });
    $(document).on('change','#drp_dwn_cls',function() {
        generateCourse();
        generatefilterarray();
    });
    $(document).on('change','#drp_dwn_brd',function() {
        generatefilterarray();
    });
    $(document).on('change','#drp_dwn_dur',function() {
        generatefilterarray();
    });
    $(document).on('click', '.learnmore', function() {
        var courseid=$(this).attr('id');
        sessionStorage.setItem("courseid",courseid);
        window.location.href = "coursedetails";
    });
    $(document).on('click', '.btn_cart', function() {
        var str = $(this).text();
        if (str === 'ADD TO CART') {
            var prod = $(this).attr('item_id');
            var prodType = "course";
            addtocart(prod, prodType);
            $(this).html('ADDED');
            $(this).css({
                "color": "#fff",
                "background-color": "#6c757d",
                "border-color": "#6c757d"
            });
            location.reload();
        }
    });
    $(document).on('click', '#clearfilter', function() {
        $('select#drp_dwn_cls,select#drp_dwn_brd,select#drp_dwn_dur')
            .val("");
        generatefilterarray();
    });
    function generatefilterarray() {
        var category_id = $('.top_menu .active').parent().attr("mode_id");
        var stu_class = $('#drp_dwn_cls').val();
        var board = $('#drp_dwn_brd').val();
        var course_type = $('#drp_dwn_dur').val();
        final_filter_param = {
            "mode_id": category_id
        }
        if (stu_class) {
            var filter1 = {
                "class": stu_class
            }
            var final_filter_param = {
                ...final_filter_param,
                ...filter1
            }
        }
        if (board) {
            var filter2 = {
                "board": board
            }
            var final_filter_param = {
                ...final_filter_param,
                ...filter2
            }
        }
        if (course_type) {
            var filter3 = {
                "course_type": course_type
            }
            var final_filter_param = {
                ...final_filter_param,
                ...filter3
            }
        }
        $('#loader').show();
        $('.data').hide();
        setTimeout(function() {
            all_course_list_response = allCoursesList(final_filter_param);
			
            if (all_course_list_response.response_code == 200) {
                populate_html();
            }
            $('#loader').hide();
        }, 10);
    }
    function populate_html() {
        html = '';
        var all_courses = all_course_list_response.response_data.courses;
		sortResults(all_courses, true);
        var all_offer_data = all_course_list_response.response_data.all_offerings_data;
        var courselength=all_courses.length;
        $('#coursecount').html(courselength)
        $('#totalcount').html(all_course_list_response.response_data.total_count)
        if(courselength>0){
            $.each(all_courses, function(index, value) {
                html += '<div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-10 py-4 px-4">'
                html += '<div class="card rounded-0 mt-3 global-box-shadow platinum-gradient">'
                html += '<div class="card-body">'
                html += '<div class="row">'
                html += '<div class="col-md-12 text-center">'
                html += '<div class="course-icon">'
                if (value.icon === "" || value.icon === "null") {
                    html += '<img src="assets/images/Physics.svg" class="img-fluid" width="50" alt="">';
                } else {
                    html += '<img src="' + value.icon + '"  class="img-fluid" width="80" alt="">';
                }
                html += '</div>'
                html += '</div>'
                html += '<div class="col-md-12 text-center">'
                html += '<h5 class="card-title m-0 pt-2 text-uppercase">' + value.name + '</h5>'
                html += '</div>'
                html += '<div class="col-md-12 text-center">'
                var subject="";
                if(value.subjects){
                    var subject=convert_Sub(value.subjects)
                }
                html += '<h6 class="card-title m-0 pt-2 text-uppercase">' + subject + '</h6>'
                html += '</div>'
                $.each(value.offerings, function(index1, value1) {
                    html += '<div class="col-md-12 mx-auto mt-2">'
                    html += '<span class="offered-features features-available text-uppercase">' + value1.name +
                        '</span>'
                    html += '</div>'
                });
                $.each(all_offer_data, function(index2, value2) {
                    var match = 0;
                    $.each(value.offerings, function(index3, value3) {
                        if (value3.name === value2.name) {
                            match = 1;
                        }
                    });
                    if (match === 0) {
                        if(value2.name!="Class room"){
                            html += '<div class="col-md-12 mx-auto mt-2">'
                            html += '<span class="offered-features features-not-available text-uppercase">' + value2
                                .name +
                                '</span>'
                            html += '</div>'
                        }                
                    }
                });
                html += '<div class="col-md-12 text-center mt-3">'
                html += ' '
                var coupon_dis = value.coupon_discount;
                // var total = value.fix_fees + value.variable_fees
                var total = value.fix_fees
                var tot_dis = (value.variable_fees * coupon_dis) / 100;
                var dis_price = value.variable_fees - tot_dis + value.fix_fees;
                var fiftydis=total/2;
                if(value.fix_fees==0){
                    html += '<p class="program-price">';
                        html +=
                            '<i class="fas fa-rupee-sign program-price"></i> ' + value.variable_fees +
                            '</p> <br> ';
                }else{
                    if (tot_dis != 0 || tot_dis != "0") {
                        html += '<p class="program-price">';
                        html +=
                            '<span style="text-decoration: line-through;margin-right: 5px;font-size: 20px;color: red;"><i class="fas fa-rupee-sign program-price"style="font-size:10px;"></i> ' +
                            total + '</span><i class="fas fa-rupee-sign program-price"></i> ' + dis_price +
                            '</p> <br> ';
                    } else {
                        // html += '<span style="font-size: 13px">Starting from</span><br><i class="fas fa-rupee-sign program-price"></i> <span class="program-price">' + total +
                        //     '</span><br>';
                        html += '<span style="text-decoration: line-through;margin-right: 5px;font-size: 20px;color: red;"><i class="fas fa-rupee-sign program-price"></i> ' +
                            total + '</span> <span style="font-size: 20px;color: red;">(50% OFF)</span> <i class="fas fa-rupee-sign program-price ml-3"></i> ' + fiftydis +
                            '</p> <br> ';
                    }
                }        
                html += '</div>'
                html += '<div class="col-md-12 text-center mt-1">'
                html += '<p class="btn ndbutton mt-2 mx-1 learnmore" id="' + value.id + '">LEARN MORE</p>'
                html += '<a href="javascript:void(0)" item_id="' + value.id +
                    '"'
                if (productIdMatches(value.id)) {
                    html += 'class="btn mt-2 btn-secondary" disabled>ADDED</a>';
                } else
                    html +=
                    'class="btn stbutton mt-2 mx-1 btn_cart">ADD TO CART</a>';
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            });
            $('.data').html('');
            $('.data').show();
            $('.data').html(html);
        }else{
            $('.data').html('');
            $('.data').show();
            $('.data').html("<h1 class='my-5 py-5'>No Course Found</h1>");
        }
    }
    function sortResults(courses, asc) {
        courses.sort(function(a, b) {
            if (asc) {
                return (a['fix_fees'] + a['variable_fees'] > b['fix_fees'] + b['variable_fees']) ? 1 : ((a[
                    'fix_fees'] + a['variable_fees'] < b['fix_fees'] + b['variable_fees']) ? -1 : 0);
            } else {
                return (b['fix_fees'] + b['variable_fees'] > a['fix_fees'] + a['variable_fees']) ? 1 : ((b[
                    'fix_fees'] + b['variable_fees'] < a['fix_fees'] + a['variable_fees']) ? -1 : 0);
            }
        });
    }
    function convert_Sub(sub) {
        var converted = sub.replace("P", "Phy+");
        converted = converted.replace("C", "Chem+");
        converted = converted.replace("M", "Math+");
        converted = converted.replace("B", "Bio+");
        converted = converted.replace("S", "Sci+");
        if (converted.endsWith('+')) {
            converted = converted.substr(0, converted.length - 1);
        }
        return converted;
    }
    function productIdMatches(pid) {
        tempArr = JSON.parse(localStorage.getItem('list'));
        if (tempArr) {
            for (let i = 0; i < tempArr.length; i++) {
                id = Number(tempArr[i].split(':')[0]);
                if (pid == id) {
                    return true;
                }
            }
            return false;
        }
    }
    function generateCourse() {
        var val=$('#drp_dwn_cls').val();
        if(val=="XI" || val=="XII" || val=="XII+"){
            $('#drp_dwn_brd').find('option').remove().end()
            .append('<option value="">Course</option><option value="Target JEE">Target JEE</option><option value="Target NEET">Target NEET</option>');
        }else{
            $('#drp_dwn_brd').html(boardhtml);
        }
    }
</script>

</html>