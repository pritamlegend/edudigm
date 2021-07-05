<title>Edudigm || Arjuna</title>
<?php include 'inc/header.php'; ?>
<div class="udayerpathey">
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
                        <a href="" data-target="#kanyashree_about" data-toggle="tab"
                            class="nav-link small text-uppercase active">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#kanyashree_mentors" data-toggle="tab"
                            class="nav-link small text-uppercase">Mentors</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#kanyashree_faculty" data-toggle="tab"
                            class="nav-link small text-uppercase">Faculty</a>
                    </li>
                </ul>
                <div id="tabsContent" class="tab-content">
                    <div id="kanyashree_about" class="tab-pane fade active show">
                        <div class="py-5 px-5">
                            <p>
                                “Arjuna” programs are designed to provide students with holistic guidance leading to 360
                                degree
                                transformation . The program includes classroom teaching by our mentors along with tests
                                conducted
                                at regular intervals covering all examination patterns (school and competitive).
                                Students progress
                                is tracked through weekly grading of their assignments and preparation before coming to
                                the classes.
                                Access to their E-learning platform enables students to study notes, watch videos, take
                                quizes and
                                ask questions on our discussion forum. Class workbooks standardize the notes that the
                                students take
                                in the classes and revision chart book enable quick and through revision before exams.
                                Classrooms
                                are equipped with ACs audio-visual facilities to create a comfortable environment where
                                learning
                                becomes fun, interesting, and engaging . Regular seminars and workshops are conducted on
                                study
                                techniques, career opportunities , and motivation for both parents and students to
                                create a positive
                                and focused perspective.<br><br>
                                The Arjuna program is offered only Edudigm study centres and at select partner
                                schools.<br><br>
                                Offerings:- Classroom, Tests,E-Learning, Events ,Publications.
                            </p>
                        </div>
                    </div>
                    <div id="kanyashree_mentors" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12 px-5 py-5 text-center">
                                <div class="mentor-faculty-image">
                                    <img src="assets/images/kanyashree/Rajiv.jpg" alt="">
                                    <h2 class="text-center font-weight-bold pt-3">
                                        Rajiv Agarwal
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="kanyashree_faculty" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-6 px-5 py-5 text-center">
                                <div class="mentor-faculty-image">
                                    <img src="assets/images/arjuna/manishs.jpg" alt="">
                                    <h2 class="text-center font-weight-bold pt-3">
                                        Manish Shankar
                                    </h2>
                                </div>
                            </div>
                            <div class="col-md-6 px-5 py-5 text-center">
                                <div class="mentor-faculty-image">
                                    <img src="assets/images/arjuna/AmritaRoy.jpg" alt="">
                                    <h2 class="text-center font-weight-bold pt-3">
                                        Amrita Roy
                                    </h2>
                                </div>
                            </div>
                            <div class="col-md-6 px-5 py-5 text-center">
                                <div class="mentor-faculty-image">
                                    <img src="assets/images/arjuna/Amit-Mazumder.jpg" alt="">
                                    <h2 class="text-center font-weight-bold pt-3">
                                        Amit Mazumder
                                    </h2>
                                </div>
                            </div>
                            <div class="col-md-6 px-5 py-5 text-center">
                                <div class="mentor-faculty-image">
                                    <img src="assets/images/arjuna/vijay.jpg" alt="">
                                    <h2 class="text-center font-weight-bold pt-3">
                                        Vijay
                                    </h2>
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

</html>