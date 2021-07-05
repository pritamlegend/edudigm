<?php include '../inc/header.php'; ?>
<style>
    .card{        
        box-shadow: 0 0 20px 0px rgb(0 0 0 / 25%);
    }
    .resend_otp{
        cursor: pointer;
        font-size: 12px;
    }
</style>
<div class="container my-5">
    <div class="row justify-content-center">
        <h2 class="col-md-12 text-center mb-4 text-uppercase font-weight-bold ">EAST Report</h2>
        <div class="col-md-6">
            <div class="card p-5">
                <div class="mobile_div mb-3">
                    <input type="text" class="form-control mobile" value="" id="mobile" placeholder="Enter your 10 digit mobile number" maxlength="10" minlength="10" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                </div>
                <div class="mobile_submit_div text-center">
                    <span class="mobile_submit btn btn-primary">Submit</span>
                    <div class="error"></div>
                </div>
                <div class="mobile_otp_div text-center" style="display: none;">
                    <input type="text" class="form-control" id="mobile_otp" placeholder="Enter your 4 digit OTP send on above number" maxlength="4" minlength="4" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                    <p class="text-left pl-2 resend_otp d-table-cell w_100"><u>Resend OTP</u></p>
                    <span class="mobile_otp_submit btn mt-3 btn-primary">Submit</span>
                    <div class="error"></div>
                </div>
                <div class="user_details_div text-center" style="display: none;">
                    <input type="text" id="user_name" class="form-control" placeholder="Enter you full name">
                    <select class="form-control mt-3" id="drp_dwn_class" required>
                        <option value="">Select Your Class</option>
                        <option value="III">III</option>
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
                    <input type="text" id="exm_code" class="form-control mt-3" placeholder="Enter your exam code">
                    <input type="text" id="omr_code" class="form-control mt-3" placeholder="Enter your OMR code">
                    <div class="error"></div>
                    <span class="user_details_submit btn mt-3 btn-primary">Submit</span>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <iframe id="file_view"src="" frameborder="0" class="w-100" style="display: none;"></iframe>
        </div>
    </div>
</div>
<?php include '../inc/footer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js "></script>
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/api.js"></script>
<script>
    var mobile="";
    $('.mobile_submit').click(function() {
        mobile=$('#mobile').val();
        if(mobile && mobile.length==10){
            var response=ans_key_chk_mble(mobile);
            if(response.response_code==200){
                $("#mobile").prop('disabled', true);
                $('.mobile_submit_div').hide(500);
                $('.mobile_otp_div').show(500);
            }else{
                $('.mobile_submit_div .error').html('<p class="text-danger">Oops Something went wrong</p>')
            }
        }else{
            $('.mobile_submit_div .error').html('<p class="text-danger">Please write your 10 digit mobile number</p>')
        }
    });
    $('.mobile_otp_submit').click(function() {
        var otp=$('#mobile_otp').val();
        if(otp && otp.length==4){
            var response=ans_key_chk_otp(mobile,otp);
            if(response.response_code==200){
                if(response.response_data.class){
                    $('#drp_dwn_class').val(response.response_data.class);
                    $("#drp_dwn_class").prop('disabled', true);
                }
                if(response.response_data.name){
                    $('#user_name').val(response.response_data.name);
                    $("#user_name").prop('disabled', true);
                }
                $("#mobile").prop('disabled', true);
                $('.mobile_otp_div').hide(500);
                $('.user_details_div').show(500); 
            }else{
                $('.mobile_otp_div .error').html('<p class="text-danger">'+response.response_msg+'</p>')
            }                       
        }else{
            $('.mobile_otp_div .error').html('<p class="text-danger">Please provide a valid OTP number</p>')
        }        
    });
    $('.user_details_submit').click(function() {
        var name=$('#user_name').val();
        var stu_class=$('#drp_dwn_class').val();
        var omr_code=$('#omr_code').val();
        var exm_code=$('#exm_code').val();
        if(name && stu_class && omr_code && exm_code){
            var response=ans_key_save_user_info(mobile, name, stu_class,exm_code,omr_code);
            $("#drp_dwn_class").prop('disabled', true);
            $("#user_name").prop('disabled', true);
            if(response.response_code==200){                
                $('#file_view').show().attr("src",response.response_data.file);
                $('#file_view').css("height","2100");
                $('#file_view').parent().addClass("mt-5");
            }else{
                $('.user_details_div .error').html('<p class="text-danger">'+response.response_msg+'</p>')
            }
        }else{
            $('.user_details_div .error').html('<p class="text-danger">All Fields Are Mandatory</p>')
        }    
    });
    $('.resend_otp').click(function() {
        var response=ans_key_chk_mble(mobile);
        if(response.response_code==200){
            $('.mobile_otp_div .error').html('<p class="text-success">OTP send Successfully</p>')
        }else{
            $('.mobile_otp_div .error').html('<p class="text-danger">Oops Something went wrong</p>')
        }
    });
</script>