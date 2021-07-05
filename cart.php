<title>Edudigm || Cart</title>
<?php include 'inc/header.php'; ?>
<div class="cart">
    <section class="cart-head">
        <div class="container-fluid">
            <div class="row m-auto justify-content-center">
                <div class="col-md-12">
                    <div class="cart-heading py-3 my-4">
                        <h2 class="text-center text-uppercase font-weight-bold">cart details</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cart-items-delivery-details pb-5">
        <div class="container-fluid">
            <div class="row no-data">
                <div class="col-md-12 text-center loading">
                    <img src="assets/images/loading.gif" alt="">
                </div>
                <div id="Cart_Item_Details" class="col-md-12 text-center">

                </div>
            </div>
            <div class="row data" style="display:none">
                <div class="col-md-6 py-3">
                    <div class="card cart-items-card border-0 pb-4">
                        <div class="cart-item-head py-3">
                            <h3 class="text-center text-uppercase font-weight-bold">your items</h3>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-10 mx-3">
                                <div class="row">
                                    <div class="col-md-12 cart-item-data">

                                    </div>
                                </div>
                                <div class="subtotal pt-3" id="not_east_div" style="display:none;">
                                    <div class="row">
                                        <div class="col-md-6 text-right">
                                            <p class="float-right">Discount (50%)</p>
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <h5 class="float-right text-danger">-<i class="fas fa-rupee-sign"></i> <span
                                                    style="font-size:17px;font-weight:900;" id="dis_total_price"></span>
                                            </h5>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p class="float-right">Subtotal</p>
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <h5 class="float-right"><i class="fas fa-rupee-sign"></i> <span
                                                    style="font-size:17px;font-weight:900;" id="total_price"></span>
                                            </h5>
                                        </div>
                                        <div class="col-md-12" id="gst_col">
                                            <div class="row">
                                                <div class="col-md-6 text-right">
                                                    <p class="float-right">GST(18%)</p>
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    <h5 class="float-right"><i class="fas fa-rupee-sign"></i> <span
                                                            style="font-size:17px;font-weight:900;"
                                                            id="gst_price"></span></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 text-right">
                                            <p class="float-right">Grandtotal</p>
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <h5 class="float-right"><i class="fas fa-rupee-sign"></i> <span
                                                    style="font-size:17px;font-weight:900;" id="grand_price"></span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="subtotal pt-3" id="east_div" style="display:none;">
                                    <div class="row">
                                        <div class="col-md-6 text-right">
                                            <p class="float-right">Fixed Fees</p>
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <div class="row">
                                                <div class="col-md-8 text-right pr-0">
                                                    <i class="fas fa-rupee-sign"></i>
                                                </div>
                                                <div class="col-md-4 text-right">
                                                    <span style="font-size:17px;font-weight:900;"
                                                        id="east_div_fixed_fees"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p class="float-right">Variable Fees</p>
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <div class="row">
                                                <div class="col-md-8 text-right pr-0">
                                                    <i class="fas fa-rupee-sign"></i>
                                                </div>
                                                <div class="col-md-4 text-right">
                                                    <span style="font-size:17px;font-weight:900;"
                                                        id="east_div_variable_fees"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p class="float-right">Coupon Discount(
                                                <span id="east_div_coupon_discount_percent"
                                                    style="font-size:15px;">0</span>%)
                                            </p>
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <div class="row">
                                                <div class="col-md-8 text-right pr-0">
                                                    <i class="fas fa-rupee-sign"></i>
                                                </div>
                                                <div class="col-md-4 text-right">
                                                    <span style="font-size:17px;font-weight:900;"
                                                        id="east_div_coupon_discount_amt">-0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p class="float-right">East Discount(
                                                <span id="east_div_discount_percent" style="font-size:15px;"></span>%)
                                            </p>
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <div class="row">
                                                <div class="col-md-8 text-right pr-0">
                                                    <i class="fas fa-rupee-sign"></i>
                                                </div>
                                                <div class="col-md-4 text-right">
                                                    <span style="font-size:17px;font-weight:900;"
                                                        id="east_div_discount_amt"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p class="float-right">Net Amount
                                            </p>
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <div class="row">
                                                <div class="col-md-8 text-right pr-0">
                                                    <i class="fas fa-rupee-sign"></i>
                                                </div>
                                                <div class="col-md-4 text-right">
                                                    <span style="font-size:17px;font-weight:900;"
                                                        id="east_div_net_amt"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p class="float-right">GST(18%)</p>
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <div class="row">
                                                <div class="col-md-8 text-right pr-0">
                                                    <i class="fas fa-rupee-sign"></i>
                                                </div>
                                                <div class="col-md-4 text-right">
                                                    <span style="font-size:17px;font-weight:900;"
                                                        id="east_div_gst"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p class="float-right">
                                                Grand Total</p>
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <div class="row">
                                                <div class="col-md-8 text-right pr-0">
                                                    <i class="fas fa-rupee-sign"></i>
                                                </div>
                                                <div class="col-md-4 text-right">
                                                    <span style="font-size:17px;font-weight:900;"
                                                        id="east_div_grand_total"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="card cart-items-card delivery-form border-0 pb-4">
                        <div class="cart-item-head py-3">
                            <h3 class="text-center text-uppercase font-weight-bold">delivery details</h3>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-10 py-3 mx-5">
                                <div class="material-form">
                                    <form action="index.html" method="post">
                                        <div class="row">
                                            <div class="col-md-6 pt-4">
                                                <div class="group">
                                                    <input type="text" name="firstName" required class="emptyValidate">
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Full name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pt-4">
                                                <div class="group">
                                                    <input type="text" name="email" required
                                                        class="email emptyValidate">
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Email</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="group">
                                                    <input type="number" name="number" required
                                                        class="mobile emptyValidate">
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Mobile</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="group">
                                                    <input type="number" name="pin" required
                                                        class="zipcode emptyValidate">
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Pin Code</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="group">
                                                    <input type="text" name="message" required
                                                        class="msg emptyValidate">
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Address</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="group text-center">
                                                    <a type="submit"
                                                        class="btn stbutton savedeliverydetails mt-2 font-weight-bold global-box-shadow hover-shadow text-uppercase"
                                                        href=" ">proceed to pay</a>
                                                </div>
                                            </div>
                                            <div class="alert alert-danger" role="alert"
                                                style="display: none;margin: 20px auto 0px"></div>
                                        </div>
                                    </form>
                                </div>
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
<script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="e34524"
    bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>

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
var empty_cart = "";
empty_cart += '<div class="container">';
empty_cart += '<div class="row justify-content-center">';
empty_cart += '<div class="col-md-8">';
empty_cart += '<div class="card payment-card border-0 global-box-shadow p-5" style="border-radius: 13px;">';
empty_cart += '<div class="row">';
empty_cart += '<div class="col-md-12 text-center pb-5">';
empty_cart += '<img src="assets/images/empty-cart/empty-cart.svg" class="w-50" alt="">';
empty_cart += '</div>';
empty_cart += '<div class="col-md-12 text-center">';
empty_cart += '<h2 class="font-weight-bold" style="color: rgb(255 38 38);">Oops! Your cart is empty!</h2>';
empty_cart += '</div>';
empty_cart += '<div class="col-md-12 text-center pt-3 pb-5">';
empty_cart += "<h5>Looks like you haven't added <br> anything to your cart yet</h5>";
empty_cart += '</div>';
empty_cart += '<div class="col-md-12 text-center">';
empty_cart +=
    '<a class="btn stbutton mt-2 font-weight-bold text-uppercase global-box-shadow" style="padding: 2px 30px;border-radius: 15px;font-size: 20px;" role="button" href="courses">Shop Now</a>';
empty_cart += '</div>';
empty_cart += '</div>';
empty_cart += '</div>';
empty_cart += '</div>';
empty_cart += '</div>';
empty_cart += '</div>';

var prods = [];
var prodsSent = [];
var totalPrice = "0";
var html = "";
populateData();
var eastcode = "";
var fixed_fees = "";
var variable_fees = "";
var east_discount_amt = "";
var east_discount_percent = "";
var east_coupon_discount_percent = "";
var east_coupon_discount_amt = "";
var items;
var typeTemp;

function populateData() {
    items = JSON.parse(localStorage.getItem('list'));
    if (items) {
        if (items.length > 0) {
            items = items;
            for (let i = 0; i < items.length; i++) {
                let idTemp = items[i].split(':')[0];
                typeTemp = items[i].split(':')[1];
                let quantTemp = items[i].split(':')[2];
                eastcode = items[i].split(':')[3];
                if (eastcode) {
                    var allprodDetails = getProduct({
                        "item_id": idTemp,
                        "item_type": typeTemp,
                        "east_code": eastcode
                    });
                } else {
                    var allprodDetails = getProduct({
                        "item_id": idTemp,
                        "item_type": typeTemp
                    });
                }
                if (allprodDetails.response_code == 200) {
                    $('.loading').hide();
                    allprodDetails.response_data.quant = quantTemp;
                    allprodDetails.response_data.type = typeTemp;
                    if (typeTemp == "course") {
                        if (allprodDetails.response_data.prog_mode == "Distance") {
                            allprodDetails.response_data.price = parseInt(allprodDetails.response_data.discounted_fees);
                            allprodDetails.name += allprodDetails.response_data.course_code;
                            if(allprodDetails.response_data.img){
                                allprodDetails.response_data.img = 'http://bdo.edudigm.com/public/uploads/course_images/' +
                                allprodDetails.response_data.image;
                            }else{
                                allprodDetails.response_data.img = 'assets/images/cart/cart.svg';
                            }
                        } else if (allprodDetails.response_data.prog_mode == "Classroom") {
                            allprodDetails.response_data.price = parseInt(allprodDetails.response_data.reg_fees);
                            allprodDetails.name += allprodDetails.response_data.course_code;
                            if(allprodDetails.response_data.img){
                                allprodDetails.response_data.img = 'http://bdo.edudigm.com/public/uploads/course_images/' +
                                allprodDetails.response_data.image;
                            }else{
                                allprodDetails.response_data.img = 'assets/images/cart/cart.svg';
                            }                            
                        }

                        let prodSentTemp = {
                            "item_id": allprodDetails.response_data.id,
                            "item_quantity": quantTemp,
                            "item_type": allprodDetails.response_data.type
                        }
                        prodsSent.push(prodSentTemp);
                        prods.push(allprodDetails.response_data);
                        totalPrice = parseInt(totalPrice) + ((parseInt(allprodDetails.response_data.fix_fees) +
                            parseInt(allprodDetails.response_data.variable_fees)) * parseInt(quantTemp));
                    } else {
                        if (allprodDetails.response_data.images != null)
                            allprodDetails.response_data.img = '' +
                            allprodDetails.response_data.images.split(',')[0];

                        let prodSentTemp = {
                            "item_id": allprodDetails.response_data.id,
                            "item_quantity": quantTemp,
                            "item_type": allprodDetails.response_data.type
                        }
                        prodsSent.push(prodSentTemp);
                        prods.push(allprodDetails.response_data);
                        totalPrice = parseInt(totalPrice) + (parseInt(allprodDetails.response_data.price) * parseInt(
                            quantTemp));
                    }
                } else {
                    userDetails = null;
                }
            }
            updatecart();
        } else {
            $('.loading').hide();
            $('#Cart_Item_Details').html(empty_cart);
            $('.data').hide();
        }
    } else {
        $('.loading').hide();
        $('#Cart_Item_Details').html(empty_cart);
        $('.data').hide();
    }
}
$(document).on('click', '.next', function() {
    $('#headingTwo').click();
});
$(document).on('click', '.add', function() {
    var id = $(this).attr("prod-id");
    var type = $(this).attr("prod-type");
    for (let i = 0; i < prods.length; i++) {
        if ((prods[i].type == type) && (prods[i].id == id)) {
            let tempArr = JSON.parse(localStorage.getItem('list')),
                quantity;
            quantity = Number(tempArr[i].split(':')[2]) + 1;
            tempArr[i] = String(id + ":" + type + ":" + quantity);
            localStorage.setItem('list', JSON.stringify(tempArr));
            prods[i].quant = quantity;
            prodsSent[i].quantity;
            if (prods[i].type == "course") {
                totalPrice += (prods[i].fix_fees + prods[i].variable_fees);
            } else {
                totalPrice += (prods[i].price);
            }

        }
    }
    updatecart();
});
$(document).on('click', '.subs', function() {
    var id = $(this).attr("prod-id");
    var type = $(this).attr("prod-type");
    for (let i = 0; i < prods.length; i++) {
        if ((prods[i].type == type) && (prods[i].id == id)) {
            let tempArr = JSON.parse(localStorage.getItem('list')),
                quantity;
            quantity = Number(tempArr[i].split(':')[2]);
            if (quantity > 1) {
                quantity = quantity - 1;
                tempArr[i] = String(id + ":" + type + ":" + quantity);
                localStorage.setItem('list', JSON.stringify(tempArr));
                prods[i].quant = quantity;
                prodsSent[i].quantity;
                if (prods[i].type == "course") {
                    totalPrice -= (prods[i].fix_fees + prods[i].variable_fees);
                } else {
                    totalPrice -= (prods[i].price);
                }

            }
            break;
        }
    }
    updatecart();
    cartcount();
});
$(document).on('click', '.fas.fa-times', function() {
    var id = $(this).attr("prod-id");
    var type = $(this).attr("prod-type");
    let index = -1;
    for (let i = 0; i < prods.length; i++) {
        if ((prods[i].type == type) && (prods[i].id == id)) {
            index = i;
            if (prods[i].type == "course") {
                totalPrice -= (prods[i].fix_fees + prods[i].variable_fees) * prods[i].quant;
            } else {
                totalPrice -= prods[i].price * prods[i].quant;
            }
            prods[i].quant = 0;
            prodsSent.splice(i, 1);
            break;
        }
    }
    if (index != -1) {
        prods.splice(index, 1);
        let temp = localStorage.getItem('list');
        if (temp != null) {
            let indexw = -1;
            let gold = JSON.parse(temp);
            for (let i = 0; i < gold.length; i++) {
                let idd = gold[i].split(':')[0];
                let typee = gold[i].split(':')[1];
                if (idd == id && typee == type) {
                    indexw = i;
                    break;
                }
            }
            gold.splice(index, 1);
            localStorage.setItem('list', JSON.stringify(gold));
        }
    }
    updatecart();
    cartcount();
});

function updatecart() {
    //$('.tot_price').html(totalPrice);
    if (prods && prods.length > 0) {
        html = "";
        $.each(prods, function(index, value) {
            fixed_fees = value.fix_fees;
            variable_fees = value.variable_fees;
            east_discount_amt = value.east_discount;
            east_discount_percent = value.east_discount_percent;
            east_coupon_discount_percent = value.coupon_discount_percent;
            east_coupon_discount_amt = (value.variable_fees * east_coupon_discount_percent) / 100;

            html += '<div class="cart-item-list">';
            html += '<div class="row">';
            html += '<div class="col-lg-2 text-center m-auto py-3">';
            if (value.type == "course") {
                if (value.img === "" || value.img === null || value.img === undefined) {
                    html += '<img src="assets/images/cart/cart.svg" width="70"   alt="">';
                } else {
                    html += '<img src="' + value.img +
                        '" style="background: #002a38; padding: 5px; border-radius: 5px;" width="70" alt="">';
                }
            } else {
                if (value.img === "" || value.img === null || value.img === undefined) {
                    html += '<img src="assets/images/cart/cart.svg" width="70"   alt="">';
                } else {
                    //html += '<img src="' + value.img + '" width="70" alt="">';
                    html += '<img src="assets/images/cart/cart.svg" width="70"   alt="">';
                }
            }
            html += '</div>';
            html += '<div class="col-lg-4 text-center m-auto py-3">';
            html += '<div class="row">';
            html += '<div class="col-md-12">';
            html += '<h6 class="">' + value.name + '</h6>';
            html += '</div>';
            html += '<div class="col-md-12">';
            if (value.type == "course") {
                html += '<p><i class="fas fa-rupee-sign"></i> ' + (parseInt(value.fix_fees) + parseInt(value
                    .variable_fees)) + '</p>';
            } else {
                html += '<p><i class="fas fa-rupee-sign"></i> ' + value.price + '</p>';
            }
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '<div class="col-lg-4 text-center m-auto py-3">';
            html += '<div class="number">';
            if (value.type == "course") {
                html += '<p>Quantity- ' + value.quant + '</p>';
            } else {
                html += '<span class="minus subs my-1" prod-id="' + value.id + '" prod-type="' + value.type +
                    '">-</span>';
                html += '<input type="text" id="cart-input" value="' + value.quant + '" />';
                html += '<span class="plus add my-1" prod-id="' + value.id + '" prod-type="' + value.type +
                    '">+</span>';
            }
            html += '</div>';
            html += '</div>';
            html += '<div class="col-lg-2 m-auto py-3">';
            html += '<i class="fas fa-times float-right"   prod-id="' + value.id + '" prod-type="' + value
                .type + '"></i>';
            html += '</div>';
            html += '</div>';
            html += '<hr>';
            html += '</div>';
        });
        $('.cart-item-data').html('');
        $('.cart-item-data').html(html);
        $('.no-data').hide();
        $('.data').show();
    } else {
        $('#Cart_Item_Details').html(empty_cart);
        $('.no-data').show();
        $('.data').hide();
    }
    update_total_price();
}

function update_total_price() {
    if (east_discount_percent) {
        var eastdis = 0;
        var coupondis = 0;
        var total_price = 0;
        var net_amt = 0;
        coupondis = (variable_fees * east_coupon_discount_percent) / 100;
        if (coupondis) {
            eastdis = ((variable_fees - coupondis) * east_discount_percent) / 100;
        } else {
            eastdis = (variable_fees * east_discount_percent) / 100;
        }
        net_amt = (fixed_fees + variable_fees) - (eastdis + coupondis);
        var gstprice = (net_amt) * (18 / 100);
        if (gstprice == Math.floor(gstprice)) {} else {
            gstprice = ~~gstprice;
            gstprice = parseInt(gstprice) + 1;
        }
        total_price = gstprice + net_amt;
        new_total_price = gstprice + net_amt; //after roundoff to next integer
        total_price = parseFloat(total_price).toFixed(0); //after roundoff to next integer
        if (new_total_price > total_price) //after roundoff to next integer
            total_price++; //after roundoff to next integer
        if (east_coupon_discount_percent) {
            $("#east_div_coupon_discount_percent").html(east_coupon_discount_percent);
            $("#east_div_coupon_discount_amt").html('-' + coupondis);
        }
        $('#east_div_net_amt').html(net_amt);
        $('#east_div_fixed_fees').html(fixed_fees);
        $('#east_div_variable_fees').html(variable_fees);
        $('#east_div_gst').html(gstprice);
        $('#east_div_discount_percent').html(east_discount_percent);
        $('#east_div_discount_amt').html('-' + eastdis);
        $('#east_div_grand_total').html(total_price);
        $('#east_div').show();
    } else {

        if (typeTemp == "course") {
            $('#total_price').html(totalPrice/2);
            $('#dis_total_price').html(totalPrice/2);
            var gstprice = totalPrice * (18 / 100);
            if (gstprice == Math.floor(gstprice)) {} else {
                gstprice = ~~gstprice;
                gstprice = parseInt(gstprice);
            }
            $('#gst_price').html(gstprice/2);
            var total_price = (totalPrice * (18 / 100)) + totalPrice;
            total_price = ~~total_price;
            total_price = parseInt(total_price);
            $('#grand_price').html(total_price/2);
            $('#not_east_div').show();
        } else {
            $('#total_price').html(totalPrice);
            $('#grand_price').html(totalPrice);
            $('#not_east_div').show();
            $('#gst_col').hide();
        }

    }
}
$('.savedeliverydetails').click(function() {
    event.preventDefault();
    var fname = $("input[name=firstName]").val();
    var email = $("input[name=email]").val();
    var mobile = $("input[name=number]").val();
    var pin = $("input[name=pin]").val();
    var address = $("input[name=message]").val();
    if (fname && email && mobile && pin && address) {
        prodsSent = [];
        let toSendData = JSON.parse(localStorage.getItem('list'));
        if (toSendData != null) {
            for (let i = 0; i < toSendData.length; i++) {
                let tempId = toSendData[i].split(':')[0];
                let tempType = toSendData[i].split(':')[1];
                let tempQuant = toSendData[i].split(':')[2];
                eastcode = items[i].split(':')[3];
                prodsSent.push({
                    "item_id": tempId,
                    "item_type": tempType,
                    "item_quantity": tempQuant,
                    "east_code": eastcode
                });
            }
            var finalData = {
                "userDetails": {
                    "user_name": fname,
                    "user_email": email,
                    "user_phoneNo": mobile,
                    "user_addres": address,
                    "user_pinCode": pin
                },
                "prodDetails": prodsSent,
                "only_reg": '1',
				"payment_method":1
            }
        }

        var cartservice = Cart_getSubtotal(finalData);
        if (cartservice.response_code == 200) {
            bolt.launch({
                key: cartservice.response_data.key,
                txnid: cartservice.response_data.txn_id,
                amount: cartservice.response_data.subtotal,
                productinfo: cartservice.response_data.pinfo,
                hash: cartservice.response_data.hash,
                firstname: fname,
                email: email,
                phone: mobile,
                udf5: "BOLT_KIT_PHP7",
                surl: "https://crm.edudigm.com/api/transaction-success",
                furl: "https://crm.edudigm.com/api/transaction-failure",
                mode: 'dropout'
            }, {
                responseHandler: function(BOLT) {
                    if (BOLT.response.txnStatus != 'CANCEL') {
                        var fr = '<form action=\"' + $('#surl').val() + '\" method=\"post\">' +
                            '<input type=\"hidden\" name=\"key\" value=\"' + BOLT.response.key +
                            '\" />' +
                            '<input type=\"hidden\" name=\"salt\" value=\"' + $('#salt').val() +
                            '\" />' +
                            '<input type=\"hidden\" name=\"txnid\" value=\"' + BOLT.response.txnid +
                            '\" />' +
                            '<input type=\"hidden\" name=\"amount\" value=\"' + BOLT.response
                            .amount + '\" />' +
                            '<input type=\"hidden\" name=\"firstname\" value=\"' + BOLT.response
                            .firstname + '\" />' +
                            '<input type=\"hidden\" name=\"productinfo\" value=\"' + BOLT.response
                            .productinfo + '\" />' +
                            '<input type=\"hidden\" name=\"udf5\" value=\"' + BOLT.response.udf5 +
                            '\" />' +
                            '<input type=\"hidden\" name=\"email\" value=\"' + BOLT.response.email +
                            '\" />' +
                            '<input type=\"hidden\" name=\"status\" value=\"' + BOLT.response
                            .status + '\" />' +
                            '<input type=\"hidden\" name=\"mihpayid\" value=\"' + BOLT.response
                            .mihpayid + '\" />' +
                            '<input type=\"hidden\" name=\"hash\" value=\"' + BOLT.response.hash +
                            '\" />' +
                            '</form>';
                        var form = jQuery(fr);
                        jQuery('body').append(form);
                        form.submit();
                    }
                },
                catchException: function(BOLT) {
                    alert(BOLT.message);
                }
            });
        }
    } else {
        $('.alert.alert-danger').show().html('All Fields Are Required')
    }
});
</script>

</html>