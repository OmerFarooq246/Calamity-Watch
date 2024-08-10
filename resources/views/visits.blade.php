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
  <!-- for styling visits page-->
  <link href="/assets/css/visits.css" rel="stylesheet">

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
          <li><a class="nav-link scrollto" href="earthquake/map">Natural Disasters</a></li>
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
    <div class="top container d-flex flex-column justify-content-center align-items-center">
        <h1 class="mt-5 mb-0 p-0">Positive Impact</h1>
        <!-- <p class="tag mt-3 mb-5">We aim to provide donation links of welfare organizations to our users so that they don't have to look for trusted and active ones, they can find them all in one place at Calamity Watch. The organizations have been selected because they work world wide in every corner of the world.</p> -->
        <p class="tag mt-3 mb-5">To achieve our goal of creating a positive impact in the world, we have provided donation links of well-known and authorized welfare organizations. Our users can donate to these organizations without having to worry about searching for the right one with complete confidence that their donations are used to help the needy and the deserved ones. Below we have represented the number of visits made to the welfare organizations through our website.</p>
        <p class="verticle">No. of visits</p>
        <div id="bar-graph" class="d-flex flex-row align-items-center justify-content-center mt-2">
            <div id="ifrc" class="bar d-flex flex-column align-items-center justify-content-end">
                <div class="prog"></div>
                <i class="bi bi-1-square-fill"></i>
            </div>
            <div id="who" class="bar d-flex flex-column align-items-center justify-content-end">
                <div class="prog"></div>
                <i class="bi bi-2-square-fill"></i>
            </div>
            <div id="unicef" class="bar d-flex flex-column align-items-center justify-content-end">
                <div class="prog"></div>
                <i class="bi bi-3-square-fill"></i>
            </div>
            <div id="stc" class="bar d-flex flex-column align-items-center justify-content-end">
                <div class="prog"></div>
                <i class="bi bi-4-square-fill"></i>
            </div>
            <div id="dr" class="bar d-flex flex-column align-items-center justify-content-end">
                <div class="prog"></div>
                <i class="bi bi-5-square-fill"></i>
            </div>
            <div id="dwb" class="bar d-flex flex-column align-items-center justify-content-end">
                <div class="prog"></div>
                <i class="bi bi-6-square-fill"></i>
            </div>
            <div id="imc" class="bar d-flex flex-column align-items-center justify-content-end">
                <div class="prog"></div>
                <i class="bi bi-7-square-fill"></i>
            </div>
            <div id="irc" class="bar d-flex flex-column align-items-center justify-content-end">
                <div class="prog"></div>
                <i class="bi bi-8-square-fill"></i>
            </div>
        </div>
        <p class="bot mt-3 m-0">Welfare Organizations</p>
    </div>
    <div class="container d-flex justify-content-center mb-2">
        <div id="details" class="p-3">

            @php
                $total_visits = 0;
            @endphp

            @for($i = 0; $i < sizeof($visits); $i++)
            <div id="row" class="d-flex flex-row align-items-center justify-content-between my-2">
                <div class="d-flex flex-row align-items-center"><i class='bi bi-{{$i+1}}-square'></i><p class="p-0 m-0">{{$orgs[$i]->name}}</p></div>
                <p class="no-of-vs m-0">{{$visits[$i]->c}}</p>
                @php
                $total_visits += $visits[$i]->c;
                @endphp
            </div>
            @endfor

            <div class="total d-flex flex-row align-items-center justify-content-between my-1">
                <p>Total organizations: {{sizeof($visits)}}</p>
                <p>Total visits: <span id="total_visits">{{$total_visits}}</span></p>
            </div>
        </div>
    </div>
    <div class="donate d-flex justify-content-center mb-3">
        <a href="{{route('org')}}">Donate Now</a>
    </div>
    <div>
        ""
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
  
  <script src="/assets/js/bar.js"></script>
  
  <!-- Vendor JS Files -->
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>