<footer class="full-row">

    <footer class="full-row main-footer text-white">
        <div class="container">
            <div class="col-md-6 col-sm-12 col-xs-12 footer-item">

               <!--  <h3>About</h3> -->
                <p><img src="<?php echo $base_url ?>/img/premier dealer.jpg" style="width:70%"></p>
                <!-- <p class="light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ratione vitae amet cum
                    tenetur blanditiis nostrum repellat! Minima assumenda reprehenderit ab iusto eveniet voluptatem
                    corporis architecto molestias tempora quidem. Iste?</p> -->

            </div>
           <!--  <div class="col-md-3 col-sm-12 col-xs-12 footer-item">
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
            <div class="col-md-6 col-sm-12 col-xs-12 footer-item">
                <h3 class="contact-footer">Contact Us</h3>
                <p><strong>24/7 Phone:</strong><br>(812) 333-1223</p>
                <p><strong>Address:</strong><br>Ecofriendly Mechanical <br>
                    1297 N. Loesch Road <br>
                    Bloomington, IN 47404</p>

                <p><a href="<?php echo $base_url ?>/privacy.php">Terms of Service and Privacy Policy</a></p>

            </div>


            </ul>
        </div>
        </div>
    </footer>

    <footer class="full-row mini-footer">
        <div class="container">

            <div class="text-center col-xs-12 footer-item copyrights text-muted">
                <p>All Rights Reserved. Copyright ©️ Ecofriendly Mechanical</p>
            </div>



            
        </div>
    </footer>
</footer>


<script>window.jQuery || document.write('<script src="<?php echo $base_url ?>/js/jquery-1.11.3.min.js"><\/script>')</script>

<!-- Bootstrap JS -->
<script src="<?php echo $base_url ?>/js/bootstrap/bootstrap.min.js"></script>

<!-- Lightbox JS -->
<!-- <script src="<?php echo $base_url ?>/js/bootstrap-lightbox3/ekko-lightbox.min.js"></script> -->

<!-- Datetimepicker JS -->
<!-- <script src="<?php echo $base_url ?>/js/moment.js"></script>
<script src="<?php echo $base_url ?>/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script> -->

<!-- Owl Carousel JS -->
<script src="<?php echo $base_url ?>/js/owlcarousel/owl.carousel.min.js"></script>


<!-- Custom JS -->
<script src="<?php echo $base_url ?>/js/plugins.js"></script>
<script src="<?php echo $base_url ?>/js/main.js"></script>

<script>


    jQuery(document).ready(function ($) {
        var owl = $("#owl-demo");

        owl.owlCarousel({
            items: 3, //10 items above 1000px browser width
            itemsDesktop: [1000, 3], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 2], // betweem 900px and 601px
            itemsTablet: [600, 1], //2 items between 600 and 0
            itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
            autoPlay: 3000, //Set AutoPlay to 3 seconds
        });

        var test = $("#testmonial");

        test.owlCarousel({
            items: 1, //10 items above 1000px browser width
            itemsDesktop: [1000, 1], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 1], // betweem 900px and 601px
            itemsTablet: [600, 1], //2 items between 600 and 0
            itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
            autoPlay: 3000, //Set AutoPlay to 3 seconds
        });


        $('.partner-logo').owlCarousel({
            loop: true,
            margin: 30,
            autoPlay: 2000,
            nav: true,
            items: 3,
            pagination: false,
            responsive: {
                320: {
                    items: 1,
                    loop: true
                },
                600: {
                    items: 3,
                    loop: true
                },
                1000: {
                    items: 3,
                    loop: true
                }
            }
        })

    });


</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<!--  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133676341-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-133676341-1');
  </script> -->
<script type="text/javascript">

    jQuery('ul.nav li.dropdown').hover(function () {
        jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function () {

        jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);

    });

</script>

<script type="text/javascript">

    $('.dropdown').hover(function () {

        $('.dropdown-toggle', this).trigger('click');
    });
</script>

<script type="text/javascript">



    jQuery('navbar-nav li').hover(function () {

        jQuery(this).find('.dropdown-menu').stop(true, true).show();

        jQuery(this).addClass('open');

    }, function () {

        jQuery(this).find('.dropdown-menu').stop(true, true).hide();

        jQuery(this).removeClass('open');

    });

</script>



</body>

</html>