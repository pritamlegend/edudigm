<?php include 'inc/header.php'; ?>
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
        ;
    }
</style>
    <div class="about-us-details">
    
        <section class="content-team">
            <div class="container-fluid">
                <div class="row m-auto justify-content-center">
                    <div class="col-md-12">
                        <div class="content-team-heading py-3 my-4">
                            <h2 class="text-center text-uppercase font-weight-bold ">Student Success & Delights</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="others-comment pb-5">
            <div class="container">
                <div class="row m-auto">
                    <div class="col-md-4">
                        <div class="content-team-img-left text-center my-2">
                            <img src="assets/images/about-us-details/JA.jpg" class="img-fluid w-50 rounded-circle global-box-shadow cyan" alt="">
                        </div>
                    </div>
                    <div class="col-md-8"></div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5 text-center">
                                <div class="others-comment-heading-left rounded py-1 mt-4 mb-2 global-box-shadow cyan-bg">
                                    <span>Jayita Aich</span>
                                </div>
                            </div>
                            <div class="col-md-7"></div>
                            <div class="col-md-12">
                                <div class="others-comment-details-left rounded my-2 global-box-shadow cyan-bg">
                                    <p class="text-justify">Jayita has been working in the Edudigm headquarters in Kolkata for the last year. She believes in learning new things every single day,in that case Google is her best friend. Her technical skills are backed by her bachelors degree in Computer Science. Her calm demeanor is a perfect addition to her passion of counselling and motivating students to work towards their dreams and goals."You Can not believe in god, untill you believe in yourself"----- Swami Vivekananda <br> Like wise Jayita also believe in herself and her dedication towards her work.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-auto">
                    <div class="col-md-8"></div>
                    <div class="col-md-4">
                        <div class="content-team-img-right text-center my-2">
                            <img src="assets/images/about-us-details/AM.jpg" class="img-fluid w-50 rounded-circle global-box-shadow red" alt="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-7"></div>
                            <div class="col-md-5 text-center">
                                <div class="others-comment-heading-right rounded py-1 my-2 global-box-shadow red-bg">
                                    <span>Aparupa Maitra</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="others-comment-details-right rounded my-2 global-box-shadow red-bg">
                                    <p class="text-justify">Aparupa believes that knowledge and the wisdom that comes with it are the most important things in building human character. She has a Master's Degree in History from Calcutta University. She is incredibly passionate about her work through which she helps students aim high and achieve higher. You will never find her without a smile on her face.
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
    <script src="assets/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js "></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/SmoothScroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
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
        // autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>

</html>