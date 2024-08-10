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
    <section id="services" class="services mb-5">
        <div class="container">
            <!-- <h1 class="mt-5">Welfare Organizations</h1> -->
            <h1 class="mt-5 mb-0 p-0">Welfare</h1>
            <h1 class="p-0">Organizations</h1>
            <div class="row">
            
            @foreach($orgs as $org)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box d-flex flex-column align-items-center justify-content-start">
                    
                    @if ($org->name === "UNICEF")
                    <div class="imgdiv uni"><img src="{{$org->logoPath}}" alt=""></div>
                    @elseif ($org->name === "International Rescue Committee")
                    <div class="imgdiv irc"><img src="{{$org->logoPath}}" alt=""></div>
                    @else
                    <div class="imgdiv"><img src="{{$org->logoPath}}" alt=""></div>
                    @endif
                    
                    <div class="flex-grow-1 d-flex flex-column">
                        <h4>{{$org->name}}</h4>
                        <div class="d-flex flex-column justify-content-between align-items-center h-100"><!-- class="d-flex flex-column justify-content-between align-items-center h-100" -->
                            <p>{{$org->description}}</p>
                            <!-- <a href="{{$org->address}}" class="donate-btn mt-5">Donate Now</a> -->
                            <a href="{{route('visit',$org)}}" class="donate-btn mt-5">Donate Now</a>
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </section>
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