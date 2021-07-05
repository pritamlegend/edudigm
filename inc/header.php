<!DOCTYPE html>
<!--[if lt IE 7]>      
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
   <![endif]-->
<!--[if IE 7]>         
   <html class="no-js lt-ie9 lt-ie8">
      <![endif]-->
<!--[if IE 8]>         
      <html class="no-js lt-ie9">
         <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<?php $baseUrl= "https://www.edudigm.in/" ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $baseUrl ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl ?>assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo $baseUrl ?>assets/css/responsive.css">
    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '334779228153723'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=334779228153723&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
</head>
<style>
.menu_blink_back {
    -webkit-animation: blink 2s infinite;
    /* Safari 4+ */
    -moz-animation: blink 2s infinite;
    /* Fx 5+ */
    -o-animation: blink 2s infinite;
    /* Opera 12+ */
    animation: blink 2s infinite;
    /* IE 10+, Fx 29+ */
}

@-webkit-keyframes blink {

    0%,
    49% {
        border: 3px solid #002a38;
        color: #f9cc5d !important;
    }

    50%,
    100% {
        border: 3px solid #f9cc5d;
        color: #002a38 !important;
    }
}
</style>

<body>
    <header>
        <div class="top-menu py-2">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="s-link">
                            <a class="fab fa-facebook-f" href="https://www.facebook.com/edudigm.education/"></a>
                            <a class="fab fa-linkedin-in"
                                href="https://www.linkedin.com/company/edudigm-education-services-private-limited/"></a>
                            <a class="fab fa-instagram" href="https://www.instagram.com/edudigm/"></a>
                            <a class="fab fa-youtube"
                                href="https://www.youtube.com/channel/UCzN6m3nzuhGEVaDGLI8peQg/videos"></a>
                            <a class="edu-mail" href="mailto:contact@edudigm.in">contact@edudigm.in</a>
                        </div>
                    </div>
                    <div class="col-md-5">

                    </div>
                    <div class="col-md-3 m-auto text-center">
                        <a class="" style="padding: 0;" href="cart">
                            <span class="fa-stack fa-2x has-badge" id="cart-data" data-count="0">
                                <i class="fas fa-shopping-cart fa-stack"></i>
                            </span>
                        </a>
                        <!-- <a href="" id="cart-data" data-count="0"><i class="fas fa-shopping-cart cart-data-count mx-3 fa-lg font-color position-relative"></i></a> -->
                        <a href="<?php echo $baseUrl ?>exam/login"><img src="assets/images/inc/avtar-with-pc.png" width="40" alt=""></a>
                        <a href="http://www.exams.edudigm.in/" class="font-color">Login to Exam Portal</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigation-w3ls">
            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-nav">
                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler mx-auto" data-target="#navbarSupportedContent" data-toggle="collapse"
                    type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-2 m-auto">
                                <a href="<?php echo $baseUrl ?>"><img alt="" class="sticky-logo"
                                        src="http://www.edudigm.in/assets/images/logo.png"></a>
                            </div>
                            <div class="col-lg-10 m-auto">
                                <ul class="navbar-nav justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="<?php echo $baseUrl ?>aboutus">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="<?php echo $baseUrl ?>courses">Courses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="<?php echo $baseUrl ?>careers">Careers</a>
                                    </li>
                                    <!-- <li class="nav-item menu_blink_back">
                                        <a class="nav-link text-white" href="<?php echo $baseUrl ?>exam/login">Exam Portal</a>
                                    </li> -->
                                    <!-- <ul class="main-navigation">
                                        <li><a href="<?php echo $baseUrl ?>courses">Courses <i aria-hidden="true" class="fa fa-caret-down"></i></a>
                                            <ul class="first-child">
                                                <li>
                                                    <a href="<?php echo $baseUrl ?>#">Engineering</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $baseUrl ?>#">Medical</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $baseUrl ?>#">Foundation</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                    <!-- <li class="nav-item">
                                        <a class="nav-link text-white" href="<?php echo $baseUrl ?>#">EAST</a>
                                    </li> -->
                                    <!-- <li class="nav-item menu_blink_back">
                                        <a class="nav-link text-white" href="<?php echo $baseUrl ?>#">Exam Portal</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="<?php echo $baseUrl ?>testimonial">Testimonial</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="<?php echo $baseUrl ?>publication">Publications</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link text-white" href="<?php echo $baseUrl ?>school-directory">School Directory</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="<?php echo $baseUrl ?>success-stories">Success Stories</a>
                                    </li>
                                    <!-- <ul class="main-navigation">
                                        <li><a class="nav-link text-white" href="<?php echo $baseUrl ?>udayerpathey">Udayer Pathey <i aria-hidden="true" class="fa fa-caret-down"></i></a>
                                            <ul class="first-child">
                                                <li>
                                                    <a class="nav-link text-white" href="<?php echo $baseUrl ?>udayerpathey">About</a>
                                                </li>
                                                <li>
                                                    <a class="nav-link text-white" href="<?php echo $baseUrl ?>udayerpathey-student">Student</a>
                                                </li>
                                                <li>
                                                    <a class="nav-link text-white" href="<?php echo $baseUrl ?>udayerpathey-others">Others</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                    <!-- <li class="nav-item">
                                        <a class="nav-link text-white" href="<?php echo $baseUrl ?>discussionforum">Discussion Forum</a>
                                    </li> -->
                                    <!-- <li class="nav-item">
                                        <a class="nav-link text-white" href="<?php echo $baseUrl ?>#">Success Stories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="<?php echo $baseUrl ?>#">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="<?php echo $baseUrl ?>#">Careers</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="<?php echo $baseUrl ?>contactus">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>