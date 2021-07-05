<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAST Report</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/report/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/report/assets/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <style>
        .anychart-credits {
            display: none;
        }
        #twa_div::-webkit-scrollbar {
            width: 13px;
        }
        #twa_div::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 0px 10px 10px 0px;
        }
        /* #pyramidchart{
            width:90%;
        } */
        #twa_div {
            height: 20%;
            padding-bottom: 50px;
            overflow-y: auto;
            border-top: 1px solid #000;
            margin-top: 10px;
        }
        @media print {
            * {
                -webkit-print-color-adjust: exact;
            }
            .pagebreak { page-break-before: always; }
        }
        .loading{
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        .chapterstat{
            margin-bottom: 0;
        }
        .chapterstat span{
            margin-right: 5px;
        }
        .seventh_page .chapterstat span{
            margin-top: 5px;
        }
        #twa_div td{
            vertical-align: middle;
            text-align: center;
        }
        .eight_page a{
            color: #212529;
            font-size: 1.3rem;
            font-weight: 600;
            text-decoration: underline;
        }
        @media screen and (max-width:768px) {
            #subwse_analys_column_chart {
                height:400px;
            }
            .fifth_page .table_img{
                position: relative;
                transform: inherit;
            }
            .fifth_page .bubble{
                position: relative;
                left: initial;
                padding: 20px;
                transform: none;
            }
            .fifth_page .bubble img{
                display:none;
            }
            .fifth_page .height {
                height: initial;
            }
            .fifth_page .bubble p {
                position: relative;
                top: 20%;
                width: initial;
                left: inherit;
                transform: none;
                text-align: justify;
            }
            .seventh_page table {
                height: 100%;
            }
        }        
        .bullets{
            position: fixed;
            bottom: 30px;
            left: 50%;
            transform: translate(-50%, 0);
            margin: 0 auto;
            padding: 0;
            width: 180px;
        }
        .bullets li{
            float: left;
            width: 15px;
            height: 15px;
            list-style-type: none;
            border: 1px solid #000;
            border-radius: 50%;
            margin-right: 5px;
        }
        .bullets li.bactive{
            background-color: #000;
            cursor: auto;
        }
        .bullets li.bactive span {
            position: absolute;
            font-size: 12px;
            bottom: -20px;
            left: 50%;
            transform: translate(-50%, 0px);
        }
        .bt_legend{
            height: 15px;
            width: 15px;
            border-radius: 50%;
            display: inline-block;
            border: 1px solid #000;
        }
        .bt_text{
            display: block;
            font-size: 12px;
            margin-bottom: 10px;
        }
        .Montserrat{
            font-family: 'Montserrat', sans-serif;
        }
        hr{
            border-top: 1px solid #1E1D3F;
        }
        .nine_page .certificate::-webkit-scrollbar {
            width: 5px;
        }
        /* .sclrshp_det{
            position: absolute;
            top: 50%;
            transform: translate(0, 15%);
            padding: 20px;
        }         */
        .fees_str p{
            margin-bottom:0;
        }
        #rightside::-webkit-scrollbar {
            width: 13px;
        }#rightside::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 0px 10px 10px 0px;
        }
        #rightside{
            overflow-y: auto;
            padding-bottom: 50px;
            display: block;
        }
        .ten_page .col-md-7 p{
            margin-bottom:0px;
        }
        .border-bottom{
            border-bottom:1px solid #000!important;
        }
        .otpl {
            border: 1px solid #000;
            padding: 10px 30px;
        }
        .promo_validate{
            position: absolute;
            top: 50%;
            right: 0px;
            transform: translate(0px, -50%);
            padding: .375rem .75rem;
            background-color: #007bff;
            color: #fff;
            border: 1px solid #007bff;
            cursor: pointer;
        }
        .form-control:disabled, .form-control[readonly] {
            background-color: #a7a7a7;
            opacity: 1;
        }
        .bullets li{
            cursor: pointer;
        }
        #loader{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
        }
    </style>
</head>

<body>
    <section class="loading">
        <img src="/loading.gif" alt="">
        <p>Please Wait While We Are Generating Your Report</p>
    </section>
    <section class="body-content" style="display:none;">
        <div class="pagediv first_page active bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <h1 class="fnt_shadow">STUDENT PERFORMANCE</h1>
                    </div>
                    <div class="col-md-6">
                        <h1 class="fnt_shadow">REPORT 2021</h1>
                        <h4 class="fnt_Montserrat mt-5">EAST</h4>
                    </div>
                    <div class="col-md-6">
                        <img src="/report/assets/images/pg_1_family.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="pagediv second_page bg_1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-3">
                        <img src="/report/assets/images/pg_2_man.svg" alt="">
                    </div>
                    <div class="col-6 col-md-3 mobile_show">
                        <img src="/report/assets/images/pg_2_book.svg" alt="">
                    </div>
                    <div class="col-md-1">&nbsp;</div>
                    <div class="col-md-4">
                        <h4 class="fnt_raleway font-weight-bold stu_name"></h4>
                       <div class="student_comment"></div>
                    </div>
                    <div class="col-md-1">&nbsp;</div>
                    <div class="col-md-3 desktop_show">
                        <img src="/report/assets/images/pg_2_book.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="pagediv pagebreak third_page">
            <div class="container-fluid">
                <div class="row paddingforpage">
                    <div class="col-md-6">
                        <h4>THE FIRST STEP IS TO LEARN FROM YOUR MISTAKE</h4>
                        <h1 class="fnt_vietnam">SUBJECT WISE ANALYSIS</h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><i class="fas fa-arrow-circle-down"></i> Subject</th>
                                    <th>Obtained</th>
                                    <th>Average</th>
                                    <th>Highest</th>
                                    <th>Maximum</th>
                                    <th>Percentage</th>
                                </tr>
                            </thead>
                            <tbody id="swa_div">
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                    <div id="subwse_analys_column_chart"></div>
                    </div>
                </div>
            </div>
        </div>        
        <div class="pagediv pagebreak fifth_page">
            <img src="/report/assets/images/pg_5_table.svg" class="table_img" alt="">
            <div class="bubble">
                <img src="/report/assets/images/pg_5_bubble.svg" class="" alt="">
                <p>
                    Created in 1956, Bloom's Taxonomy is a powerful tool used to assess learning on a 
                    variety of cognitive levels
                </p>
            </div>
            <div class="container-fluid">
                <div class="row paddingforpage">
                    <div class="col-md-6">
                        <div class="height"></div>
                    </div>
                    <div class="col-md-6">
                        <h4>BLOOM'S TAXONOMY</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Question Type</th>
                                    <th>Marks Obtained</th>
                                    <th>Total</th>
                                    <th>Percentage</th>
                                </tr>
                            </thead>
                            <tbody id="bt_div"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagediv pagebreak sixth_page" style="background-image: none;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 bg_1">
                        <h4></h4>
                        <h1 class="fnt_vietnam">BLOOM'S TAXONOMY</h1>
                        <table class="table table-bordered">                            
                            <tbody>
                                <tr>
                                    <td>Knowledge</td>
                                    <td><p>Count, Define, Describe, Draw, Find, Identify, Label, List, Match, Name, Quote, Recall, Recite, Sequence, Tell, Write</p></td>
                                </tr>
                                <tr>
                                    <td>Comprehension</td>
                                    <td><p>Conclude, Demonstrate, Discuss, Explain, Generalize, Identify, Illustrate, Interpret, Paraphrase, Predict, Report, Restate, Review, Summarize, Tell </p></td>
                                </tr>
                                <tr>
                                    <td>Application</td>
                                    <td>Apply, Change, Choose, Compute, Dramatize, Interview, Prepare, Produce, Role-play, Select, Show, Transfer, Use</td>
                                </tr>
                                <tr>
                                    <td>Analysis</td>
                                    <td>Analyze, Characterize, Classify, Compare, Contrast, Debate, Deduce, Diagram, Differentiate, Discriminate, Distinguish, Examine, Outline, Relate, Research, Separate</td>
                                </tr>
                                <tr>
                                    <td>Synthesis</td>
                                    <td>Compose, Construct, Create, Design, Develop, Integrate, Invent, Make, Organize, Perform, Plan, Produce, Propose. Rewrite</td>
                                </tr>
                                <tr>
                                    <td>Evaluation</td>
                                    <td>Appraise, Argue, Assess, Choose, Conclude, Critic, Decide, Evaluate, Judge, Justify, Predict, Prioritize, Prove, Rank, Rate, Select</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col text-center mt-2">
                                <span class="bt_legend" style="background-color:#96A6A6;"></span>
                                <span class="bt_text" id="EVALUATE"></span>
                            </div>
                            <div class="col text-center mt-2">
                                <span class="bt_legend" style="background-color:#7D8C93;"></span>
                                <span class="bt_text" id="CREATE"></span>
                            </div>
                            <div class="col text-center mt-2">
                                <span class="bt_legend" style="background-color:#FFD54F;"></span>
                                <span class="bt_text" id="ANALYSE"></span>
                            </div>
                            <div class="col text-center mt-2">
                                <span class="bt_legend" style="background-color:#EF6C00;"></span>
                                <span class="bt_text" id="APPLY"></span>
                            </div>
                            <div class="col text-center mt-2">
                                <span class="bt_legend" style="background-color:#5E9FE0;"></span>
                                <span class="bt_text" id="UNDERSTAND"></span>
                            </div>
                            <div class="col text-center mt-2">
                                <span class="bt_legend" style="background-color:#64B5F6;"></span>
                                <span class="bt_text" id="REMEMBER"></span>
                            </div>
                        </div>
                        <div id="pyramidchart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagediv pagebreak seventh_page">
            <div class="container">
                <img src="/report/assets/images/pg_7_btm.svg" alt="" class="ladylaptop">
                <div class="row">
                    <div class="col-md-4">                        
                    </div>
                    <div class="col-md-8">
                        <div class="my-5 toptext">
                            <h1>TOPIC WISE ANALYSIS</h1>
                            <img src="/report/assets/images/pg_7_zigzac.svg" class="topzigzac" alt="">
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <p class="text-center mb-0">Topics</p>
                            </div>
                            <div class="col-8">
                                <div class="row">                                    
                                    <div class="col-3">
                                        <p class="text-center mb-0">Obt.</p>
                                    </div>
                                    <div class="col-3">
                                        <p class="text-center mb-0">Avg</p>
                                    </div>
                                    <div class="col-3">
                                        <p class="text-center mb-0">Top</p>
                                    </div>
                                    <!-- <div class="col">
                                        <p class="text-center mb-0">Maximum</p>
                                    </div> -->
                                    <div class="col-3">
                                        <p class="text-center mb-0">% age</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="twa_div"></div>
                        <!-- <table class="table table-bordered">
                            <thead>
                                <tr class>
                                    <td style="font-weight: bold;">
                                        Topics
                                    </td>
                                    <td style="font-weight: bold;">
                                        Obtained
                                    </td>
                                    <td style="font-weight: bold;">
                                        Average
                                    </td>
                                    <td style="font-weight: bold;">
                                        Highest
                                    </td>
                                    <td style="font-weight: bold;">
                                        Maximum
                                    </td>
                                    <td style="font-weight: bold;">
                                        Percentage
                                    </td>
                                </tr>
                            </thead>
                            <tbody id="twa_div">
                                
                            </tbody>
                        </table> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="pagediv nine_page">
            <div class="certificate">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-9 mt-5">
                            <div class="row">
                                <div class="col-6 text-center">
                                    <img src="/report/assets/images/ed_logo.png" style="width: 220px;height:50px;">
                                </div>
                                <div class="col-6 text-center">
                                    <img src="" id="school_logo" style="max-width: 220px;height:50px;display:none;">
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-8 text-center mt-3">
                                    <img src="/report/assets/images/Certificate_red.svg" style="width:400px;">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <h2 class="Montserrat text-center font-weight-bold" style="color:#881F2B">AWARDED TO</h2>
                                </div>
                                <div class="col-md-12">
                                    <h2 class="Montserrat text-center font-weight-bold m-0" id="name" style="color:#1E1D3F">Pritam Kar</h2>
                                    <hr class="m-0">
                                </div>
                                <div class="col-md-12 mt-1">
                                    <h4 class="Montserrat text-center m-0" style="color:#1E1D3F">of Standard <u><span class="class"></span></u></h4>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <h5 class="Montserrat text-center m-0" style="color:#1E1D3F">
                                        For his/her  <span id="performance"></span>  achievement and meritorious performance in the 
                                        <b>EDUDIGM APTITUDE CUM SCHOLARSHIP TEST (EAST)</b> dated  <span id="date"></span>  
                                    </h5>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <h5 class="Montserrat text-center m-0" style="color:#1E1D3F">
                                    Awarded by <b>EDUDIGM - An IIT Kharagpur Alumni Initiative</b> 
                                    </h5>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <div class="row">
                                        <div class="col-6 text-center">
                                            <img src="/report/assets/images/MS_Sign.svg" alt="" style="width: 135px;height: 60px;">
                                            <p class="m-0">MANISH SHANKAR</p>
                                            <span>Head Of Academics (EDUDIGM)</span>
                                        </div>
                                        <div class="col-6 text-center">
                                            <img src="/report/assets/images/RA_Sign.svg" alt="" style="width: 135px;height: 60px;">
                                            <p class="m-0">RAJIV AGARWAL</p>
                                            <span>CEO (EDUDIGM)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <div class="pagediv ten_page bg_1">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <div class="row">
                            <div class="col-md-5 mt-3">
                                <div class="sclrshp_det">
                                    <h1 class="fnt_vietnam mb-4">SCHOLARSHIP OFFER</h1>
                                    <h4 class="fnt_raleway font-weight-bold"><span class="stu_name"></span> (Class <span class="class"></span> ),</h4>
                                    <p class="text-justify fnt_vietnam">
                                        Congratulations! Based on your performance in the <b>Edudigm Aptitude cum Scholarship Test (EAST)</b>, we believe that you 
                                        have the required aptitude in Science and Mathematics to excel in school as well as competitive 
                                        exams. Henceforth, you have been awarded: 
                                    </p>
                                    <p class="fnt_vietnam text-justify font-weight-bold">
                                        <u><span id="schlrshp_offr"></span>% </u> Scholarship in the Tution Fee of the Arjuna Gold Program
                                    </p>
                                    <p class="fnt_vietnam text-justify">
                                        The Arjuna Gold Mentoring Program combines the best of Edudigm's highly acclaimed live classroom 
                                        mentoring along with study kit, test series and e-learning. The program has limited seats available.
                                    </p>
                                    <p class="fnt_vietnam text-justify">Program Name: <span class="font-weight-bold" id="prog_name"></span> </p>
                                    <p class="fnt_vietnam text-justify">Course Name: <span class="font-weight-bold" id="course_name"></span> </p>
                                </div>
                            </div>
                            <div class="col-md-1">
                                            &nbsp;
                            </div>
                            <div class="col-md-6 mt-3" id="rightside">
                                <h4 class="fnt_raleway font-weight-bold"> <b>Choose Duration</b> </h4>
                                <p class="fnt_vietnam text-justify font-weight-bold" id="duration"></p>
                                <div id="loader">
                                    <img src="/loading.gif" alt="">
                                    <p>Please Wait While We Are Getting Your Fees Details</p>
                                </div>
                                <div id="fees_data" style="display:none">
                                    <div class="row fees_str justify-content-center">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-9 text-left">
                                                    <p class="fnt_raleway font-weight-bold">Fix Fee</p>                                                
                                                </div>
                                                <div class="col-3">
                                                    <p class="fnt_raleway text-right font-weight-bold">+ <span id="fixed_fees"></span> </p>                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row fees_str justify-content-center east_fix_dis">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-9 text-left">
                                                    <p class="fnt_raleway font-weight-bold text-danger">Bulk Purchase Discount(<span id="fixed_discount_percent"></span> %)</p>
                                                </div>
                                                <div class="col-3">
                                                    <p class="fnt_raleway text-right font-weight-bold text-danger">- <span id="fixed_discount_amt"></span> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row fees_str justify-content-center d-none">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-9 text-left">
                                                    <p class="fnt_raleway font-weight-bold">Final Fix Fee (A)</p>
                                                </div>
                                                <div class="col-3">
                                                    <p class="fnt_raleway text-right font-weight-bold" id="final_fixed_fees"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row fees_str justify-content-center">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-9 text-left">
                                                    <p class="fnt_raleway font-weight-bold">Variable Fee</p>
                                                </div>
                                                <div class="col-3">
                                                    <p class="fnt_raleway text-right font-weight-bold">+ <span id="variable_fees"></span> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row fees_str justify-content-center east_var_dis">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-9 text-left">
                                                    <p class="fnt_raleway font-weight-bold text-danger">EAST Discount(<span id="east_discount_percent"></span> %)</p>
                                                </div>
                                                <div class="col-3">
                                                    <p class="fnt_raleway text-right font-weight-bold text-danger">- <span id="east_discount_amt"></span> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row fees_str justify-content-center d-none">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-9 text-left">
                                                    <p class="fnt_raleway font-weight-bold">Final Variable Fee (B)</p>
                                                </div>
                                                <div class="col-3">
                                                    <p class="fnt_raleway text-right font-weight-bold">+ <span id="final_variable_fees"></span> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row fees_str justify-content-center">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-9 text-left">
                                                    <p class="fnt_raleway font-weight-bold">Total Fees</p>
                                                </div>
                                                <div class="col-3">
                                                    <p class="fnt_raleway text-right font-weight-bold">₹ <span id="final_total_fees"></span> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row fees_str justify-content-center">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-9 text-left">
                                                    <p class="fnt_raleway font-weight-bold">GST ( <span id="GST"></span> %)</p>
                                                </div>
                                                <div class="col-3">
                                                    <p class="fnt_raleway text-right font-weight-bold">+ <span id="GST_amt"></span> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row fees_str justify-content-center">
                                        <div class="col-md-8">
                                            <div class="form-group mb-0" style="position:relative;">
                                                <input type="text" class="form-control mt-3" id="promocode" placeholder="Please enter your promocode">
                                                <span class="promo_validate">Validate</span>                                            
                                            </div>
                                            <small id="promostatus" class="form-text"></small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 otpl my-3">
                                            <div class="row justify-content-center">
                                                <div class="col-md-5">
                                                    <p class="text-center fnt_vietnam mb-0"><b>Final Fee(One Time)<br>₹ <span class="otp"></span></b></p>
                                                </div>
                                                <div class="col-md-4 promodis_div" style="display:none;">
                                                    <p class="text-center text-danger fnt_vietnam mb-0"><b>Promo Dis.<br>- ₹ <span class="promodis"></span> </b></p>
                                                </div>
                                                <div class="col-md-3 text-center">
                                                    <a href="javascript:void(0)" class="btn btn-primary"id="btn_otp" style="padding: 0 5px;">Pay ₹  <span class="otpd"></span></a>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="col-md-12 otpl my-3">
                                            <div class="row justify-content-center">
                                                <div class="col-md-5">
                                                    <p class="text-center fnt_vietnam mb-0"><b>Final Fee(Part Payment)<br> ₹ <span class="pp"></span></b></p>
                                                </div>
                                                <div class="col-md-4 promodis_div" style="display:none;">
                                                    <p class="text-center text-danger fnt_vietnam mb-0"><b>Promo Dis.<br>- ₹ <span class="promodis"></span> </b></p>
                                                </div>
                                                <div class="col-md-3 text-center">
                                                    <p class="text-center fnt_vietnam mb-0">₹ <span class="ppd"></span></p>
                                                </div>
                                            </div>                                      
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row" style="border-bottom: 1px solid black;">
                                                <div class="col">
                                                    <p class="text-center font-weight-bold">Particulars</p>
                                                </div>
                                                <div class="col">
                                                    <p class="text-center font-weight-bold">Amount</p>
                                                </div>
                                                <div class="col">
                                                    <p class="text-center font-weight-bold">Action</p>
                                                </div>
                                            </div>
                                            <div class="row" id="installment_fees_html"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagediv pagebreak eight_page bg_1">
            <div class="print d-none">Print</div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pt-5">
                        <h1>STILL CONFUSED? :(</h1>
                        <h4 class="mt-3">NO WORRIES,<br>OUR TEAM OF COUNSELLORS AND EXPERTS ARE ALWAYS AT YOUR BECK AND CALL</h4>
                        <h4 class="mt-5">FEEL FREE TO</h4>
                        <h4> CALL US AT:</h4>
                        <p><a href="tel:+918585000292">+91-8585000292</a> / <a href="tel:+916290820498">+91-6290820498</a></p>
                        <h4 class="mt-5">MAIL US AT:</h4>
                        <!-- <h4 class="mt-5">BOOK A ONE-ON-ONE SESSION WITH US AT</h4> -->
                        <p><a href="mailto:contact@edudigm.in?subject=EAST Report">contact@edudigm.in</a></p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="/report/assets/images/pg_8_bottm.svg" class="w-50" alt="">
                    </div>
                </div>
            </div>
            
        </div>        
    </section>    
    <div class="indicator left" style="display: none;">
        <img src="/report/assets/images/left.svg" alt="">
    </div>
    <div class="indicator right" style="display: none;">
        <img src="/report/assets/images/right.svg" alt="">
    </div>
    <ul class="bullets" style="display: none;"></ul>
    <div class="modal" id="address_modal">
        <!-- <div class="modal-dialog modal-lg"> -->
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Payment Details (₹ <span id="modal_amt"></span>)</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-4" style="position:relative;">
                                <input type="text" class="form-control mb-4" id="name" placeholder="Please write your name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-4" style="position:relative;">
                                <input type="tel" class="form-control" id="mobile" placeholder="Enter your 10 digit mobile number" maxlength="10" minlength="10" onkeypress="return (event.charCode !=8 &amp;&amp; event.charCode ==0 || (event.charCode >= 48 &amp;&amp; event.charCode <= 57))" required="">
                                <small class="mb-4">We will share payment details here</small>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-4" style="position:relative;">
                                <input type="text" class="form-control" id="email" placeholder="Your email id, e.g. rohan@xyz.com">
                                <small class="mb-4">We will share payment details here</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <div class="error w-100"></div>
                <button type="button" class="btn btn-success paynow">Pay Now</button>
            </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="/report/assets/js/jquery-ui.min.js"></script>
    <script src="/report/assets/js/custom.js"></script>
    <script src="/report/assets/anychart/anychart-core.min.js"></script>
    <script src="/report/assets/anychart/anychart-cartesian.min.js"></script>
    <script src="/report/assets/anychart/anychart-base.min.js"></script>
    <script src="/report/assets/anychart/anychart-pyramid-funnel.min.js"></script>
    <script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>
    <script>
        var pathname = window.location.pathname;
        var resultid=pathname.substr(pathname.indexOf("/") + 13);
        var response;
        swa_html="";
        swa_arry="";       
        bt_html="";
        bt_arry=[];
        twa_html="";
        twa_unique_sub=[];
        schlshp_duration="";
        onetime_fees_html="";
        installment_fees_html="";
        var fees_response;
        var one_time_amt,part_pay_amt;
        var fina_otp,final_pp;
        prodDet = [];
        var payment_method;
        $(document).ready(function() {
            var heightss=window.screen.height-160;
            if(window.screen.width>768){
                $('#rightside').css("height",heightss)
            }            
            response=getreaponse();          
            if(response.response_code==200){
                $('.stu_name').html("Dear "+response.response_data.student_name);
                if(response.response_data.performance_text){
                    $('.student_comment').html(response.response_data.performance_text);
                }else{
                    $('.student_comment').html("We are please to inform you that your report has been generated.");
                }
                if(response.response_data.certificate.logo){
                    $('#school_logo').attr("src",response.response_data.certificate.logo);
                    $('#school_logo').show(100);
                }
                
                $('#name').html(response.response_data.student_name);
                $('.class').html(response.response_data.certificate.class);
                $('#date').html(response.response_data.certificate.exam_date);
                $('#performance').html(response.response_data.certificate.performance_type);
                $('#schlrshp_offr').html(response.response_data.scholarship_data.scholarship_percentage);                    
                swa();bt();twa();
                $('.loading').hide(500);
                $('.body-content,.indicator.right,.bullets').show(500);
                $("img").each(function () {
                    var $this = $(this);
                    this.onerror = function() {
                        $this.hide();
                    };
                });
            }else{
                alert("Sorry, We are unable to generate your report this time. Please try again.");
                location.reload();
            }
        });
        function swa() {
            var swa_reponse=response.response_data.subjectwiseanalysis;
            $.each(swa_reponse, function(index, value) {
                swa_html+='<tr>';
                swa_html+='<td>'+index.toUpperCase()+'</td>';
                var mo=value.marks_obtained;
                if(!mo){
                    mo="0";
                }
                var mm=value.maximum_marks;
                if(!mm){
                    mm="0";
                }
                var hm=value.heighest_marks;
                if(!hm){
                    hm="0";
                }
                var avg=value.average;
                if(!avg){
                    avg="0";
                }               
                
                var prcnt=value.percentage;
                if(!prcnt){
                    prcnt="0";
                }                
                var mo_prcnt=((mo/mm)*100).toFixed(2);
                var avg_prcnt=((avg/mm)*100).toFixed(2);
                var hm_prcnt=((hm/mm)*100).toFixed(2);
                swa_html+='<td>'+mo+'</td>';
                swa_html+='<td>'+avg+'</td>';
                swa_html+='<td>'+hm+'</td>';
                swa_html+='<td>'+mm+'</td>';
                swa_html+='<td>'+mo_prcnt+'</td>';
                swa_html+='</tr>';
                swa_arry+='["'+index.toUpperCase()+'", '+mo_prcnt+', '+avg_prcnt+', '+hm_prcnt+'],';
               
            });
            $('#swa_div').html(swa_html);
            swa_arry = swa_arry.replace(/,\s*$/, "");
            swa_chart();
        }
        function bt() {
            var bt_reponse=response.response_data.bloom_analysis;
            $.each(bt_reponse, function(index, value) {
                if(index !="Miscellaneous"){
                    bt_html+='<tr>';
                    bt_html+='<td>'+index.toUpperCase()+'</td>';
                    var mo=value.obtained;
                    if(!mo){
                        mo="0";
                    }                
                    var tot=value.total;
                    if(!tot){
                        tot="0";
                    }
                    bt_html+='<td>'+mo+'</td>';
                    bt_html+='<td>'+tot+'</td>';
                    if(tot!=0){
                        bt_html+='<td>'+((mo/tot)*100).toFixed(2)+'</td>';
                    }else{
                        bt_html+='<td>0</td>';
                    }                    
                    bt_html+='</tr>';
                    var prcent;
                    if(tot!=0){
                        var prcent=((mo/tot)*100);
                        if(prcent % 1 !=0){
                            prcent=prcent.toFixed(2);
                        }
                    }else{
                        var prcent=0;
                    }  
                   
                    bt_arry.push({
                        "name": index.toUpperCase(),
                        "value": prcent
                    });
                    $('#'+index.toUpperCase()).html(index.toUpperCase()+"("+prcent+")");
                }                
            });
            $('#bt_div').html(bt_html);
            bt_chart();
        }
        function twa() {
            var twa_reponse=response.response_data.topicwiseanalysis;
            $.each(twa_reponse, function(index, value) {
                twa_unique_sub.push(value.subject);
            });
            var unique_sub = twa_unique_sub.filter(onlyUnique);
            $.each(unique_sub, function(index, value) { 
                if(value!="NA"){
                    var subname=value;            
                    twa_html+='<div class="col-md-12">';
                    twa_html+='<p style="text-align:center;font-weight:bold;margin: 10px 0 5px 0;border-bottom:1px solid #000;">'+subname.toUpperCase()+'</p>';
                    twa_html+='</div>';
                    $.each(twa_reponse, function(i, v) {
                        var arry_sub_name=v.subject
                        if(subname==arry_sub_name){
                            twa_html+='<div class="col-4 mb-4 text-center">';
                            twa_html+=v.chaptername;
                            twa_html+='<p class="chapterstat">';
                            twa_html+='<span class="right"><i class="fas fa-check"></i> '+v.right+'</span>';
                            twa_html+='<span class="wrong"><i class="fas fa-times"></i> '+v.wrong+'</span>';
                            twa_html+='<span class="unatt"><i class="fab fa-uniregistry"></i> '+v.unattempted+'</span>';
                            twa_html+='</p>';
                            twa_html+='</div>';
                            twa_html+='<div class="col-8 mb-4">';
                            twa_html+='<div class="row">';
                            twa_html+='<div class="col-3 text-center" marks_obtain>'+v.marks_obtain+'</div class="col">';
                            twa_html+='<div class="col-3 text-center" average>'+v.average+'</div class="col">';
                            twa_html+='<div class="col-3 text-center" highest>'+v.highest+'</div class="col">';
                            //twa_html+='<div class="col text-center" maximum_marks>'+v.maximum_marks+'</div class="col">';
                            twa_html+='<div class="col-3 text-center" percentage>'+v.percentage+'</div class="col">';
                            twa_html+='</div>';
                            twa_html+='</div>';
                        }
                    });
                }                
            });

            $('#twa_div').html(twa_html);
        }
        function onlyUnique(value, index, self) {
            return self.indexOf(value) === index;
        }
        function swa_chart() {
            swa_arry='['+swa_arry+']';
            var dataSet = anychart.data.set(JSON.parse(swa_arry));
            var firstSeriesData = dataSet.mapAs({ x: 0, value: 1 });
            var secondSeriesData = dataSet.mapAs({ x: 0, value: 2 });
            var thirdSeriesData = dataSet.mapAs({ x: 0, value: 3 });
            var forthSeriesData = dataSet.mapAs({ x: 0, value: 4 });
            
            var chart = anychart.column();
            chart.animation(true);
            chart.title('SUBJECT WISE ANALYSIS');
            var series;
            var setupSeries = function (series, name) {
                series.name(name);
                series.selected().fill('#f48fb1 0.8').stroke('1.5 #c2185b');
            };
            series1 = chart.column(firstSeriesData);
            series1.xPointPosition(0.65);
            setupSeries(series1, 'Obtained');

            series2 = chart.column(secondSeriesData);
            series2.xPointPosition(0.45);
            setupSeries(series2, 'Average');

            series3 = chart.column(thirdSeriesData);
            series3.xPointPosition(0.25);
            setupSeries(series3, 'Highest');

            // series4 = chart.column(forthSeriesData);
            // series4.xPointPosition(0.85);
            // setupSeries(series4, 'Percentage');

            series1.normal().fill("#5fb4fc", 1).stroke('none');
            series2.normal().fill("#ffa050", 1).stroke('none');
            series3.normal().fill("#6a81ff", 1).stroke('none');
            // series4.normal().fill("#7b7b7b", 1).stroke('none');
            chart.barGroupsPadding(0.3);
            //chart.yAxis().labels().format('{%Value}{groupsSeparator: }');
            chart.yAxis().title('Marks');
            chart.xAxis().title('Subject');
            chart.legend().enabled(true).fontSize(13).padding([0, 0, 20, 0]);
            chart.interactivity().hoverMode('single');
            chart.tooltip().format('{%seriesName}: {%value}');
            chart.barsPadding(-0.5);
            chart.barGroupsPadding(2);
            chart.yScale().ticks().interval(10);
            chart.animation(true);
            // var seriesData_1 = data.mapAs({
            //     x: 0,
            //     value: 1
            // });
            // var seriesData_2 = data.mapAs({
            //     x: 0,
            //     value: 2
            // });
            // var seriesData_3 = data.mapAs({
            //     x: 0,
            //     value: 3
            // });
            // chart = anychart.column();
            // var series1 = chart.column(seriesData_1);
            // var series2 = chart.column(seriesData_2);
            // var series3 = chart.column(seriesData_3);
            // series1.normal().fill("#5fb4fc", 1);
            // series2.normal().fill("#ffa050", 1);
            // series3.normal().fill("#6a81ff", 1);
            // series1.stroke("none");
            // series2.stroke("none");
            // series3.stroke("none");
            // chart.barsPadding(-0.5);
            // chart.barGroupsPadding(2);
            // chart.yScale().ticks().interval(100);
            // chart.animation(true);
            chart.container("subwse_analys_column_chart");
            chart.draw();
        }
        function bt_chart() {
            chart = anychart.pyramid(bt_arry);
            chart.margin(10, '20%', 10, '20%');
            chart
                .legend()
                .enabled(false)
                .position('center')
                .itemsLayout('horizontal');
            chart.baseWidth('100%');
            chart.labels().position('outside-right').format('{%Value}');
            // chart.margin(10, '20%', 10, '20%');
            // chart.legend().enabled(true).position('center').itemsLayout('horizontal').align('top');
            chart.title("BLOOM'S TAXONOMY");
            // chart.baseWidth('100%');
            // chart.labels().position('outside-right').format('{%Value}');
            //chart.reversed(true);
            //chart.pointsPadding(5);
            // chart.connectorStroke({
            //     // set thickness of the connectors
            //     thickness: 2,
            //     // set color of the connectors
            //     color: '#444',
            //     // set dashed connectors. Dashes are 4px and gaps are 2px
            //     dash: '4 2'
            // });
            // place labels to the right
            //chart.labels().position('outside-right');
            // chart.connectorLength(90);
            // var chart = anychart.pyramid(bt_arry);
            // chart.baseWidth("50%");
            // configure labels
            //chart.labels().format("{%name}: {%yPercentOfTotal}%").position('outside-right');
            //chart.tooltip().format('{%value}');
            //chart.tooltip().format("{%yPercentOfTotal}% ({%value})\n\n{%custom_field}");
            // chart.background().enabled(true).fill('red 0');
            chart.animation(true);
            chart.background().fill("gold  0");
            chart.container("pyramidchart");
            chart.draw();
            $('#pyramidchart').css("height",window.screen.height-250);
        }        
        $('.pagediv').on('activeClassChange', function() {
            if ($(this).hasClass("ten_page")) {                
                scholarship_data(); 
                $('#promocode').val('');
                $('#promostatus').html('');
                $('#promocode').prop("disabled", false);               
            }
        });
        function scholarship_data() {
            schlshp_duration="";
            $.each(response.response_data.scholarship_data.durations, function(index, value) {
                if(index==0){
                    schlshp_duration+='<label class="mr-2" for="duration'+index+'"><input class="mr-1" type="radio" name="optradio" value="'+value.duration+'" id="duration'+index+'" checked>'+value.duration+' ('+value.classes+')</label>';
                }else{
                    schlshp_duration+='<label class="mr-2" for="duration'+index+'"><input class="mr-1" type="radio" name="optradio" value="'+value.duration+'" id="duration'+index+'">'+value.duration+' ('+value.classes+')</label>';
                }                
            });
            $('#duration').html(schlshp_duration);
            // $('#prog_name').html(response.response_data.scholarship_data.prog_name);
            $('#prog_name').html("Arjuna Gold Program");
            $('#course_name').html(response.response_data.scholarship_data.course_name);
            generatefees();            
        }
        function generatefees() {
            var val=$('input[name="optradio"]:checked').val();
            $('#loader').show();
            $('#fees_data').hide();
            setTimeout(function(){
                fees_response= getfeesdetails(val);
                if(fees_response.response_code==200){
                    var fixed_discount_percent=fees_response.response_data.fixed_discount_percent;
                    var east_discount_percent=fees_response.response_data.east_discount_percent;
                    var GST=fees_response.response_data.GST;
                    $('#final_total_fees').html(fees_response.response_data.final_fixed_fees+fees_response.response_data.final_variable_fees);
                    $('#fixed_fees').html(fees_response.response_data.fixed_fees);
                    if(fixed_discount_percent || fixed_discount_percent != "0"){
                        $('#fixed_discount_percent').html(fixed_discount_percent); 
                        $('.east_fix_dis').show();
                    }else{
                        $('.east_fix_dis').hide();
                    }
                    $('#fixed_discount_percent').html(fixed_discount_percent);                    
                    $('#final_fixed_fees').html(fees_response.response_data.final_fixed_fees);
                    $('#variable_fees').html(fees_response.response_data.variable_fees);
                    if(east_discount_percent || east_discount_percent != "0"){
                        $('#east_discount_percent').html(east_discount_percent); 
                        $('.east_var_dis').show();                   
                    }else{
                        $('.east_var_dis').hide();
                    }               
                    $('#final_variable_fees').html(fees_response.response_data.final_variable_fees);
                    $('#GST').html(GST);
                    $('#fixed_discount_amt').html(fees_response.response_data.fixed_discount_amount);
                    $('#east_discount_amt').html(fees_response.response_data.east_discount_amount);
                    $('#GST_amt').html(fees_response.response_data.gst_amount);
                    one_time_amt=fees_response.response_data.final_fees_one_time;
                    part_pay_amt=fees_response.response_data.final_fees_part_payment;
                    $('.otp,.otpd').html(one_time_amt);
                    $('.pp,.ppd').html(part_pay_amt);
                    fina_otp=one_time_amt;
                    final_pp=fees_response.response_data.installment_amount;
                    // onetime_fees_html="";
                    // onetime_fees_html+='<tr><td>One Time Payment</td><td>₹ '+fees_response.response_data.final_fees_one_time+'</td><td><a href="javascript:void(0)">Pay Now</a></td></tr>';
                    $('#onetime_fees_html').html(onetime_fees_html);
                    installment_fees_html="";
                    for (let index = 0; index < fees_response.response_data.no_of_installment; index++) {
                        var installmentno=index+1
                        if(index == 0){
                            installment_fees_html+='<div class="col-md-12 border-bottom">';
                            installment_fees_html+='<div class="row">';
                            installment_fees_html+='<div class="col-4 pt-2">';
                            installment_fees_html+='<p class="text-center">Installment '+installmentno+'</p>';
                            installment_fees_html+='</div>';
                            installment_fees_html+='<div class="col-4 pt-2">';
                            installment_fees_html+='<p class="text-center">₹ '+fees_response.response_data.installment_amount+'</p>';
                            installment_fees_html+='</div>';
                            installment_fees_html+='<div class="col-4 pt-2">';
                            installment_fees_html+='<p class="text-center"><a href="javascript:void(0)" id="btn_pp" style="padding: 0 5px;" class="btn btn-primary">Pay Now</a></p>';
                            installment_fees_html+='</div>';
                            installment_fees_html+='</div>';
                            installment_fees_html+='</div>';
                        }else{
                            installment_fees_html+='<div class="col-md-12 border-bottom">';
                            installment_fees_html+='<div class="row">';
                            installment_fees_html+='<div class="col-4 pt-2">';
                            installment_fees_html+='<p class="text-center">Installment '+installmentno+'</p>';
                            installment_fees_html+='</div>';
                            installment_fees_html+='<div class="col-4 pt-2">';
                            installment_fees_html+='<p class="text-center">₹ '+fees_response.response_data.installment_amount+'</p>';
                            installment_fees_html+='</div>';
                            installment_fees_html+='<div class="col-4 pt-2">';
                            installment_fees_html+='<p class="text-center"><a class="btn btn-secondary" style="padding: 0 5px;" href="javascript:void(0)">Pay Now</a></p>';
                            installment_fees_html+='</div>'; 
                            installment_fees_html+='</div>'; 
                            installment_fees_html+='</div>';                     
                        }
                    }
                    
                    $('#installment_fees_html').html(installment_fees_html);
                } 
                $('#loader').hide();
                $('#fees_data').show();
            }, 500);            
        }
    </script>
    <script>
        $(document).on('change','input[name=optradio]',function(){
            $('#promocode').val('');
            $('#promostatus').html('');
            $('#promocode').prop("disabled", false);
            $('.promodis_div').hide();
            generatefees();
        });
    </script>
    <script>
        $('.print').click(function () {
            $('.print,.indicator,.bullets').hide();
            $('#pyramidchart').css({"margin":"auto","position": "initial","top": "initial","left": "initial","transform": "none",});
            $('.seventh_page table,.ten_page #rightside').css({"position": "initial","top": "initial","left": "initial","transform": "none",});
            $('.pagediv').show();
            $('.third_page h4').css("margin-top","100px");
            $('#subwse_analys_column_chart').css({"height":"600px","width":"100%"});
            $('.third_page,.sixth_page').find('.col-md-6').removeClass('col-md-6').addClass('col-md-12');
            $('.ten_page').find('.col-md-5').removeClass('col-md-5').addClass('col-md-12');
            $('.ten_page').find('#rightside').removeClass('col-md-6').addClass('col-md-12');
            $('.seventh_page').find('.col-md-8').removeClass('col-md-8').addClass('col-md-12');
            $('.seventh_page table,.ten_page #rightside').css({"height":"100%","display": "table"})
            $('.sixth_page').css({"background-image":"none","background-color":"#ffffff"})
            $('.third_page').removeAttr("style").show();
            $('.seventh_page').removeAttr("style").show();
            setTimeout(function(){ print(); }, 500);            
        });
        $(document).on('click','#btn_otp',function(){
            console.log(fina_otp);
            payment_method=1;
            initiate_order(fina_otp);            
        });
        $(document).on('click','#btn_pp',function(){
            console.log(final_pp);
            payment_method=2;
            initiate_order(final_pp);
        });
        $('.promo_validate').click(function () {
            var course_id = response.response_data.scholarship_data.course_id;
            var promocode = $('#promocode').val();
            if(promocode){
                $('#loader').show();
                $('#fees_data').hide();
                setTimeout(function(){
                    var promo_response = getPromodet(course_id,promocode);
                    if(promo_response.response_code==200){
                        $('#promostatus').html("Promocode Applied Successfully").addClass("text-success").removeClass("text-danger");
                        var discount_amt=promo_response.response_data.amount;
                        $('#promocode').prop("disabled", true);
                        $('.promodis').html(discount_amt);
                        $('.promodis_div').show();
                        fina_otp=one_time_amt-discount_amt;
                        $('.otpd').html(fina_otp);                    
                        $('.ppd').html(part_pay_amt-discount_amt);
                        var installment_dis=(discount_amt/(fees_response.response_data.no_of_installment)).toFixed(2);
                        installment_fees_html="";
                        for (let index = 0; index < fees_response.response_data.no_of_installment; index++) {
                            var installmentno=index+1
                            if(index == 0){
                                installment_fees_html+='<div class="col-md-12 border-bottom">';
                                installment_fees_html+='<div class="row">';
                                installment_fees_html+='<div class="col pt-2">';
                                installment_fees_html+='<p class="text-center">Installment '+installmentno+'</p>';
                                installment_fees_html+='</div>';
                                var amt=part_pay_amt-discount_amt;
                                final_pp=Math.round(fees_response.response_data.installment_amount-installment_dis);
                                installment_fees_html+='<div class="col pt-2">';
                                installment_fees_html+='<p class="text-center">₹ '+final_pp+'</p>';
                                installment_fees_html+='</div>';
                                // installment_fees_html+='<div class="col pt-2">';
                                // installment_fees_html+='<p class="text-center">₹ '+installment_dis+'</p>';
                                // installment_fees_html+='</div>';
                                installment_fees_html+='<div class="col pt-2">';
                                installment_fees_html+='<p class="text-center"><a href="javascript:void(0)" id="btn_pp" style="padding: 0 5px;" class="btn btn-primary">Pay Now</a></p>';
                                installment_fees_html+='</div>';
                                installment_fees_html+='</div>';
                                installment_fees_html+='</div>';
                            }else{
                                installment_fees_html+='<div class="col-md-12 border-bottom">';
                                installment_fees_html+='<div class="row">';
                                installment_fees_html+='<div class="col pt-2">';
                                installment_fees_html+='<p class="text-center">Installment '+installmentno+'</p>';
                                installment_fees_html+='</div>';
                                var amt=part_pay_amt-discount_amt;
                                final_pp=Math.round(fees_response.response_data.installment_amount-installment_dis);
                                installment_fees_html+='<div class="col pt-2">';
                                installment_fees_html+='<p class="text-center">₹ '+final_pp+'</p>';
                                installment_fees_html+='</div>';                            
                                // installment_fees_html+='<div class="col pt-2">';
                                // installment_fees_html+='<p class="text-center">₹ '+installment_dis+'</p>';
                                // installment_fees_html+='</div>';
                                installment_fees_html+='<div class="col pt-2">';
                                installment_fees_html+='<p class="text-center"><a class="btn btn-secondary" style="padding: 0 5px;" href="javascript:void(0)">Pay Now</a></p>';
                                installment_fees_html+='</div>'; 
                                installment_fees_html+='</div>'; 
                                installment_fees_html+='</div>';                     
                            }
                        }
                        $('#installment_fees_html').html(installment_fees_html);                    
                    }else{
                        $('#promostatus').html(promo_response.response_msg).addClass("text-danger").removeClass("text-success");
                    }
                $('#loader').hide();
                $('#fees_data').show();
                }, 500);  
            }else{
                $('#promostatus').html("Please write your promocode").addClass("text-danger").removeClass("text-success");
            }
            
        });
        function initiate_order(amt) {
            $('#modal_amt').html(amt)
            $('#address_modal').modal('show');
            var name = response.response_data.student_name;
            var mobile = response.response_data.mobile;
            if(name){
                $('#address_modal #name').val(name);
            }
            if(mobile){
                $('#address_modal #mobile').val(mobile);
            }            
        }
        $(document).on('click','.paynow',function(){
            prodDet=[];
            var course_id = response.response_data.scholarship_data.course_id;
            var eastcode = response.response_data.east_code;
            var discount_code = $('#promocode').val();

            var name = $('#address_modal #name').val();
            var mobile = $('#address_modal #mobile').val();
            var email = $('#address_modal #email').val();
            if(name && mobile && email){
                $('.modal-footer .error').html('');
                var duration=$('input[name="optradio"]:checked').val();
                if(discount_code){
                    prodDet.push({
                        "item_id": course_id,
                        "item_type": "course",
                        "item_quantity": "1",
                        "discount_code": discount_code,
                        "east_code": eastcode,
                        "duration":duration
                    });
                }else{
                    prodDet.push({
                        "item_id": course_id,
                        "item_type": "course",
                        "item_quantity": "1",
                        "east_code": eastcode,
                        "duration":duration
                    });
                }            
                var finalData = {
                    "userDetails": {
                        "user_name": name,
                        "user_email": email,
                        "user_phoneNo": mobile,
                        "user_addres": course_id,
                        "user_pinCode": "000000"
                    },
                    "prodDetails": prodDet,
                    "only_reg": '1',
                    "payment_method":payment_method
                }
                var cartservice = totgetSubtotal(finalData);
                if (cartservice.response_code == 200) {
                    bolt.launch({
                        key: cartservice.response_data.key,
                        txnid: cartservice.response_data.txn_id,
                        amount: cartservice.response_data.subtotal,
                        productinfo: cartservice.response_data.pinfo,
                        hash: cartservice.response_data.hash,
                        firstname: name,
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

            }else{
                $('.modal-footer .error').html('<span class="text-danger">All Above Fields Are Mandatory</span>');
            }
            

        });
    </script>  
    <script>
        (function () {
            var beforePrint = function () {
                //alert('Functionality to run before printing.');
            };
            var afterPrint = function () {
                location.reload();
            };
            if (window.matchMedia) {
                var mediaQueryList = window.matchMedia('print');

                mediaQueryList.addListener(function (mql) {
                    //alert($(mediaQueryList).html());
                    if (mql.matches) {
                        beforePrint();
                    } else {
                        afterPrint();
                    }
                });
            }
            window.onbeforeprint = beforePrint;
            window.onafterprint = afterPrint;
        }());
    </script>  
    <script>
        $(window).on("resize", function() {
            var width = window.screen.width + 17;
            if (width >= 576) {
                $('.table.table-bordered').removeClass('table-responsive');
            } else {
                $('.table.table-bordered').addClass('table-responsive');
            }
        }).resize();
    </script>
    <script>
        function getreaponse() {
            var data = $.parseJSON($.ajax({
                type: "GET",
                url: 'https://crm.edudigm.com/api/east/get-east-new-report/'+resultid,
                dataType: "json",
                async: false
            }).responseText);
            return data;
            //return 	{"response_code":200,"response_msg":"East Report","response_data":{"student_name":"K. Ram Charan","performance_text":"<p class='fnt_vietnam'>You were very promising and showed tremendous potential, but seems you need to work harder.</p><p class='fnt_vietnam'>But remember, there's always room for improvement.So chin up! We are here to nurture and help you become the best version of yourself</p>","subjectwiseanalysis":{"aptitude":{"marks_obtained":5,"average":15,"heighest_marks":54,"maximum_marks":200,"percentage":5},"physics":{"marks_obtained":5,"average":5,"heighest_marks":20,"maximum_marks":40,"percentage":13},"chemistry":{"marks_obtained":0,"average":2,"heighest_marks":17,"maximum_marks":40,"percentage":0},"biology":{"marks_obtained":0,"average":4,"heighest_marks":15,"maximum_marks":40,"percentage":0},"mathematics":{"marks_obtained":10,"average":10,"heighest_marks":39,"maximum_marks":80,"percentage":13},"total":{"marks_obtained":20,"average":35,"heighest_marks":101,"maximum_marks":400,"percentage":5}},"topicwiseanalysis":[{"subject":"NA","chaptername":"NA","right":12,"wrong":39,"unattempted":0,"marks_obtain":9,"average":15.8,"highest":54,"maximum_marks":"204","percentage":4},{"subject":"Physics","chaptername":"Motion & Measurement","right":1,"wrong":4,"unattempted":0,"marks_obtain":0,"average":2.37,"highest":10,"maximum_marks":"20","percentage":0},{"subject":"Physics","chaptername":"Light Shadow & reflection","right":2,"wrong":3,"unattempted":0,"marks_obtain":5,"average":3.46,"highest":11,"maximum_marks":"20","percentage":25},{"subject":"Chemistry","chaptername":"Changes in the World Around Us","right":0,"wrong":3,"unattempted":0,"marks_obtain":-3,"average":0.31,"highest":7,"maximum_marks":"12","percentage":-25},{"subject":"Chemistry","chaptername":"Fabric and Fibre","right":1,"wrong":2,"unattempted":0,"marks_obtain":2,"average":1.14,"highest":8,"maximum_marks":"12","percentage":17},{"subject":"Chemistry","chaptername":"Pure and Mixed Substances","right":1,"wrong":1,"unattempted":0,"marks_obtain":3,"average":0.5,"highest":4,"maximum_marks":"8","percentage":38},{"subject":"Chemistry","chaptername":"Nature of Matter","right":0,"wrong":1,"unattempted":0,"marks_obtain":-1,"average":0.36,"highest":4,"maximum_marks":"4","percentage":-25},{"subject":"Chemistry","chaptername":"Water","right":0,"wrong":1,"unattempted":0,"marks_obtain":-1,"average":0.04,"highest":4,"maximum_marks":"4","percentage":-25},{"subject":"Science","chaptername":"Food","right":0,"wrong":1,"unattempted":0,"marks_obtain":-1,"average":-0.55,"highest":4,"maximum_marks":"4","percentage":-25},{"subject":"Science","chaptername":"Food","right":1,"wrong":0,"unattempted":0,"marks_obtain":4,"average":1.12,"highest":4,"maximum_marks":"4","percentage":100},{"subject":"Biology","chaptername":"Components of Food","right":0,"wrong":4,"unattempted":0,"marks_obtain":-4,"average":1.3,"highest":11,"maximum_marks":"16","percentage":-25},{"subject":"Biology","chaptername":"Getting to Know Plants","right":0,"wrong":3,"unattempted":0,"marks_obtain":-3,"average":2.8,"highest":12,"maximum_marks":"12","percentage":-25},{"subject":"Mathematics","chaptername":"Natural And Integer Numbers","right":2,"wrong":8,"unattempted":0,"marks_obtain":0,"average":5.05,"highest":24,"maximum_marks":"40","percentage":0},{"subject":"Mathematics","chaptername":"Factorization","right":0,"wrong":1,"unattempted":0,"marks_obtain":-1,"average":0.58,"highest":4,"maximum_marks":"4","percentage":-25},{"subject":"Mathematics","chaptername":"Linear Equation","right":0,"wrong":2,"unattempted":0,"marks_obtain":-2,"average":2.77,"highest":8,"maximum_marks":"8","percentage":-25},{"subject":"Mathematics","chaptername":"Divisibility","right":2,"wrong":0,"unattempted":0,"marks_obtain":8,"average":3.52,"highest":8,"maximum_marks":"8","percentage":100},{"subject":"Mathematics","chaptername":"Highest Common Factor","right":0,"wrong":1,"unattempted":0,"marks_obtain":-1,"average":1.05,"highest":4,"maximum_marks":"4","percentage":-25},{"subject":"Mathematics","chaptername":"Least Common Multiple","right":1,"wrong":0,"unattempted":0,"marks_obtain":4,"average":1.11,"highest":4,"maximum_marks":"4","percentage":100},{"subject":"Mathematics","chaptername":"Properties Of Numbers","right":0,"wrong":1,"unattempted":0,"marks_obtain":-1,"average":0.11,"highest":4,"maximum_marks":"4","percentage":-25},{"subject":"Mathematics","chaptername":"Basic Algebra","right":1,"wrong":1,"unattempted":0,"marks_obtain":3,"average":1.08,"highest":8,"maximum_marks":"8","percentage":38}],"bloom_analysis":{"Remember":{"obtained":10,"total":60},"Understand":{"obtained":-9,"total":56},"Apply":{"obtained":8,"total":28},"Analyse":{"obtained":9,"total":24},"Create":{"obtained":2,"total":12},"Evaluate":{"obtained":-5,"total":20},"Miscellaneous":{"obtained":5,"total":200}},"certificate":{"logo":"https://s3.ap-south-1.amazonaws.com/eklavya.edudigm.in/","class":"VI","performance_type":"Good","exam_date":"13-04-2021"},"scholarship_data":{"scholarship_percentage":20,"course_id":80,"course_name":"CBSE Foundation 7","durations":[{"duration":"1 year","classes":"7"},{"duration":"2 years","classes":"7 to 8"},{"duration":"4 years","classes":"7 to 10"},{"duration":"6 years","classes":"7 to 12"}]}}}
        }
        function getfeesdetails(val) {
            var data = $.parseJSON($.ajax({
                type: "POST",
                url: 'https://crm.edudigm.com/api/website/get-fees?east_result_id='+resultid+'&duration='+val,
                dataType: "json",
                async: false
            }).responseText);
            return data;
            //return 	{"response_code":200,"response_msg":"Fees Fetched successfully","response_data":{"fixed_fees":"24000","fixed_discount_percent":10,"fixed_discount_amount":2400,"final_fixed_fees":21600,"variable_fees":"42000","east_discount_percent":20,"east_discount_amount":8400,"final_variable_fees":33600,"GST":18,"gst_amount":9936,"final_fees_one_time":65136,"final_fees_part_payment":69000,"no_of_installment":3,"installment_amount":23000}}
        }
        function getPromodet(course_id,promocode) {
            var data = $.parseJSON($.ajax({
                type: "POST",
                url: 'https://crm.edudigm.com/api/website/apply-code?course_id='+course_id+'&discount_code='+promocode,
                dataType: "json",
                async: false
            }).responseText);
            return data;
        }
        function totgetSubtotal(datas) {
            var data = $.parseJSON($.ajax({
                type: "POST",
                url: 'https://crm.edudigm.com/api/initiate-order',
                data: datas,
                dataType: "json",
                async: false,
            }).responseText);
            return data;
        }
    </script>
</body>
</html>
<!-- <div class="pagediv fourth_page">
            <div class="container-fluid">
                <div class="row paddingforpage">
                    <div class="col-md-6">
                        <div id="subwse_analys_column_chart" style="height: 400px;"></div>
                    </div>
                    <div class="col-md-6">
                        <h4>Consistently analysing your permormance gives you a better insight as to where you stand and where your goals lie</h4>
                        <img src="/report/assets/images/pg_4_table.svg" alt="">
                    </div>
                </div>
            </div>
        </div> -->
        
    <!-- <script>
        var data = [{
                x: "Physics",
                value: 637166
            },
            {
                x: "Chemistry",
                value: 721630
            },
            {
                x: "Math",
                value: 148662
            },
            {
                x: "Biology",
                value: 78662
            },
            {
                x: "Total",
                value: 90000
            }
        ];
        chart = anychart.pie(data);
        chart.fill("aquastyle");
        chart.radius("100%");
        chart.startAngle(90);
        chart.animation(true);
        //chart.container("subwse_analys_pie_chart");
        //chart.draw();
    </script> -->