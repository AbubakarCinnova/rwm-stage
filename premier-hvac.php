<?php $base_url  = "http://stage.reticlewebmarketing.com/eco-2023"; ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Ecofriendly Mechanical | Premier HVAC</title>
    <link rel="stylesheet" href="<?php echo $base_url ?>/css/landing.css">
</head>

<body>



    <section class="top-header ">
        <div class="container">
            <div class="row">
                <div class="col-md-4 call  my-2">
                    <h3 class="text-md-start text-center">Call for appointment</h3>
                    <a href="callto:+18885084911">
                        <h2 class="text-md-start text-center">(888) 508-4911</h2>
                    </a>
                </div>

                <div class="col-md-4 text-center site-logo-wrap-desktop my-2"> <a
                        href="<?php echo $base_url ?>/"><img
                            src="<?php echo $base_url ?>/img/eco-logo.png" width="320"></a> </div>

                <div class="col-md-4 text-center text-md-end my-2">
                    <a href="<?php echo $base_url ?>/contact-us.php" class="btn btn-warning" style="margin-top:18px;">Request Service</a>
                </div>
            </div>
        </div>
    </section>

    <section class="navbar-outer-wrap">

        <nav class="navbar navbar-expand-lg navbar-dark navbar-wrapp">
            <div class="container">
                <a class="navbar-brand" href="<?php echo $base_url ?>/"><img
                        src="<?php echo $base_url ?>/img/home_1.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">

                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="<?php echo $base_url ?>/about.php"> About </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $base_url ?>/why-choose-us.php"> Why
                                        Choose Us</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base_url ?>/testimonials.php">
                                        Testimonials </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="<?php echo $base_url ?>/heating.php"> Heating
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo $base_url ?>/heat-pumps.php"> Heat Pumps</a>
                                </li>
                                <li><a class="dropdown-item" href="<?php echo $base_url ?>/furnaces.php"> Furnaces</a>
                                </li>
                                <li><a class="dropdown-item" href="<?php echo $base_url ?>/smart-thermostats.php"> Smart
                                        Thermostats </a></li>
                                <li><a class="dropdown-item" href="<?php echo $base_url ?>/radiant-heating.php"> Radiant
                                        Heating </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="<?php echo $base_url ?>/cooling.php"> Cooling
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $base_url ?>/mini-splits.php"> Ductless
                                        Mini Split</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base_url ?>/air-conditioners.php"> Air
                                        Conditioners </a></li>
                                <li><a class="dropdown-item" href="<?php echo $base_url ?>/smart-thermostats.php">Smart
                                        Thermostats</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle"> Services </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $base_url ?>/installation-guide.php"
                                        class="dropdown-item">Install
                                        Guide</a></li>
                                <li><a href="<?php echo $base_url ?>/maintenance-plan.php"
                                        class="dropdown-item">Maintenance Plan</a></li>
                                <li><a href="<?php echo $base_url ?>/water-heater.php" class="dropdown-item">Water
                                        Heaters</a></li>
                                        <li><a href="<?php echo $base_url ?>/repair-services.php" class="dropdown-item">Repair Services</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="<?php echo $base_url ?>/commercial.php"
                                class="nav-link">Commercial</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="<?php echo $base_url ?>/air-quality.php"> Air
                                Quality</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $base_url ?>/duct-cleaning.php" class="dropdown-item">Duct
                                        Cleaning</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a href="<?php echo $base_url ?>/service-area.php" class="nav-link">Service
                                Area</a></li>


                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="<?php echo $base_url ?>//financing.php">
                                Financing </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $base_url ?>//premier-hvac.php">
                                        Premier HVAC</a></li>

                            </ul>
                        </li>



                        <li class="nav-item"><a href="<?php echo $base_url ?>/specials.php"
                                class="nav-link">Specials</a></li>

                                <li class="nav-item"><a href="<?php echo $base_url ?>/contact-us.php"
                                class="nav-link">Contact</a></li>

                      <!--   <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="<?php echo $base_url ?>/contact-us.php"> Contact
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $base_url ?>/request-estimate.php">
                                        Request Estimate</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base_url ?>/request-service.php">
                                        Request Service </a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div> <!-- navbar-collapse.// -->
            </div> <!-- container-fluid.// -->
        </nav>
    </section>

    <section class="section-two py-5 px-2">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 d-md-flex align-items-md-center">
                    <div>
                        <h1>Welcome to the Premier Program™</h1>
                        <p>Our worry-free solution removes all of the common headaches associated with owning an
                            expensive
                            heating and cooling system. See all the benefits that the Premier Program provides for a low
                            monthly payment.</p>
                    </div>

                </div>
                <div class="col-lg-6 md-px-5">
                    <img src="<?php echo $base_url ?>/img/banner-img.png" alt="banner-img" class="w-100">
                </div>
            </div>
        </div>
    </section>

    <section class="video-section py-5 bg-light px-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <iframe width="800" height="450" src="https://www.youtube.com/embed/U3wOjTW7xyE"
                            title="PremierProgram Explainer Video" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fourth py-5 px-2">
        <div class="container">
            <div class="row">
                <h2>Program Benefits</h2>
                <div class="col-sm-6 col-md-4 col-lg-2 d-flex  align-items-center">
                    <div class="icon-list-item d-flex  align-items-center">
                        <img src="<?php echo $base_url ?>/img/check-circle.png" alt="tick-icon">
                        <p>Annual Maintenance included</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 d-flex  align-items-center">
                    <div class="icon-list-item d-flex  align-items-center">
                        <img src="<?php echo $base_url ?>/img/check-circle.png" alt="tick-icon">
                        <p>No Trip <br> Charges</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 d-flex  align-items-center">
                    <div class="icon-list-item d-flex  align-items-center">
                        <img src="<?php echo $base_url ?>/img/check-circle.png" alt="tick-icon">
                        <p>No Diagnostic Charges</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 d-flex  align-items-center">
                    <div class="icon-list-item d-flex  align-items-center">
                        <img src="<?php echo $base_url ?>/img/check-circle.png" alt="tick-icon">
                        <p>Consumable Parts included</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="icon-list-item d-flex  align-items-center">
                        <img src="<?php echo $base_url ?>/img/check-circle.png" alt="tick-icon">
                        <p>Covered Repairs included</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 d-flex  align-items-center">
                    <div class="icon-list-item d-flex  align-items-center">
                        <img src="<?php echo $base_url ?>/img/check-circle.png" alt="tick-icon">
                        <p>No Overtime <br> Charges</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="px-2">Compare the Difference: See how the Premier Program™ stacks up.</h2>
                    <img class="table-img" src="<?php echo $base_url ?>/img/table.svg" alt="table-img">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <h2>FAQs and Benefits</h2>
                <div class="col-md-12 col-lg-6">
                    <div class="accordion acc-left" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    If the home comfort system breaks down, how fast will you service it?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    As a Premier Program™ member, you can expect priority service should the heating and
                                    cooling system ever need servicing. Please contact your 911 Mechanical and one
                                    of their qualified service technicians typically will be dispatched to your home
                                    within 24 hours or less.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What is the installation process and how long does it take?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The installation is performed by 911 Mechanical. Installations in most cases
                                    take about a day. 911 Mechanical will set up a time and day for the
                                    installation that is most convenient for you and fits with your schedule.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Are there additional costs, other than the Premier Program monthly payment?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    With the Premier Program, all home comfort system maintenance, consumable parts (air
                                    filters and UV bulbs) and covered repairs are included per the terms of your Premier
                                    Program agreement.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Will someone show me how to work the home comfort system and the controls?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes. 911 Mechanical will answer all your questions concerning how the home
                                    comfort system works, walk you through how to properly operate the new controls and
                                    show you how to change the consumable parts as required.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What brands of home comfort equipment do I get with the Premier Program?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    911 Mechanical works with several quality, nationally recognized HVAC,
                                    plumbing, and electrical manufacturers. Based on your specific home comfort needs,
                                    911 Mechanical will recommend the best options for you to consider.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    What happens to my old home comfort system?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    911 Mechanical will safely remove and dispose of your old home comfort system
                                    in an environmentally friendly manner.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    How do I schedule maintenance of the home comfort system?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    911 Mechanical will contact you to schedule the annual home comfort system
                                    maintenance. However, if you must reschedule that appointment, contact {{Contractor
                                    Name}} to do so, at your earliest convenience.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-12 col-lg-6">
                    <div class="accordion acc-right" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    What if I sell my house?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    If you sell your home, you have a couple options with the Premier Program
                                    <br>
                                    Option 1: Contact us to apply to transfer the service to the new homeowner; upon the
                                    new
                                    homeowner being approved for the Premier Program and executing required
                                    documentation,
                                    they will assume responsibility for any remaining payments.
                                    <br>
                                    Option 2: Contact Service 1st Financial to exercise your purchase option, as
                                    detailed in
                                    your Premier Program agreement. Under this option, you will take ownership of the
                                    system
                                    and program benefits will cease upon your exercise of the purchase option.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                    How long does this Premier Program service last? What happens when it ends?
                                </button>
                            </h2>
                            <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The standard term for the Premier Program is 10 years. At the end of the standard
                                    term, you may elect to do any of the following (subject to the terms and conditions
                                    of your Premier Program agreement): 1)upgrade to a new system, 2) extend your
                                    Premier Program agreement, 3) exercise your purchase option, or 4) return the
                                    system.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                    Who do I contact with questions about the home comfort system?
                                </button>
                            </h2>
                            <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    For questions concerning the home comfort system, contact 911 Mechanical.
                                    Contact information is included in your Premier Program agreement.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading11">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                    Who do I contact with questions about my bill or making a payment?
                                </button>
                            </h2>
                            <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    For billing questions, please contact Service 1st Financial, LLC, and one of our
                                    dedicated customer service team members will answer any of your questions. You can
                                    contact us via email at inquiries@service1stfinancial.com or call us toll-free at
                                    (888) 342-7005.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading12">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                    Who do I contact if I want to transfer the Premier Program service?
                                </button>
                            </h2>
                            <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    If you wish to transfer your Premier Program agreement, please contact Service 1st
                                    Financial, LLC, and one of our dedicated customer service team members will review
                                    your options with you. You can contact us via email at
                                    inquiries@service1stfinancial.com or call us toll-free at (888) 342-7005.
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12  footer-item">

                    <!-- <h3>About</h3> -->
                    <p><img src="<?php echo $base_url ?>/img/premier dealer.jpg" style="width:70%"></p>
                    <!-- <p class="light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ratione vitae amet
                        cum
                        tenetur blanditiis nostrum repellat! Minima assumenda reprehenderit ab iusto eveniet voluptatem
                        corporis architecto molestias tempora quidem. Iste?</p> -->

                </div>
                <!-- <div class="col-md-3 col-sm-12 footer-item">
                    <h3>Service Areas</h3>

                    <ul class="footer-list">
                        <li><a
                                href="<?php echo $base_url ?>/service-area/Heath-Ohio-heating-and-air-conditioning-repair.php">Heath</a>
                        </li>
                        <li><a
                                href="<?php echo $base_url ?>/service-area/Newark-Ohio-heating-and-air-conditioning-repair.php">Newark</a>
                        </li>
                        <li><a
                                href="<?php echo $base_url ?>/service-area/Granville-heating-and-air-conditioning-repair.php">Granville</a>
                        </li>
                        <li><a
                                href="<?php echo $base_url ?>/service-area/Hebron-Ohio-heating-and-air-conditioning-repair.php">Hebron</a>
                        </li>
                        <li><a
                                href="<?php echo $base_url ?>/service-area/Buckeye-Lake-heating-and-air-conditioning-repair.php">Buckeye
                                Lake</a> </li>
                    </ul>
                </div> -->
                <div class="col-md-6 col-sm-12  footer-item">
                    <h3 class="contact-footer">Contact Us</h3>
                    <p><strong>24/7 Phone:</strong><br>(888) 508-4911</p>
                    <p><strong>Address:</strong><br>911 Mechanical <br>
                        51620 Milano Dr STE B, <br>
                        Macomb, MI 48042</p>

                    <p><a href="<?php echo $base_url ?>/tos-&-pp.php">Terms of Service and Privacy Policy</a></p>

                </div>


                </ul>
            </div>
        </div>

        </div>
    </footer>

    <section class="footer-last py-2">

        <div class="container ">
            <div class="row">
                <div class="text-center col-sm-12 copyrights">
                    <p>All Rights Reserved. Copyrights 911 Mechanical</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // make it as accordion for smaller screens
            if (window.innerWidth > 992) {

                document.querySelectorAll('.navbar .nav-item').forEach(function (everyitem) {

                    everyitem.addEventListener('mouseover', function (e) {

                        let el_link = this.querySelector('a[data-bs-toggle]');

                        if (el_link != null) {
                            let nextEl = el_link.nextElementSibling;
                            el_link.classList.add('show');
                            nextEl.classList.add('show');
                        }

                    });
                    everyitem.addEventListener('mouseleave', function (e) {
                        let el_link = this.querySelector('a[data-bs-toggle]');

                        if (el_link != null) {
                            let nextEl = el_link.nextElementSibling;
                            el_link.classList.remove('show');
                            nextEl.classList.remove('show');
                        }


                    })
                });

            }
            // end if innerWidth
        });
// DOMContentLoaded  end
    </script>

</body>

</html>