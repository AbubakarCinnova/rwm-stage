<header>

  <div class="clearfix"></div>

  <div class="container mid_header">
    <div class="row">

      <div class="col-md-4 text-center site-logo-wrap-mobile"> <a href="<?php echo $base_url ?>"><img
            src="<?php echo $base_url ?>/img/eco-logo.png" width="280" /></a> </div>

      <div class="col-md-4 ">
        <h3>Call for appointment</h3>
        <a href="callto:+18123331223">
          <h2>(812) 333-1223</h2>
        </a>
      </div>

      <div class="col-md-4 text-center site-logo-wrap-desktop"> <a href="<?php echo $base_url ?>"><img
            src="<?php echo $base_url ?>/img/eco-logo.png" width="320" /></a> </div>

      <div class="col-md-4  header-btn-wrap">
        <a href="<?php echo $base_url ?>/contact-us.php" class="btn btn-warning" style="margin-top:18px;">Request Service</a>
      </div>
    </div>
  </div>

  <!-- <div class="col-xs-12 mid_header">

     

</div> -->

  <div class="clearfix"></div>

  <nav class="navbar">

    <div class="container">



      <!-- Brand and toggle get grouped for better mobile display -->

      <div class="navbar-header">

        <button type="button" class="navbar-toggle collapsed custom-toggler" data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1" aria-expanded="false" id="menu-icon">

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

          <!--   <span class="navi-gat"><i class="fa fa-bars" aria-hidden="true"></i></span> --> </button>

        <!--  <a href="<?php echo $base_url ?>" class="navbar-brand visible-xs"> <img
          src="<?php echo $base_url ?>/img/logo.jpg" class="img-responsive" /></a> -->
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav">

          <li><a href="<?php echo $base_url ?>/"><img src="<?php echo $base_url ?>/img/home_1.png"></a></li>

          <li><a href="<?php echo $base_url ?>/about.php">About</a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo $base_url ?>/why-choose-us.php">Why Choose Us</a></li>
              <li><a href="<?php echo $base_url ?>/testimonials.php">Testimonials</a></li>

          </li>
        </ul>

        <li><a href="<?php echo $base_url ?>/heating.php">Heating</a>

          <ul class="dropdown-menu">
          <li><a href="<?php echo $base_url ?>/heat-pumps.php">Heat Pumps</a></li>
            <li><a href="<?php echo $base_url ?>/furnaces.php">Furnaces</a></li>
            <li><a href="<?php echo $base_url ?>/smart-thermostats.php">Smart Thermostats</a></li>
            <li><a href="<?php echo $base_url ?>/radiant-heating.php"> Radiant Heating </a></li>
          </ul>
        </li>

        <li><a href="<?php echo $base_url ?>/cooling.php" class="dropdown-toggle">Cooling</a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $base_url ?>/mini-splits.php">Ductless Mini Split</a></li>
            <li><a href="<?php echo $base_url ?>/air-conditioners.php">Air Conditioners</a></li>
            <li><a href="<?php echo $base_url ?>/smart-thermostats.php">Smart Thermostats</a></li>
          </ul>

        <li><a class="dropdown-toggle">Services</a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $base_url ?>/installation-guide.php">Install Guide</a></li>
            <li><a href="<?php echo $base_url ?>/maintenance-plan.php">Maintenance Plan</a></li>
            <li><a href="<?php echo $base_url ?>/water-heater.php">Water Heaters</a></li>
            <li><a href="<?php echo $base_url ?>/repair-services.php">Repair Services</a></li>
          </ul>
        </li>

        <li><a href="<?php echo $base_url ?>/commercial.php" class="dropdown-toggle">Commercial</a>

        <li><a href="<?php echo $base_url ?>/air-quality.php" class="dropdown-toggle">Air Quality</a>
         <!--  <ul class="dropdown-menu">
            <li><a href="<?php echo $base_url ?>/duct-cleaning.php">Duct Cleaning</a></li>
          </ul> -->
        </li>

        <!-- <li><a href="<?php echo $base_url ?>/service-area.php">Service Area</a></li> -->

        <li><a href="<?php echo $base_url ?>/financing.php" class="dropdown-toggle">Financing</a>
         
        </li>

        <li><a href="<?php echo $base_url ?>/specials.php">Specials</a></li>

        <li><a href="<?php echo $base_url ?>/contact-us.php">Contact</a>

      <!--     <ul class="dropdown-menu">

            <li><a href="<?php echo $base_url ?>/request-estimate.php">Request Estimate</a></li>
            <li><a href="<?php echo $base_url ?>/request-service.php">Request Service</a></li>
          </ul> -->
        </li>
        </ul>

      </div>

      <!-- /.navbar-collapse -->

    </div>

  </nav>


</header>


<script>
  var menuIcon = document.getElementById('menu-icon');
  menuIcon.addEventListener('click', function () {
    menuIcon.classList.toggle('open');
  });
</script>