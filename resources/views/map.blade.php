<?php 
    if ($type == "earthquake") $min = 1900;
    if ($type == "tsunami") $min = 1920;
    if ($type == "flood") $min = 2005;
    if ($type == "storm") $min = 2005;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Calamity Watch</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,900|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,600,600i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <script src='/assets/js/p5.min.js'></script>
  <script src='/assets/js/Ping.js'></script>
  <link rel="stylesheet" href="/assets/css/rangeSlider.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/style123.css">

  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="sticky-top">
    
    <div class="row d-flex flex-row align-items-centers">
      <div class="col-lg-3 col-4 d-flex justify-content-center"><h1 class="logo"><a href="{{route('index')}}">Calamity Watch</a></h1></div>
      <div class="col-lg-6 col-4 d-flex justify-content-center">
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul class="m-0">
          <li><a class="nav-link scrollto active" href="{{route('index')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('org')}}">Welfare Organizations</a></li>
          <li><a class="nav-link scrollto" href="#">Natural Disasters</a></li>
          <li><a class="nav-link scrollto" href="{{route('visits')}}">Visits</a></li>
          <li><a class="nav-link scrollto" href="{{route('index')}}">About Us</a></li>
          <li><a class="nav-link scrollto" href="{{route('index')}}">Contact</a></li>
          <!-- <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      </div>

      <!-- <div class="col-3 d-flex justify-content-center"><a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a></div> -->
      <div class="col-lg-3 col-4 d-flex justify-content-center">
        <!-- <a href="" class="appointment-btn scrollto">Appointment</a> -->
        @if (Route::has('login'))
                    @auth
                        <a class="auth-btn" href="{{ route('profile.edit') }}">Profile</a>
                        <a class="auth-btn" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">@csrf</form>
                    @else
                        <a class="auth-btn" href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a class="auth-btn" href="{{ route('register') }}">Sign Up</a>
                        @endif
                    @endauth
                <!-- </div> -->
            @endif
      </div>

    </div>
  </header>
  

  <main>
  <div id="disasterType" style="display: none;">
        {{$type}}
    </div>
    <div id="disasterData" style="display: none;">
        {{json_encode($disasters)}}
    </div>
    <script>
        let disasterType = document.getElementById("disasterType").textContent.trim();
        let data = JSON.parse(document.getElementById("disasterData").textContent);
        let minYear = 2010;
        let maxYear = 2020;
    </script>

    <div class="top mb-5 container">
        <h1 class="mt-5 mb-0 p-0">Natural Disasters</h1>
        <h1 class="mt-1">Info and Releif</h1>
        <p>Each year disasters become the cause of death for 60,000 people on average and furthermore cause millions of dollars of damages.
The victims of these disasters often end up homeless and/or starving and as such we need to spread awareness to the general public regarding the aid of these affected individuals.
This page shows the type, locations and relative magnitudes of the selected type of natural disaster in a visual and tabular format.
You can change the type of disasters you want to see by selecting one of the options given below
Furthermore you can change the perspective (2D or 3D) of the visualized data by selecting either map or globe.
Below the canvas, you can manipulate a slider to change the range of years for which you want to see disasters of.
Below the slider, detailed information regarding the disasters is represented in table format for the convenience of the user.</p>
    </div>

    <div class="top-btns container d-flex flex-row justify-content-center align-items-center">
        <a class="btn 
            @if ($type == 'earthquake') 
            {{'disableClick'}} 
            @endif"
        href="/earthquake/map">Earthquakes
        </a>

        <a class="btn 
                @if ($type == 'tsunami') 
                {{'disableClick'}} 
                @endif" 
        href="/tsunami/map">Tsunamis</a>
        
        <a class="btn
                @if ($type == 'flood') 
                {{'disableClick'}} 
                @endif" 
        href="/flood/map">Floods</a>

        <a class="btn
                @if ($type == 'storm') 
                {{'disableClick'}} 
                @endif" 
        href="/storm/map">Storms</a>
    </div>

    <div class="bot-btns container d-flex flex-row justify-content-center align-items-center mt-3 mb-4">
        <a class="btn disableClick" href="#">Map</a>
        <a class="btn" href="/{{$type}}/globe">Globe</a>
    </div>

    <!-- ss -->
    <div class="container box">
        <table class='table table-dark'>
            <thead class='table-dark'>
                <tr><th colspan="3" class="text-center">Color Info</th></tr>
            </thead>
            <tbody id="colorInfo" class="table-group-divider">
            </tbody>
            <script src='/assets/js/colorInfo.js'></script>
        </table>
        <div class="line"></div>
    </div>
<!-- ss -->

    <div class="box container pt-2 pb-2 mt-3 mb-3">
        <div id="canvas" class="row">
            <script src="/assets/js/map.js"></script>
        </div>
    </div>

    <div class="container d-flex flex-column mb-5" style="align-items: center;">
        <div class="box box2 wrapper mb-3">
            <div class="container d-flex align-items-center justify-content-center">
                <div class="slider-track"></div>
                <input type="range" min="{{$min}}" max="2024" value="2010" id="slider-1" oninput="minYearChanged()">
                <input type="range" min="{{$min}}" max="2024" value="2020" id="slider-2" oninput="maxYearChanged()">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="values p-0 m-0">
                <span id="range1">minValue</span>
                <span class="mid"> - </span>
                <span id="range2">maxValue</span>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div id="table"></div>
    </div>

    <div class="donate container d-flex flex-column align-items-center">
        <h4 class="mb-3">
            Play a part in helping disaster affected individuals 
            by donating to welfare organizations.
        </h4>
        <a href="{{route('org')}}">Donate Now</a>
    </div>

  </main>

  <footer id="footer" class="mt-5">

    <div class="footer-top pt-5 pb-3">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3><a href="#">Calamity Watch</a></h3>
            <p class="mt-4">
              Indus Loop SEECS<br>
              NUST, H-12<br>
              Islamabad, Pakistan<br>
              <!-- <p><strong>Phone:</strong> +97 1002 3123123<br>
              <strong>Email:</strong> calamity.watch@support.com<br>
              </p> -->
            </p>
            <p class="mt-3">
              <strong>Phone:</strong> +92 1002 3123123<br>
              <strong>Email:</strong> calamity.watch@support.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#welfare_organizations">Welfare Organizations</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#disasters">Natural Disasters</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about-us">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact-us">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Natural Disasters</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="earthquake/map">Earthquakes</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="flood/map">Floods</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="storm/map">Storms</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="tsunami/map">Tsunamis</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('org')}}">Donate Now</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Socail</h4>
            <div class="social-links text-left text-md-left">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="mt-4">
              <div class="copyright">
                &copy; Non-Copyright <strong><span>Calamity Watch</span></strong>.<br> All Rights Reserved (unofficial)
              </div>
              <div class="credits mt-3">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
                <span>Designed by:</span><br> <a href="#about-us">Ali Murad, Hamaz Hamza and Omer Farooq</a>
              </div>
            </div>
            <!-- <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> -->
          </div>

        </div>
      </div>
    </div>

    <!-- <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
        </div>
        <div class="credits"> -->
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div> -->
  </footer><!-- End Footer -->

</body>
<script src='/assets/js/frameRefresh.js'></script>
<script src='/assets/js/rangeSlider.js'></script>
<script src='/assets/js/table.js'></script>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
</html>