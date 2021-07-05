<title>Edudigm || Arjuna Student</title>
<?php include 'inc/header.php'; ?>
<style>
#accordion-2 .btn-link {
    font-weight: 400;
    color: #ffffff;
    background-color: #002a38;
    border-radius: 4px 4px 0px 0px;
}

#accordion-2 span {
    font-size: unset;
}

#accordion-2 .btn-link.collapsed:hover::after {
    color: #fff;
}

#accordion-2 .btn-link.collapsed:after {
    content: "\f0fe";
    color: #002a38;
}

#accordion-2 .btn-link:after {
    font-family: FontAwesome;
    content: "\f146";
    position: absolute;
    right: 8px;
    top: 20px;
    transform: translate(0, -50%);
    font-size: 20px;
    padding: 0 9px;
    z-index: 9;
}

#accordion-2 .results h1 {
    font-size: 27px;
    margin-bottom: 20px;
}
</style>
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
                        <a href="" data-target="#kanyashree_student" data-toggle="tab"
                            class="nav-link small text-uppercase active">student</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#kanyashree_exam" data-toggle="tab"
                            class="nav-link small text-uppercase">exam</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#kanyashree_class" data-toggle="tab"
                            class="nav-link small text-uppercase">Class</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#kanyashree_schedule" data-toggle="tab"
                            class="nav-link small text-uppercase">schedule</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#kanyashree_deliverables" data-toggle="tab"
                            class="nav-link small text-uppercase">deliverables</a>
                    </li>
                </ul>
                <div id="tabsContent" class="tab-content">
                    <div id="kanyashree_student" class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-md-12 p-5">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td><b>STUDENT NAME</b></td>
                                            <td><b>CLASS</b></td>
                                            <td><b>COURSE</b></td>
                                            <!-- <td><b>SCHOOL</b></td> -->
                                        </tr>
                                        <!-- <tr>
                                 <td>Asmit Bhattacharya</td>
                                 <td>XI</td>
                                 <td>ARPTE11</td>
                                 <td>The Heritage School</td>
                                 </tr>
                                 <tr>
                                 <td>AKANSHA PAL</td>
                                 <td>XI</td>
                                 <td>ARPTM11</td>
                                 <td>The Heritage School</td>
                                 </tr> -->
                                        <!-- <tr>
                                 <td>Devjyoti Dutta</td>
                                 <td>XI</td>
                                 <td>ARPTM11</td>
                                 <td>The Heritage School</td>
                                 </tr> -->
                                        <tr>
                                            <td>Dishani Sarkar</td>
                                            <td>XI</td>
                                            <td>ARPTM11</td>
                                            <!-- <td>The Heritage School</td> -->
                                        </tr>
                                        <tr>
                                            <td>Ditsa Majumder</td>
                                            <td>XI</td>
                                            <td>ARPTE11</td>
                                            <!-- <td>The Heritage School</td> -->
                                        </tr>
                                        <tr>
                                            <td>Divija Kejriwal</td>
                                            <td>XI</td>
                                            <td>ARPTE11</td>
                                            <!-- <td>The Heritage School</td> -->
                                        </tr>
                                        <tr>
                                            <td>Ishani Bose</td>
                                            <td>XI</td>
                                            <td>ARPTM11</td>
                                            <!-- <td>The Heritage School</td> -->
                                        </tr>
                                        <!-- <tr>
                                 <td>Sanjanna Agarwal</td>
                                 <td>XI</td>
                                 <td>ARPTE11</td>
                                 <td>The Heritage School</td>
                                 </tr>
                                 <tr>
                                 <td>Suman Mandal</td>
                                 <td>XI</td>
                                 <td>ARPTE11</td>
                                 <td>The Heritage School</td>
                                 </tr> -->
                                        <tr>
                                            <td>Vaibhav Mukherjee</td>
                                            <td>XI</td>
                                            <td>ARPTE11</td>
                                            <!-- <td>The Heritage School</td> -->
                                        </tr>
                                        <tr>
                                            <td>Rishabh Sahoo</td>
                                            <td>XI</td>
                                            <td>ARPTE11PC</td>
                                            <!-- <td>The Heritage School</td> -->
                                        </tr>
                                        <!-- <tr>
                                 <td>Indrashish Guha</td>
                                 <td>XI</td>
                                 <td>ARPTE11</td>
                                 <td>National English School</td>
                                 </tr> -->
                                        <tr>
                                            <td>Ponkon Mondal</td>
                                            <td>XI</td>
                                            <td>ARPTE11</td>
                                            <!-- <td>National English School</td> -->
                                        </tr>
                                        <tr>
                                            <td>Archit kayal</td>
                                            <td>XI</td>
                                            <td>ARPTE11</td>
                                            <!-- <td>HARYANA Vidya Mandir</td> -->
                                        </tr>
                                        <tr>
                                            <td>Kartikeya Surekha</td>
                                            <td>XI</td>
                                            <td>ARPTE11</td>
                                            <!-- <td>Delhi Public School Megacity</td> -->
                                        </tr>
                                        <tr>
                                            <td>SHREY SINGHAL</td>
                                            <td>XI</td>
                                            <td>ARPTE11</td>
                                            <!-- <td>Delhi Public School Megacity</td> -->
                                        </tr>
                                        <tr>
                                            <td>Simran Khanna</td>
                                            <td>XI</td>
                                            <td>ARPTM11</td>
                                            <!-- <td>Our Lady Queen Of The Missions School</td> -->
                                        </tr>
                                        <tr>
                                            <td>Sohan Chakma</td>
                                            <td>XI</td>
                                            <td>ARPTE11</td>
                                            <!-- <td>HARYANA Vidya Mandir</td> -->
                                        </tr>
                                        <tr>
                                            <td>Shubhi Shyamsukha</td>
                                            <td>XI</td>
                                            <td>ARPTE11</td>
                                            <!-- <td>The Heritage School</td> -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="kanyashree_exam" class="tab-pane fade">
                        <div class="card-body">
                            <div id="accordion-2">
                                <div class="card">
                                    <div class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseNested-1" aria-expanded="false"
                                        aria-controls="collapseNested-1">
                                        <h5 class="mb-0">
                                            <span class="float-left"> Kurukshetra Part Test - 1 </span>
                                        </h5>
                                    </div>
                                    <div id="collapseNested-1" class="collapse" aria-labelledby="headingNested-1"
                                        data-parent="#accordion-2">
                                        <div class="card-body">
                                            <div class="container py-xl-3" style="min-height: 0;">
                                                <div class="row about-head-wthree">
                                                    <div class="col-md-12">
                                                        <h1 class="text-center">JEE MAIN</h1>
                                                    </div>
                                                    <div class="col-md-12 pt-4 pb-4">
                                                        <h2>Date & Timing</h2>
                                                    </div>
                                                    <div class="col-md-12 text-left">
                                                        <p><b>Date</b> : 18.07.20 (Saturday)</p>
                                                        <p><b>Pattern</b> : JEE MAIN</p>
                                                        <p><b>Mode</b> : Online</p>
                                                        <p><b>Subjects</b> : Physics, Chemistry &
                                                            Mathematics</p>
                                                        <p><b>Time</b> : 18th July (Saturday), 10 AM - 1
                                                            PM</p>
                                                        <p><b>Link</b> : Edudigm Exam Portal <a
                                                                href="https://www.edudigm.in/exam/login.html">(https://www.edudigm.in/exam/login.html)</a>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-12 pt-5 pb-4">
                                                        <h2>Syllabus</h2>
                                                    </div>
                                                    <div class="col-md-12 text-left">
                                                        <p><b>Physics</b> : Electrostatics, Current
                                                            Electricity,
                                                            Magnetic Effect of Current (upto Force on a
                                                            Current
                                                            Carrying Conductor)
                                                        </p>
                                                        <p><b>Chemistry</b> : Solid State, Chemical
                                                            Kinetics, Liquid
                                                            Solutions, Electrochemistry, Surface
                                                            Chemistry,
                                                            Coordination Compounds (Introduction,
                                                            Nomenclature,
                                                            Isomerism Only)
                                                        </p>
                                                        <p><b>Mathematics</b> : Relations & Functions
                                                            II, Inverse
                                                            Trigonometric Functions, Limits &
                                                            Derivatives II,
                                                            Application of Derivatives, Indefinite
                                                            Integration
                                                            (Antiderivative Method, Substitution,
                                                            Integration by
                                                            parts, Some Special Integrals Only)
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row about-head-wthree">
                                                    <div class="col-md-12 pt-5">
                                                        <h1 class="text-center">NEET</h1>
                                                    </div>
                                                    <div class="col-md-12 py-4">
                                                        <h2>Date & Timing</h2>
                                                    </div>
                                                    <div class="col-md-12 text-left">
                                                        <p><b>Date</b> : 19.07.20 (Sunday)</p>
                                                        <p><b>Pattern</b> : NEET</p>
                                                        <p><b>Mode</b> : Online</p>
                                                        <p><b>Subjects</b> : Physics, Chemistry &
                                                            Biology</p>
                                                        <p><b>Time</b> : 19th July (Sunday), 10 AM - 1
                                                            PM</p>
                                                        <p><b>Link</b> : Edudigm Exam Portal <a
                                                                href="https://www.edudigm.in/exam/login.html">(https://www.edudigm.in/exam/login.html)</a>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-12 pt-5 pb-4">
                                                        <h2>Syllabus</h2>
                                                    </div>
                                                    <div class="col-md-12 text-left">
                                                        <p><b>Physics</b> : Electrostatics, Current
                                                            Electricity,
                                                            Magnetic Effect of Current (upto Force on a
                                                            Current
                                                            Carrying Conductor)
                                                        </p>
                                                        <p><b>Chemistry</b> : Solid State, Chemical
                                                            Kinetics, Liquid
                                                            Solutions, Electrochemistry, Surface
                                                            Chemistry,
                                                            Coordination Compounds (Introduction,
                                                            Nomenclature,
                                                            Isomerism Only
                                                        </p>
                                                        <p><b>Biology</b> : Reproduction in organisms,
                                                            Sexual
                                                            reproduction in flowering plants, Human
                                                            reproduction,
                                                            Reproductive health, Principles of heredity
                                                            and
                                                            variation, Molecular basis of inheritance,
                                                            Evolution
                                                            (excluding all the theories)
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseNested-5" aria-expanded="false"
                                        aria-controls="collapseNested-5">
                                        <h5 class="mb-0">
                                            <span class="float-left"> Kurukshetra Part Test - 2 </span>
                                        </h5>
                                    </div>
                                    <div id="collapseNested-5" class="collapse" aria-labelledby="headingNested-5"
                                        data-parent="#accordion-2">
                                        <div class="card-body">
                                            <div class="container py-xl-3" style="min-height: 0;">
                                                <div class="row about-head-wthree">
                                                    <div class="col-md-12">
                                                        <h1 class="text-center">JEE</h1>
                                                    </div>
                                                    <div class="col-md-12 py-4">
                                                        <h2>Date & Timing</h2>
                                                    </div>
                                                    <div class="col-md-12 text-left">
                                                        <p><b>Date</b> : 17.10.20 (Saturday)</p>
                                                        <p><b>Pattern</b> : JEE</p>
                                                        <p><b>Mode</b> : Online</p>
                                                        <p><b>Subjects</b> : Physics, Chemistry & Mathematics</p>
                                                        <p><b>Time</b> : 17th Oct,20 (Saturday), 10 AM - 1 PM</p>
                                                        <p><b>Link</b> : Edudigm Exam Portal <a
                                                                href="https://www.edudigm.in/exam/login.html">(https://www.edudigm.in/exam/login.html)</a>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-12 pt-5 pb-4">
                                                        <h2>Syllabus</h2>
                                                    </div>
                                                    <div class="col-md-12 text-left">
                                                        <p><b>Physics</b> : Magnetic Effects of Current,
                                                            Electromagnetic Induction & Alternating Current,
                                                            Electromagnetic Waves, Ray optics
                                                        </p>
                                                        <p><b>Chemistry</b> : Transition Elements & Coordination
                                                            Chemistry, Haloalkanes & Haloarenes, Alcohols, Phenol &
                                                            Ethers, Aldehydes & Ketones, Carboxylic Acids & its
                                                            Derivatives,
                                                            Nitrogen Containing Compounds, Biomolecules, Organic
                                                            Compounds in the Service of Mankind
                                                        </p>
                                                        <p><b>Mathematics</b> : Indefinite Integration, Definite
                                                            Integration & Area Under the Curve , Differential
                                                            Equations,
                                                            Matrices & Determinants,
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row about-head-wthree">
                                                    <div class="col-md-12 pt-5">
                                                        <h1 class="text-center">NEET</h1>
                                                    </div>
                                                    <div class="col-md-12 py-4">
                                                        <h2>Date & Timing</h2>
                                                    </div>
                                                    <div class="col-md-12 text-left">
                                                        <p><b>Date</b> : 18.10.20 (Sunday)</p>
                                                        <p><b>Pattern</b> : NEET</p>
                                                        <p><b>Mode</b> : Online</p>
                                                        <p><b>Subjects</b> : Physics, Chemistry & Biology</p>
                                                        <p><b>Time</b> : 18th Oct (Sunday), 10 AM - 1 PM</p>
                                                        <p><b>Link</b> : Edudigm Exam Portal <a
                                                                href="https://www.edudigm.in/exam/login.html">(https://www.edudigm.in/exam/login.html)</a>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-12 pt-5 pb-4">
                                                        <h2>Syllabus</h2>
                                                    </div>
                                                    <div class="col-md-12 text-left">
                                                        <p><b>Physics</b> : Magnetic Effects of Current,
                                                            Electromagnetic Induction & Alternating Current,
                                                            Electromagnetic Waves, Ray optics
                                                        </p>
                                                        <p><b>Chemistry</b> : Transition Elements & Coordination
                                                            Chemistry, Haloalkanes & Haloarenes, Alcohols, Phenol &
                                                            Ethers, Aldehydes & Ketones, Carboxylic Acids & its
                                                            Derivatives,
                                                            Nitrogen Containing Compounds, Biomolecules, Organic
                                                            Compounds in the Service of Mankind
                                                        </p>
                                                        <p><b>Biology</b> : Evolution, Microbes in human welfare,
                                                            Strategies for enhancement in food production,
                                                            Principles and processes in biotechnology, Biotechnology
                                                            and its applications
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseNested-2" aria-expanded="true"
                                        aria-controls="collapseNested-2">
                                        <h5 class="mb-0">
                                            <span class="float-left">Final Kurukshetra For Class XI
                                                (Arjuna and
                                                Eklavya)</span>
                                        </h5>
                                    </div>
                                    <div id="collapseNested-2" class="collapse" aria-labelledby="headingNested-2"
                                        data-parent="#accordion-2">
                                        <div class="card-body">
                                            <div class="container py-xl-3" style="min-height: 0;">
                                                <div class="row about-head-wthree">
                                                    <div class="col-lg-12 right-abw3ls mt-lg-0 mt-sm-5 mt-4">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h1 class="mb-3 text-center"> JEE </h1>
                                                        <table class="table table-bordered term2">
                                                            <tbody>
                                                                <tr>
                                                                    <td rowspan="5">Subject wise
                                                                        distribution of
                                                                        Questions, Total Number of
                                                                        Questions and
                                                                        Marks
                                                                    </td>
                                                                    <td><strong>Subject</strong></td>
                                                                    <td><strong>No of Questions</strong>
                                                                    </td>
                                                                    <td><strong>Marks</strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Mathematics</strong>
                                                                    </td>
                                                                    <td><strong>(20+5*)</strong></td>
                                                                    <td><strong>100</strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Physics</strong></td>
                                                                    <td><strong>(20+5*) </strong></td>
                                                                    <td><strong>100</strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Chemistry</strong></td>
                                                                    <td><strong>(20+5*) </strong></td>
                                                                    <td><strong>100</strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Total</strong></td>
                                                                    <td><strong>75</strong></td>
                                                                    <td><strong>300</strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="4"><strong>*20
                                                                            questions will be
                                                                            MCQs and 5 questions will
                                                                            have answer to
                                                                            be filled as numerical
                                                                            value.</strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="3">Marking Scheme for
                                                                        MCQs</td>
                                                                    <td colspan="2"><strong>Correct
                                                                            Answer</strong>
                                                                    </td>
                                                                    <td><strong>Four mark (+4)</strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Incorrect
                                                                            Answer</strong>
                                                                    </td>
                                                                    <td><strong>Minus one mark
                                                                            (-1)</strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Unanswered /
                                                                            Marked for
                                                                            Review</strong>
                                                                    </td>
                                                                    <td><strong>No mark (0)</strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="3">Marking Scheme for
                                                                        questions for
                                                                        which answer is a Numerical
                                                                        value
                                                                    </td>
                                                                    <td colspan="2"><strong>Correct
                                                                            Answer</strong>
                                                                    </td>
                                                                    <td><strong>Four mark (+4)</strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Incorrect
                                                                            Answer</strong>
                                                                    </td>
                                                                    <td><strong>No mark (0)</strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Unanswered /
                                                                            Marked for
                                                                            Review</strong>
                                                                    </td>
                                                                    <td><strong>No mark (0)</strong>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <h3><strong><a download=""
                                                                    href="https://jeemain.nta.nic.in/WebInfo/Handler/FileHandler.ashx?i=File&amp;ii=6&amp;iii=Y"
                                                                    target="_blank"><u> JEE MAIN 2020
                                                                        Information
                                                                        PDF</u></a></strong>
                                                        </h3>
                                                    </div>
                                                    <div class="col-md-12 mt-3">
                                                        <h1 class="mx-3 text-center"> NEET </h1>
                                                        <p class="text-justify p-t-15"> The Test Booklet
                                                            consists of
                                                            180 questions. The maximum marks are 720.
                                                            All the
                                                            questions carry equal marks. For each
                                                            correct answer
                                                            carry +4 marks and –1 for wrong one. There
                                                            are three
                                                            parts in-the question paper. Question number
                                                            1 to 45 (Physics), Question number 46 to 90
                                                            (Chemistry)
                                                            and Question number 91 to 180 (Biology)
                                                        </p>
                                                    </div>
                                                    <div class="col-md-12 p-t-50">
                                                        <!-- <h3> Syllabus </h3>
                                                <div class="row px-3">
                                                    <p class="col-md-3">
                                                        <br><b>Physics</b>
                                                        <br>Full Syllabus
                                                    </p>
                                                    <p class="col-md-3">
                                                        <br><b>Chemistry</b>
                                                        <br>Full Syllabus
                                                    </p>
                                                    <p class="col-md-3">
                                                        <br><b>Mathematics</b>
                                                        <br>Full Syllabus
                                                    </p>
                                                    <p class="col-md-3">
                                                        <br><b>Biology</b>
                                                        <br>Full Syllabus
                                                    </p>
                                                </div> -->
                                                    </div>
                                                    <div class="col-md-12 p-t-50">
                                                        <h3> Date &amp; Timing </h3>
                                                        <div class="row px-3">
                                                            <p class="col-md-12 text-left"><br>
                                                                <b>JEE</b> - Online<br>
                                                                <b>NEET</b> - Offline<br>
                                                                <b>Date:</b> 1st March 2020 <br>
                                                                <b>Time:</b> 10:00 AM - 01:00 PM<br>
                                                                <b>Venue:</b>
                                                                <a href="https://goo.gl/maps/N1dJMcPycPuDDtng6"
                                                                    target="_blank"> <u> BP 07, Eco
                                                                        Station
                                                                        Building, 12th Floor, Salt Lake,
                                                                        Sector V,
                                                                        Kolkata 700091</u> </a><br>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseNested-3" aria-expanded="false"
                                        aria-controls="collapseNested-3">
                                        <h5 class="mb-0">
                                            <span class="float-left">Term IV- For Class XI</span>
                                        </h5>
                                    </div>
                                    <div id="collapseNested-3" class="collapse" aria-labelledby="headingNested-3"
                                        data-parent="#accordion-2">
                                        <div class="card-body">
                                            <div class="container py-xl-5" style="min-height: 0;">
                                                <div class="row about-head-wthree">
                                                    <div class="col-lg-12 right-abw3ls mt-lg-0 mt-sm-5 mt-4">
                                                    </div>
                                                    <!-- <div class="col-md-12 p-t-50">
                                             <h3 class="mb-3 text-center"> JEE </h3>
                                             <table class="table table-bordered term2">
                                                 <tbody>
                                                     <tr>
                                                         <td rowspan="5">Subject wise distribution of Questions, Total Number of Questions and Marks</td>
                                                         <td><strong>Subject</strong></td>
                                                         <td><strong>No of Questions</strong></td>
                                                         <td><strong>Marks</strong></td>
                                                     </tr>
                                                     <tr>
                                                         <td><strong>Mathematics</strong></td>
                                                         <td><strong>(20+5*)</strong></td>
                                                         <td><strong>100</strong></td>
                                                     </tr>
                                                     <tr>
                                                         <td><strong>Physics</strong></td>
                                                         <td><strong>(20+5*) </strong></td>
                                                         <td><strong>100</strong></td>
                                                     </tr>
                                                     <tr>
                                                         <td><strong>Chemistry</strong></td>
                                                         <td><strong>(20+5*) </strong></td>
                                                         <td><strong>100</strong></td>
                                                     </tr>
                                                     <tr>
                                                         <td><strong>Total</strong></td>
                                                         <td><strong>75</strong></td>
                                                         <td><strong>300</strong></td>
                                                     </tr>
                                                     <tr>
                                                         <td colspan="4"><strong>*20 questions will be MCQs and 5 questions will have answer to be filled as numerical value.</strong></td>
                                                     </tr>
                                                     <tr>
                                                         <td rowspan="3">Marking Scheme for MCQs</td>
                                                         <td colspan="2"><strong>Correct Answer</strong></td>
                                                         <td><strong>Four mark (+4)</strong></td>
                                                     </tr>
                                                     <tr>
                                                         <td colspan="2"><strong>Incorrect Answer</strong></td>
                                                         <td><strong>Minus one mark (-1)</strong></td>
                                                     </tr>
                                                     <tr>
                                                         <td colspan="2"><strong>Unanswered / Marked for Review</strong></td>
                                                         <td><strong>No mark (0)</strong></td>
                                                     </tr>
                                                     <tr>
                                                         <td rowspan="3">Marking Scheme for questions for which answer is a Numerical value</td>
                                                         <td colspan="2"><strong>Correct Answer</strong></td>
                                                         <td><strong>Four mark (+4)</strong></td>
                                                     </tr>
                                                     <tr>
                                                         <td colspan="2"><strong>Incorrect Answer</strong></td>
                                                         <td><strong>No mark (0)</strong></td>
                                                     </tr>
                                                     <tr>
                                                         <td colspan="2"><strong>Unanswered / Marked for Review</strong></td>
                                                         <td><strong>No mark (0)</strong></td>
                                                     </tr>
                                                 </tbody>
                                             </table>
                                             <h3><strong><a  download="" href="https://jeemain.nta.nic.in/WebInfo/Handler/FileHandler.ashx?i=File&amp;ii=6&amp;iii=Y" target="_blank"><u > JEE MAIN 2020 Information PDF</u></a></strong></h3>
                                             </div> -->
                                                    <!-- <div class="col-md-12 mt-3">
                                             <h3 class="mx-3 text-center"> NEET </h3>
                                             <p class="text-justify p-t-15"> The Test Booklet consists of 180 questions. The maximum marks are 720. All the questions carry equal marks. For each correct answer carry +4 marks and –1 for wrong one. There are three parts in-the question paper. Question number 1 to
                                                 45 (Physics), Question number 46 to 90 (Chemistry) and Question number 91 to 180 (Biology) </p>
                                             </div> -->
                                                    <!-- <div class="col-md-12 p-t-50">
                                             <h3> Class 11th - Salt lake </h3>
                                             <div class="row px-3">
                                                <p class="col-md-3">
                                                   <br><b>Physics</b>
                                                   <br> 1) Mechanical properties of solids
                                                   <br> 2) Mechanical properties of fluids
                                                   <br> 3) Oscillation & waves
                                                   <br> 4) Thermodynamics
                                                   <br> 5) Thermal properties of matter
                                                   <br> 6) Gravitation
                                                </p>
                                                <p class="col-md-3">
                                                   <br><b>Chemistry</b>
                                                   <br> 1) Aliphatic & aromatic hydrocarbon
                                                   <br> 2) Chemical thermodynamics
                                                   <br> 3) Chemical & Ionic equilibrium
                                                   <br> 4) s block & p block
                                                   <br> 5) Hydrogen
                                                </p>
                                                <p class="col-md-3">
                                                   <br><b>Mathematics</b>
                                                   <br> 1) Straight Lines
                                                   <br> 2) Circles
                                                   <br> 3) Conic Sections (Pair of st. lines, Parabola, Ellipse, Hyperbola)
                                                   <br> 4) Properties of Triangles
                                                   <br> 5) Mathematical Reasoning & <br>Statistics
                                                </p>
                                                <p class="col-md-3">
                                                   <br><b>Biology</b>
                                                   <br> 1) Digestion & Absorption
                                                   <br> 2) Breathing & Exchange of Gases
                                                   <br> 3) Body Fluids & Circulation
                                                   <br> 4) Excretory Products & Their Elimination
                                                   <br> 5) Locomotion & Movement
                                                   <br> 6) Neural Control & Coordination
                                                   <br> 7) Chemical Coordination & Integration
                                                </p>
                                             </div>
                                             </div> -->
                                                    <div class="col-md-12">
                                                        <h1 class="text-center"> Date &amp; Timing </h1>
                                                        <div class="row px-3">
                                                            <p class="col-md-12 text-left"><br>
                                                                <b>JEE Main - CBT (Online)<br>
                                                                    NEET - Offline</b><br>
                                                                <b>Date:</b> 2nd February 2020<br>
                                                                <b>Time:</b> 10:00 AM - 01:00 PM<br>
                                                                <b>Venue:</b> BP 07, Eco Station
                                                                Building, 12th
                                                                Floor, Salt Lake, Sector V, Kolkata
                                                                700091<br>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseNested-4" aria-expanded="false"
                                        aria-controls="collapseNested-4">
                                        <h5 class="mb-0">
                                            <span class="float-left">Term III- For Class XI</span>
                                        </h5>
                                    </div>
                                    <div id="collapseNested-4" class="collapse" aria-labelledby="headingNested-4"
                                        data-parent="#accordion-2">
                                        <div class="card-body">
                                            <div class="container" style="min-height: 0;">
                                                <div class="row about-head-wthree">
                                                    <div class="col-lg-12 right-abw3ls mt-lg-0 mt-sm-5 mt-4">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h1 class="text-center">
                                                            Date & Timing
                                                        </h1>
                                                        <div class="row px-3">
                                                            <p class="col-md-12 text-left"><br>
                                                                <b>For All Student</b><br>
                                                                <b>Date:</b> 17th November 2019<br>
                                                                <b>Time:</b> 09:00 AM - 12:00 Noon<br>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container" style="min-height: 0;">
                                                <div class="row about-head-wthree">
                                                    <div class="col-lg-12 right-abw3ls mt-lg-0 mt-sm-5 mt-4">
                                                        <h1 class="text-center mt-5 mb-0">
                                                            Kurukshetra Term-III Result (Arjuna)
                                                        </h1>
                                                        <br><br>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="results hover-shadow global-box-shadow">
                                                                    <h1 class="mt-0 pt-0">Class XI JEE
                                                                    </h1>
                                                                    <a class="btn stbutton btn-sm" download=""
                                                                        href="assets/pdf/Term_3_XI_JEE_Result.pdf">Result</a>
                                                                    <a class="btn stbutton btn-sm" download=""
                                                                        href="assets/pdf/Class11_Term3_JEE_Saltlake.pdf">Solution
                                                                        (Saltlake)</a>
                                                                    <a class="btn stbutton btn-sm" download=""
                                                                        href="assets/pdf/Class11_Term3_JEE_TheHeritage.pdf">Solution
                                                                        (Heritage)</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="results hover-shadow global-box-shadow">
                                                                    <h1 class="mt-0 pt-0">Class XI NEET
                                                                    </h1>
                                                                    <a class="btn stbutton btn-sm" download=""
                                                                        href="assets/pdf/Term_3_XI_NEET_RESULT.pdf">Result</a>
                                                                    <a class="btn stbutton btn-sm" download=""
                                                                        href="assets/pdf/Class11_Term3_NEET_Saltlake.pdf">Solution
                                                                        (Saltlake)</a>
                                                                    <a class="btn stbutton btn-sm" download=""
                                                                        href="assets/pdf/Class11_Term3_NEET_TheHeritage.pdf">Solution
                                                                        (Heritage)</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="results hover-shadow global-box-shadow">
                                                                    <h1 class="mt-0 pt-0">Class XII JEE
                                                                    </h1>
                                                                    <a class="btn stbutton btn-sm" download=""
                                                                        href="assets/pdf/Term_3_XII_JEE_Result.pdf">Result</a>
                                                                    <a class="btn stbutton btn-sm" download=""
                                                                        href="assets/pdf/Class12_Term3_JEE.pdf">Solution</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="results hover-shadow global-box-shadow">
                                                                    <h1 class="mt-0 pt-0">Class XII NEET
                                                                    </h1>
                                                                    <a class="btn stbutton btn-sm" download=""
                                                                        href="assets/pdf/Term_3_XII_NEET_RESULT.pdf">Result</a>
                                                                    <a class="btn stbutton btn-sm" download=""
                                                                        href="assets/pdf/Class12_Term3_NEET.pdf">Solution</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="kanyashree_class" class="tab-pane fade">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>Saturday</b>
                                        </td>
                                        <td>
                                            <b>Sunday</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            9:00 A.M-12:00 P.M (CHEMISTRY)<br>
                                            12:00 P.M-3:00 P.M (BIOLOGY)
                                        </td>
                                        <td>
                                            9:00 A.M-12:00 P.M (MATHEMATICS)<br>
                                            12:00 P.M-3:00 P.M(PHYSICS)
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="kanyashree_schedule" class="tab-pane fade">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td colspan="5" rowspan="1" style="text-align: center !important;">
                                            <b>Orientation - 12th April, 2020 ( Sunday )</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" rowspan="1" style="text-align: center !important;">
                                            <b>Commencement of new session from 18th April, 2020 ( Saturday )</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" rowspan="1">
                                            <h4 class="text-center">ARJUNA CLASS XII SCHEDULE (2020-2021)</h4>
                                        </td>
                                    </tr>
                                    <tr class="table-success">
                                        <td class="font-weight-bold" style="width: 9%;">Date.</td>
                                        <td class="font-weight-bold">Physics</td>
                                        <td class="font-weight-bold">Chemistry</td>
                                        <td class="font-weight-bold">Mathematics</td>
                                        <td class="font-weight-bold">Biology</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">18/4/2020</td>
                                        <td>Electrostatic</td>
                                        <td>Solid State</td>
                                        <td>Relations &amp; Functions II</td>
                                        <td>Reproduction &amp; in Organisms</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">25/4/2020</td>
                                        <td>Electrostatic</td>
                                        <td>Solid State</td>
                                        <td>Relations &amp; Functions II</td>
                                        <td>Sexual Reproduction in Flowering Plants</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">2/5/2020</td>
                                        <td>Electrostatic</td>
                                        <td>Solutions &amp; Colligative Properties</td>
                                        <td>Inverse Trigonometric Functions</td>
                                        <td>Sexual Reproduction in Flowering Plants</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">9/5/2020</td>
                                        <td>Electrostatic</td>
                                        <td>Solutions &amp; Colligative Properties</td>
                                        <td>Limits &amp; Derivatives II</td>
                                        <td>Human Reproduction</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">16/5/2020</td>
                                        <td>Current Electricity</td>
                                        <td>Chemical Kinetics &amp; Nuclear Chemistry</td>
                                        <td>Limits &amp; Derivatives II</td>
                                        <td>Human Reproduction</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">23/5/2020</td>
                                        <td>Current Electricity</td>
                                        <td>Electrochemistry</td>
                                        <td>Limits &amp; Derivatives II</td>
                                        <td>Reproductive Health</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">30/5/2020</td>
                                        <td>Magnetic Effect of Current</td>
                                        <td>Electrochemistry</td>
                                        <td>Applications of Derivatives</td>
                                        <td>Principles of Inheritence & Variation</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">6/6/2020</td>
                                        <td colspan="4" rowspan="1" class="table-danger"
                                            style="text-align: center !important;"><b>Summer Vacation</b></td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">13/6/2020</td>
                                        <td>Magnetic Effect of Current</td>
                                        <td>Surface Chemistry</td>
                                        <td>Applications of Derivatives</td>
                                        <td>Principles of Inheritence & Variation</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">20/6/2020</td>
                                        <td>Magnetic Effect of Current</td>
                                        <td>Transition Elements &amp; Coordination Chemistry</td>
                                        <td>Indefinite Integration</td>
                                        <td>Molecular Basis of Inheritence</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">27/6/2020</td>
                                        <td>Electromagnetic Induction &amp; Alternating Current</td>
                                        <td>Transition Elements &amp; Coordination Chemistry</td>
                                        <td>Indefinite Integration</td>
                                        <td>Molecular Basis of Inheritence</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">4/7/2020</td>
                                        <td>Electromagnetic Induction &amp; Alternating Current</td>
                                        <td>Haloalkanes &amp; Haloarenes</td>
                                        <td>Indefinite Integration</td>
                                        <td>Evolution</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">11/7/2020</td>
                                        <td>Electromagnetic Induction &amp; Alternating Current</td>
                                        <td>Haloalkanes &amp; Haloarenes</td>
                                        <td>Definite Integration &amp; Area Under the Curve</td>
                                        <td>Evolution</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">18/7/2020</td>
                                        <td colspan="4" rowspan="1" class="table-warning"
                                            style="text-align: center !important;"><b>Kurukshetra Part Test - I (PTM
                                                during the week)</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">25/7/2020</td>
                                        <td>Electromagnetic Waves &amp; Communication System</td>
                                        <td>Alcohols, Phenol &amp; Ethers</td>
                                        <td>Definite Integration &amp; Area Under the Curve</td>
                                        <td>Human Health &amp; Diseases</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">1/8/2020</td>
                                        <td>Ray Optics</td>
                                        <td>Alcohols, Phenol &amp; Ethers</td>
                                        <td>Definite Integration &amp; Area Under the Curve</td>
                                        <td>Human Health &amp; Diseases</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">8/8/2020</td>
                                        <td>Ray Optics</td>
                                        <td>Aldehydes &amp; Ketones</td>
                                        <td>Differential Equations</td>
                                        <td>Strategies for Enhancement in Food Production</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">15/8/2020</td>
                                        <td>Wave Optics</td>
                                        <td>Aldehydes &amp; Ketones</td>
                                        <td>Differential Equations</td>
                                        <td>Microbes in Human Welfare</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">22/8/2020</td>
                                        <td>Wave Optics</td>
                                        <td>Carboxylic Acids &amp; its Derivatives</td>
                                        <td>Matrices &amp; Determinants</td>
                                        <td>Biotechnology- Principles &amp; Processes</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">29/8/2020</td>
                                        <td>Dual Nature of Radiation &amp; Matter</td>
                                        <td>Nitrogen Containing Compounds</td>
                                        <td>Matrices &amp; Determinants</td>
                                        <td>Biotechnology- Principles &amp; Processes</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">5/9/2020</td>
                                        <td>Dual Nature of Radiation &amp; Matter</td>
                                        <td>Biomolecules</td>
                                        <td>Matrices &amp; Determinants</td>
                                        <td>Biotechnology &amp; its Applications</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">12/9/2020</td>
                                        <td>Atomic Structure</td>
                                        <td>Organic Compounds in the Service of Mankind</td>
                                        <td>Vectors &amp; 3D Geometry</td>
                                        <td>Biotechnology &amp; its Applications</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">19/9/2020</td>
                                        <td>Nuclear Physics</td>
                                        <td>Metallurgical Processes</td>
                                        <td>Vectors &amp; 3D Geometry</td>
                                        <td>Organisms &amp; Populations</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">26/9/2020</td>
                                        <td>Nuclear Physics</td>
                                        <td>The p-Block Elements II</td>
                                        <td>Vectors &amp; 3D Geometry</td>
                                        <td>Ecosystems</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">3/10/2020</td>
                                        <td>Semiconductors Electronics</td>
                                        <td>The p-Block Elements II</td>
                                        <td>Probability</td>
                                        <td>Biodiversity &amp; its Conservation</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">10/10/2020</td>
                                        <td>Semiconductors Electronics</td>
                                        <td>Qualitative Analysis</td>
                                        <td>Probability</td>
                                        <td>Environmental Isssues</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">17/10/2020</td>
                                        <td colspan="4" rowspan="1" class="table-warning"
                                            style="text-align: center !important;"><b>Kurukshetra Part Test - II
                                                (PTM during the week)</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">24/10/2020</td>
                                        <td colspan="4" rowspan="1" class="table-danger"
                                            style="text-align: center !important;"><b>Durga Puja Vacation</b></td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">31/10/2020</td>
                                        <td colspan="4" rowspan="2"
                                            style="text-align: center !important; vertical-align: middle"><b>Review
                                                of Class 11 Syllabus</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">7/11/2020</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">14/11/2020</td>
                                        <td colspan="4" rowspan="1" class="table-danger"
                                            style="text-align: center !important;"><b>Diwali Vacation</b></td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">21/11/2020</td>
                                        <td colspan="4" rowspan="4"
                                            style="text-align: center !important; vertical-align: middle"><b>Review
                                                of Class 11 Syllabus</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">28/11/2020</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">5/12/2020</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">12/12/2020</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">19/11/2020</td>
                                        <td colspan="4" rowspan="1" class="table-warning"
                                            style="text-align: center !important;"><b>Kurukshetra Part Test - III
                                                (PTM during the week)</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">26/11/2020</td>
                                        <td colspan="4" rowspan="1" class="table-warning"
                                            style="text-align: center !important;"><b>Kurukshetra Full Test - I</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">2/1/2021</td>
                                        <td colspan="4" rowspan="1" class="table-warning"
                                            style="text-align: center !important;"><b>Kurukshetra Full Test - II</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">9/1/2021</td>
                                        <td colspan="4" rowspan="10"
                                            style="text-align: center !important; vertical-align: middle"><b>Review
                                                of Class 11 Syllabus</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">16/1/2021</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">23/1/2021</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">30/1/2021</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">6/2/2021</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">13/2/2021</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">20/2/2021</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">27/2/2021</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">6/3/2021</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">13/3/2021</td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">20/3/2021</td>
                                        <td colspan="4" rowspan="1" class="table-warning"
                                            style="text-align: center !important;"><b>Kurukshetra Full Test - III
                                                (PTM during the week)</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">27/3/2021</td>
                                        <td colspan="4" rowspan="1" class="table-warning"
                                            style="text-align: center !important;"><b>Kurukshetra Full Test - IV</b>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="kanyashree_deliverables" class="tab-pane fade">
                        <div class="px-5 py-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="mb-4 text-center">Deliverable 2019-2020</h2>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <b>Sl.No</b>
                                                </td>
                                                <td>
                                                    <b>Deliverable</b>
                                                </td>
                                                <td>
                                                    <b>Part of</b>
                                                </td>
                                                <td>
                                                    <b>Status</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    Vedas – Physics (XI)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="bg-success text-white">
                                                    Delivered
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    Vedas – Chemistry (XI)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="bg-success text-white">
                                                    Delivered
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    Vedas – Biology (XI)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="bg-success text-white">
                                                    Delivered
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    Vedas – Mathematics (XI)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="bg-success text-white">
                                                    Delivered
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    Shastra – Physics (XI)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="bg-success text-white">
                                                    Delivered
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    6
                                                </td>
                                                <td>
                                                    Shastra – Chemistry (XI)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="bg-success text-white">
                                                    Delivered
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    7
                                                </td>
                                                <td>
                                                    Shastra – Biology (XI)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="bg-success text-white">
                                                    Delivered
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    8
                                                </td>
                                                <td>
                                                    Shastra – Mathematics (XI)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="bg-success text-white">
                                                    Delivered
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    9
                                                </td>
                                                <td>
                                                    Bramhastra – Physics (XI)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="bg-success text-white">
                                                    Delivered
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    Bramhastra – Chemistry (XI)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="bg-success text-white">
                                                    Delivered
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    11
                                                </td>
                                                <td>
                                                    Bramhastra – Biology (XI)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="bg-success text-white">
                                                    Delivered
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                    Bramhastra – Mathematics (XI)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="bg-success text-white">
                                                    Delivered
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Archives – NEET – Physics</td>
                                                <td>Study Kit</td>
                                                <td class="bg-success text-white">Delivered</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Archives – NEET – Chemistry</td>
                                                <td>Study Kit</td>
                                                <td class="bg-success text-white">Delivered</td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>Archives – NEET – Biology</td>
                                                <td>Study Kit</td>
                                                <td class="bg-success text-white">Delivered</td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>Archives – JEE MAIN</td>
                                                <td>Study Kit</td>
                                                <td class="bg-success text-white">Delivered</td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>Archives – WBJEE</td>
                                                <td>Study Kit</td>
                                                <td class="bg-success text-white">Delivered</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    18
                                                </td>
                                                <td>
                                                    Kurukshetra – Part Test 1
                                                </td>
                                                <td>
                                                    Tests
                                                </td>
                                                <td class="bg-success text-white">
                                                    Delivered
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    19
                                                </td>
                                                <td>
                                                    Kurukshetra – Part Test 2
                                                </td>
                                                <td>
                                                    Tests
                                                </td>
                                                <td class="bg-success text-white">
                                                    Delivered
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    20
                                                </td>
                                                <td>
                                                    Kurukshetra – Part Test 3
                                                </td>
                                                <td>
                                                    Tests
                                                </td>
                                                <td class="bg-success text-white">
                                                    Delivered
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    21
                                                </td>
                                                <td>
                                                    Kurukshetra – Part Test 4
                                                </td>
                                                <td>
                                                    Tests
                                                </td>
                                                <td class="bg-success text-white">
                                                    Delivered
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    22
                                                </td>
                                                <td>
                                                    Kurukshetra – Final Term
                                                </td>
                                                <td>
                                                    Tests
                                                </td>
                                                <td class="bg-success text-white">
                                                    Delivered
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    23
                                                </td>
                                                <td>
                                                    Log-in Id
                                                </td>
                                                <td>
                                                    Xam 360
                                                </td>
                                                <td class="bg-success text-white">
                                                    Delivered
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    24
                                                </td>
                                                <td>
                                                    Log-in Id
                                                </td>
                                                <td>
                                                    Edudigm
                                                </td>
                                                <td class="bg-success text-white">
                                                    Delivered
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="mb-4 text-center">Deliverable 2020-2021</h2>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <b>Sl.No</b>
                                                </td>
                                                <td>
                                                    <b>Deliverable</b>
                                                </td>
                                                <td>
                                                    <b>Part of</b>
                                                </td>
                                                <td>
                                                    <b>Status</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    Vedas – Physics (XII)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="">
                                                    18th April,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    Vedas – Chemistry (XII)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="">
                                                    18th April,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    Vedas – Mathematics (XII)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="">
                                                    18th April,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    Shastra – Physics (XII)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="">
                                                    18th April,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    Shastra – Chemistry (XII)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="">
                                                    18th April,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    6
                                                </td>
                                                <td>
                                                    Shastra – Bo (XII)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="">
                                                    18th April,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    7
                                                </td>
                                                <td>
                                                    Bramhastra – Physics (XII)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="">
                                                    18th April,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    8
                                                </td>
                                                <td>
                                                    Bramhastra – Chemistry (XII)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="">
                                                    18th April,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    9
                                                </td>
                                                <td>
                                                    Bramhastra – Bo (XII)
                                                </td>
                                                <td>
                                                    Study Kit
                                                </td>
                                                <td class="">
                                                    18th April,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    Kurukshetra – Part Test 1
                                                </td>
                                                <td>
                                                    Tests
                                                </td>
                                                <td class="">
                                                    18th July,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    11
                                                </td>
                                                <td>
                                                    Kurukshetra – Part Test 2
                                                </td>
                                                <td>
                                                    Tests
                                                </td>
                                                <td class="">
                                                    17th Oct,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                    Kurukshetra – Part Test 3
                                                </td>
                                                <td>
                                                    Tests
                                                </td>
                                                <td class="">
                                                    19th Dec,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    13
                                                </td>
                                                <td>
                                                    Kurukshetra – Full Length-1
                                                </td>
                                                <td>
                                                    Tests
                                                </td>
                                                <td class="">
                                                    26th Dec,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    14
                                                </td>
                                                <td>
                                                    Kurukshetra – Full Length-2
                                                </td>
                                                <td>
                                                    Tests
                                                </td>
                                                <td>
                                                    2nd Jan,2021
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    15
                                                </td>
                                                <td>
                                                    Kurukshetra – Full Length-3
                                                </td>
                                                <td>
                                                    Tests
                                                </td>
                                                <td>
                                                    20th Mar,2021
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    16
                                                </td>
                                                <td>
                                                    Kurukshetra – Full Length-4
                                                </td>
                                                <td>
                                                    Tests
                                                </td>
                                                <td>
                                                    27th Mar,2021
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    17
                                                </td>
                                                <td>
                                                    Seminar 1
                                                </td>
                                                <td>
                                                    Seminar
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    18
                                                </td>
                                                <td>
                                                    Seminar 2
                                                </td>
                                                <td>
                                                    Seminar
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    19
                                                </td>
                                                <td>
                                                    Seminar 3
                                                </td>
                                                <td>
                                                    Seminar
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    20
                                                </td>
                                                <td>
                                                    Video Gallery
                                                </td>
                                                <td>
                                                    APP
                                                </td>
                                                <td>
                                                    18th Apr,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    21
                                                </td>
                                                <td>
                                                    Discussion Forum
                                                </td>
                                                <td>
                                                    APP
                                                </td>
                                                <td>
                                                    18th April,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    22
                                                </td>
                                                <td>
                                                    Chapter Exams
                                                </td>
                                                <td>
                                                    APP
                                                </td>
                                                <td>
                                                    31st May,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    23
                                                </td>
                                                <td>
                                                    Archive Exams
                                                </td>
                                                <td>
                                                    APP
                                                </td>
                                                <td>
                                                    31st May,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    24
                                                </td>
                                                <td>
                                                    Chakravyuh Concept Quiz
                                                </td>
                                                <td>
                                                    APP
                                                </td>
                                                <td>
                                                    31st July,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    25
                                                </td>
                                                <td>
                                                    Vedas - Concept Notes
                                                </td>
                                                <td>
                                                    APP
                                                </td>
                                                <td>
                                                    31st July,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    26
                                                </td>
                                                <td>
                                                    Summary & Question Cards
                                                </td>
                                                <td>
                                                    APP
                                                </td>
                                                <td>
                                                    31st July,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    27
                                                </td>
                                                <td>
                                                    Concept Videos
                                                </td>
                                                <td>
                                                    APP
                                                </td>
                                                <td>
                                                    30th Sep,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    28
                                                </td>
                                                <td>
                                                    Kurukshetra Practice Exams
                                                </td>
                                                <td>
                                                    APP/WEB
                                                </td>
                                                <td>
                                                    31st Oct,2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    29
                                                </td>
                                                <td>
                                                    Live Sessions
                                                </td>
                                                <td>
                                                    WEB
                                                </td>
                                                <td>
                                                    Around the year
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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