<title>Edudigm || Course Details</title>
<?php include 'inc/header.php'; ?>
<title>Edudigm | Course Details</title>
<style>
    .active::before {
        background-color: unset;
    }

    .owl-nav i {
        display: none;
    }

    .owl-carousel .owl-nav button.owl-next,
    .owl-carousel .owl-nav button.owl-prev,
    .owl-carousel button.owl-dot {
        background: #fcfef7;
    }
    .course-details .enter-east-code .east-code {
    background-color: rgb(226, 226, 228);
    color: #002a38;
    padding: 20px;
}
</style>
<div class="course-details">
    <section class="">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="course_img py-3"></div>
                        <h1 class="text-center text-uppercase api_name"></h1>
                        <div class="sub_name"></div>
                        <h3 class="text-center text-uppercase api_code pb-5 pt-2"></h3>
                    </div>
                    <div class="col-md-10">
                        <p class="api_description"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="course-details">
    <section class="program">
        <div class="container">
            <h2 class="text-center pt-5 pb-3 text-uppercase">Benefits</h2>
            <div class="row justify-content-center pt-3 pb-5">
                <div class="col-12">
                    <div class="row justify-content-center api_benefits"></div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="row">


                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="what-we-get pb-5">
        <h2 class="text-center py-5 text-uppercase font-weight-bold">offerings</h2>
        <div class="container">
            <div class="row api_offerings">

            </div>
        </div>
    </section>
    <section class="products pb-5">
        <h2 class="text-center py-5 text-uppercase font-weight-bold">products</h2>
        <div class="container">
            <div class="row api_products">

            </div>
        </div>
    </section>
    <section class="east mt-5 d-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 p-0 m-auto">
                    <div class="east-price">
                        <span class="text-center text-uppercase" style="font-size:25px;">
                            <i class="fas fa-rupee-sign"></i>
                            <span class="lowest_price" style="font-size:25px;"></span>
                        </span>
                        <span class="text-center text-uppercase" style="font-size:25px;"> -
                            <i class="fas fa-rupee-sign"></i>
                            <span class="highest_price" style="font-size:25px;"></span>
                        </span>
                    </div>
                </div>
                <div class="col-md-4 p-0 m-auto">
                    <div class="east-code position-relative">
                        <h2 class="text-center">Don't have EAST code ?</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 m-auto">
                    <div class="take-east position-relative text-center">
                        <a href="http://www.exams.edudigm.in/registration" class="btn btn-light text-uppercase font-weight-bold">take east</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sample d-none">
        <div class="container">
            <h2 class="text-center pb-3 pt-5 text-uppercase font-weight-bold">sample</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-wrap">
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="testimonial">
                                    <img src="assets/images/coursedetails/Sample Square Icon.svg" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial">
                                    <img src="assets/images/coursedetails/Sample Square Icon.svg" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial">
                                    <img src="assets/images/coursedetails/Sample Video Camera Icon.svg" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial">
                                    <img src="assets/images/coursedetails/Sample Square Icon.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="enter-east-code pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 p-0 m-auto">
                    <div class="east-price" id="price_aftr_dis">

                    </div>
                </div>
                <div class="col-md-4 p-0 m-auto">
                    <div class="east-code position-relative">
                        <form class="form-inline justify-content-center">
                            <div class="form-group mx-sm-3 mb-2">
                                <input type="text" class="form-control" id="apply_east_code" placeholder="East Code">
                            </div>
                            <p class="btn btn-success submit_east_code btn-sm mb-2">APPLY</p>
                        </form>
                        <p class="text-center text-uppercase">enter east code & avail upto 90% scholarship</p>
                    </div>
                </div>
                <div class="col-md-4 p-0 m-auto">
                    <div class="take-east position-relative text-center">
                        <button type="button" class="btn btn-warning text-uppercase addtocart font-weight-bold">add to
                            cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="course-tab">
        <div class="container">
            <h2 class="text-center py-5 text-uppercase font-weight-bold">suggested courses</h2>
            <div class="row justify-content-center api_suggested_course suggested-course"></div>
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
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [
            "<i class='fa fa-caret-left'></i>",
            "<i class='fa fa-caret-right'></i>"
        ],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })
</script>
<script>
    $(document).ready(function() {
        var id = sessionStorage.getItem("courseid");
        alldata = {
            "course_id": id
        }
        var course_details_response = CourseDetails(alldata);
        if (course_details_response.response_code == 200) {
            var response = course_details_response.response_data;
            var product_id = course_details_response.response_data.id;
            var benefits_html = "";
            var offerings_html = "";
            var products_html = "";
            var suggested_courses_html = "";
            var sub_name_html = "";
            var course_img_html = "";
            $('.api_name').html(response.name);
            $('.api_code').html(response.code);
            $('.api_description').html(response.description);
            sub_name_html += '<h5 class="text-center text-uppercase py-2">' + convert_Sub(response.subjects) +
                '</h5>';
            course_img_html += '<img src="' + response.icon + '" class="img-fluid" width="90" alt="">';
            $('.sub_name').html(sub_name_html);
            $('.course_img').html(course_img_html);
            $.each(response.benefits, function(benefits_index, benefits_data) {
                benefits_html += '<div class="col-md-4">';
                benefits_html += '<div class="row">';
                benefits_html += '<div class="col-4 py-3">';
                if (benefits_data.icon === "" || benefits_data.icon === null) {
                    benefits_html +=
                        '<img src="assets/images/coursedetails/Program 11 Icon.svg" class="img-fluid" width="60" alt="">';
                } else {
                    benefits_html += '<img src="' + benefits_data.icon +
                        '"  class="img-fluid" width="60" alt="">';
                }
                benefits_html += '</div>';
                benefits_html += '<div class="pl-0 col-8 m-auto py-3">';
                benefits_html += '<h5 class="pb-3 font-weight-bold">' + benefits_data.name + '</h5>';
                if (benefits_data.description === "" || benefits_data.description === null) {
                    benefits_html += '<p> Description will be uploaded soon </p>';
                } else {
                    benefits_html += '<p>' + benefits_data.description + '</p>';
                }
                benefits_html += '</div>';
                benefits_html += '</div>';
                benefits_html += '</div>';
            });
            $('.api_benefits').html(benefits_html);
            $.each(response.offerings, function(offerings_index, offerings_data) {
                offerings_html += '<div class="col-md-3">';
                offerings_html += '<div class="row">';
                offerings_html += '<div class="col-5 m-auto py-3">';
                if (offerings_data.icon === "" || offerings_data.icon === null) {
                    offerings_html +=
                        '<img src="assets/images/coursedetails/What You Get Study Kit Icon.svg" class="img-fluid" width="60" alt="">';
                } else {
                    offerings_html += '<img src="' + offerings_data.icon +
                        '"  class="img-fluid" width="60" alt="">';
                }
                offerings_html += '</div>';
                offerings_html += '<div class="pl-0 col-7 m-auto py-3">';
                offerings_html += '<h5>' + offerings_data.name + '</h5>';
                offerings_html += '</div>';
                offerings_html += '</div>';
                offerings_html += '</div>';
            });
            $('.api_offerings').html(offerings_html);
            $.each(response.products, function(products_index, products_data) {
                products_html += '<div class="col-md-4">';
                products_html += '<div class="row">';
                products_html += '<div class="col-4 py-3">';
                if (products_data.icon === "" || products_data.icon === null) {
                    products_html +=
                        '<img src="assets/images/coursedetails/What You Get Study Kit Icon.svg" class="img-fluid" width="60" alt="">';
                } else {
                    products_html += '<img src="' + products_data.icon +
                        '"  class="img-fluid" width="60" alt="">';
                }
                products_html += '</div>';
                products_html += '<div class="pl-0 col-8 m-auto py-3">';
                products_html += '<h5 class="pb-3 font-weight-bold">' + products_data.name + '</h5>';
                if (products_data.value === "" || products_data.value === null) {
                    products_html += '<p> Description will be uploaded soon </p>';
                } else {
                    products_html += '<p>' + products_data.value + '</p>';
                }
                products_html += '</div>';
                products_html += '</div>';
                products_html += '</div>';
            });
            $('.api_products').html(products_html);
            $('.lowest_price').html((response.fees_details.fix_fees)/2);
            var totalPrice = parseInt(response.fees_details.fix_fees) + parseInt(response.fees_details
                .variable_fees)
            $('.highest_price').html(totalPrice/2);
            $('.total_price').html(parseInt(response.fees_details.variable_fees) + parseInt(response.fees_details
                .fix_fees));
            var html = "";
            var coupon_dis = response.fees_details.coupon_discount;
            var total = response.fees_details.fix_fees + response.fees_details.variable_fees;
            total=total/2;
            var tot_dis = (response.fees_details.variable_fees * coupon_dis) / 100;
            var dis_price = response.fees_details.variable_fees - tot_dis + response.fees_details.fix_fees;
            if (tot_dis) {
                html += '<h2 class="text-center">Total Price <br>';
                html +=
                    '<span style="text-decoration: line-through;margin-right: 5px;font-size: 15px;"><i class="fas fa-rupee-sign program-price"style="font-size:10px;"></i> ' +
                    total + '</span><i class="fas fa-rupee-sign program-price"></i> ' + dis_price +
                    '</h2> <br> ';
            } else {
                html += '<br><h2 class="program-price"><i class="fas fa-rupee-sign program-price"></i> ' + total +
                    '</h2><br>';
            }
            $("#price_aftr_dis").html(html);
            $.each(response.suggested_courses, function(suggested_courses_index, suggested_courses_data) {
                var all_offer_data = response.all_offerings_data;
                var price = parseInt(suggested_courses_data.fix_fees) + parseInt(suggested_courses_data
                    .variable_fees);
                var discount = (parseInt(suggested_courses_data.coupon_discount) * parseInt(
                    suggested_courses_data.variable_fees)) / 100;
                var discount_price = (parseInt(suggested_courses_data.variable_fees) - discount) + parseInt(
                    suggested_courses_data.fix_fees)
                suggested_courses_html += '<div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-10 py-4">';
                suggested_courses_html +=
                    '<div class="card rounded-0 mt-3 global-box-shadow platinum-gradient">';
                suggested_courses_html += '<div class="card-body">';
                suggested_courses_html += '<div class="row">';
                suggested_courses_html += '<div class="col-md-12 text-center">';
                suggested_courses_html += '<div class="course-icon">';
                if (suggested_courses_data.icon === "" || suggested_courses_data.icon === "null") {
                    suggested_courses_html +=
                        '<img src="assets/images/Physics.svg" class="img-fluid" width="50" alt="">';
                } else {
                    suggested_courses_html += '<img src="' + suggested_courses_data.icon +
                        '"  class="img-fluid" width="80" alt="">';
                }
                suggested_courses_html += '</div>';
                suggested_courses_html += '</div>';
                suggested_courses_html += '<div class="col-md-12 text-center">';
                suggested_courses_html += '<h5 class="card-title m-0 pt-2 text-uppercase">' +
                    suggested_courses_data.name + '</h5>';
                suggested_courses_html += '</div>';
                suggested_courses_html += '<div class="col-md-12 text-center">'
                suggested_courses_html += '<h6 class="card-title m-0 pt-2 text-uppercase">' + convert_Sub(
                    suggested_courses_data.subjects) + '</h6>'
                suggested_courses_html += '</div>'
                suggested_courses_html += '<div class="col-md-12 mx-auto mt-3">';
                $.each(response.offerings, function(offerings_index, offerings_data) {
                    suggested_courses_html += '<div class="col-md-12 mx-auto mt-2">'
                    suggested_courses_html +=
                        '<p class="offered-features features-available text-uppercase">' +
                        offerings_data.name + '</p>';
                    suggested_courses_html += '</div>'
                });
                $.each(all_offer_data, function(offerings_index2, offerings_data2) {
                    var match = 0;
                    $.each(response.offerings, function(offerings_index3, offerings_data3) {

                        if (offerings_data3.name === offerings_data2.name) {
                            match = 1;
                        }
                    });
                    if (match === 0) {
                        suggested_courses_html += '<div class="col-md-12 mx-auto mt-2">'
                        if(offerings_data2.name!="Class room"){
                            suggested_courses_html +=
                            '<span class="offered-features features-not-available text-uppercase">' +
                            offerings_data2.name +
                            '</span>'
                        }                    
                        suggested_courses_html += '</div>'
                    }
                });
                suggested_courses_html += '</div>';
                suggested_courses_html += '<div class="col-md-12 text-center mt-3"style="font-size: 20px;">';
                //suggested_courses_html += '<i class="fas fa-rupee-sign program-price"></i> ';
                if (discount) {
                    suggested_courses_html +=
                        '<span class="program-price"style="text-decoration: line-through;margin-right: 5px;">' +
                        price + '</span><br>';
                    suggested_courses_html += '<span class="program-price">' + discount_price +
                        '</span><br>';
                } else {
                    //suggested_courses_html += '<span class="program-price">' + price + '</span><br>';


                    suggested_courses_html += '<span style="text-decoration: line-through;margin-right: 5px;font-size: 20px;color: red;">';
                    suggested_courses_html += '<i class="fas fa-rupee-sign program-price"></i> ';
                    suggested_courses_html += price;
                    suggested_courses_html += '</span> ';
                    suggested_courses_html += '<span style="font-size: 20px;color: red;">';
                    suggested_courses_html += '(50% OFF)';
                    suggested_courses_html += '</span> <i class="fas fa-rupee-sign program-price ml-3"></i> '+price/2+'<p></p> <br>';







                }
                suggested_courses_html += '</div>';
                suggested_courses_html += '<div class="col-md-12 text-center mt-1">';
                suggested_courses_html += '<a class="btn ndbutton mt-2 mx-1" href="coursedetails?id=' +
                    suggested_courses_data.id + '">LEARN MORE</a>';
                suggested_courses_html += '<a href="javascript:void(0)"  item-id="' +
                    suggested_courses_data.id + '"'

                if (productIdMatches(suggested_courses_data.id)) {
                    suggested_courses_html += 'class="btn mt-2 btn-secondary" disabled>ADDED</a>';
                } else
                    suggested_courses_html += 'class="btn stbutton mt-2 cartBtn">ADD TO CART</a>';
                suggested_courses_html += '</div>';
                suggested_courses_html += '</div>';
                suggested_courses_html += '</div>';
                suggested_courses_html += '</div>';
                suggested_courses_html += '</div>';
            });
            $('.api_suggested_course').html(suggested_courses_html);
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
            $(document).on('click', '.cartBtn', function() {
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
        }
        $(document).on('click', '.cartBtn', function() {
            var prod = $(this).attr("item-id");
            var prodType = "course";
            addtocart(prod, prodType);
        });
        $(document).on('click', '.submit_east_code', function() {
            //apply_east_code
            var east_code = $('#apply_east_code').val();
            var course_code = sessionStorage.getItem("courseid");
            alldata = {
                "east_code": east_code,
                "course_id": course_code
            }
            var course_details_response = Check_east_code(alldata);
            if (course_details_response.response_code == 200) {
                var prod = course_code;
                var prodType = "course";
                carteastapply(prod, prodType, east_code)
                window.location.href = "cart";
            } else {
                alert(course_details_response.response_msg)
            }
        });
    });
    $(document).on('click', '.addtocart', function() {
        var id = sessionStorage.getItem("courseid");
        var prodType = "course";
        addtocart(id, prodType);

    });
</script>


</html>