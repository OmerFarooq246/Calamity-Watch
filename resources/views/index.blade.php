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

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,900|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,900" rel="stylesheet">
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
      <div class="col-lg-3 col-5 d-flex justify-content-center"><h1 class="logo"><a href="{{route('index')}}">Calamity Watch</a></h1></div>
      <div class="col-lg-6 col-2 d-flex justify-content-center">
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul class="m-0">
          <li><a class="nav-link scrollto active" href="{{route('index')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('org')}}">Welfare Organizations</a></li>
          <li><a class="nav-link scrollto" href="#about">Natural Disasters</a></li>
          <li><a class="nav-link scrollto" href="{{route('visits')}}">Visits</a></li>
          <li><a class="nav-link scrollto" href="#doctors">About Us</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <!-- <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      </div>

      <!-- <div class="col-3 d-flex justify-content-center"><a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a></div> -->
      <div class="col-lg-3 col-5 d-flex justify-content-center">
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="firstsection d-flex align-items-center justify-content-center m-0 p-0">
    <div class="htext d-flex flex-column justify-content-center align-items-center">
      <h1>Calamity Watch</h1>
      <h2>Natural Disasters of the world in one sight</h2>
      <p>Real time presentation of natural disasters and international welfare organizations all in one place.</p>
      <!-- <p>Natural <span>disasters</span> and <span>welfare</span> organizations all in <span>one place</span></p> -->
      <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
      <div class="container igroup back">
        <div class="row d-flex flex-row justify-content-between align-items-center">
        <div class="col-4">
        <a href="#welfare_organizations">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-gift"></i></div>
            <h4 class="title">Welfare Organizations</a></h4>
          </div>
        </a>
        </div>

        <div class="col-4">
        <a href="#disasters">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-atom"></i></div>
            <h4 class="title">Natural Disasters</a></h4>
          </div>
        </a>
        </div>

        <div class="col-4">
        <a href="#about-us">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-fingerprint"></i></div>
            <h4 class="title">About Us</a></h4>
          </div>
        </a>
        </div>
        </div>
    </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <a id="welfare_organizations" class="extra"></a>

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us d-flex flex-row align-items-center">
      <div class="container pb-3"><!--mw-100-->
        <div class="row container">
          <div class="col-lg-4 col-md-12 col-12 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-between">
              <h3>Welfare Organizations</h3>
              <p>
                We have listed donation links of well-know internationally welfare organizations that help out people especially in disasters and clamities.
                You may visit these links and donate as much as you wish to help out the people in need.
                Click the button below to view more welfare organizations.
              </p>
              <div class="text-center">
                <a href="{{route('org')}}" class="more-btn">View More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 col-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <!-- <i class="bx bx-receipt"></i> -->
                    <div class="imgdiv"><img src="{{$orgs[0]->logoPath}}" alt=""></div>
                    <h4>{{ $orgs[0]->name }}</h4>
                    <!-- <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p> -->
                    <p>World’s largest humanitarian network, working in more than 192 countries, with almost 15 million volunteers.</p>
                    <!-- <p>{{$orgs[0]->description}}</p> -->
                  </div>
                </div>
                <div class="col-xl-4 col-4  d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <!-- <i class="bx bx-cube-alt"></i> -->
                    <div class="imgdiv"><img src="{{$orgs[1]->logoPath}}" alt=""></div>
                    <h4>{{ $orgs[1]->name }}</h4>
                    <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p> -->
                    <!-- <p>Leads in the efforts to expand universal health coverage, directing world’s response to health emergencies.</p> -->
                    <p>A United Nations agency that connects nations, to promote health and serve the vulnerable – so everyone, everywhere can attain the highest level of health.</p>
                    <!-- <p>{{$orgs[1]->description}}</p> -->
                  </div>
                </div>
                <div class="col-xl-4 col-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <!-- <i class="bx bx-images"></i> -->
                    <div class="imgdiv uni"><img src="{{$orgs[2]->logoPath}}" alt=""></div>
                    <h4>{{ $orgs[2]->name }}</h4>
                    <!-- <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p> -->
                    <p>Works to improve the lives of children and their families, fighting ight for the rights of every child seeking safe shelter, nutrition, protection from disaster and conflicts, and equality.</p>
                    <!-- <p>{{$orgs[2]->description}}</p> -->
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <a id="disasters" class="extra"></a>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="side col-xl-3 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <!-- content -->
          </div>

          <div class="col-xl-9 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Natural Disasters</h3>
            <p>We have provided up-to-date data of natural disasters that had taken place globally from 1900 till 2023. The data of the natural disasters has been presented for you to view in one sight. Details of every single disaster have also been listed for you to explore. You may view the disasters by clicking on any of the symbols below.</p>

            <div class="d-flex flex-row align-items-center justify-content-evenly">
            <div class="icon-box d-flex flex-column">
              <a href="earthquake/map"><div class="icon"><i class="bi bi-bullseye"></i></div></a>
              <h4 class="title">Earthquakes</h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> -->
            </div>

            <div class="icon-box d-flex flex-column">
              <a href="flood/map"><div class="icon"><i class='bx bx-water'></i></div></a>
              <h4 class="title">Floods</h4>
              <!-- <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p> -->
            </div>

            <div class="icon-box d-flex flex-column">
              <a href="storm/map"><div class="icon"><i class='bx bx-wind'></i></div></a>
              <h4 class="title">Storms</h4>
              <!-- <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p> -->
            </div>

            <div class="icon-box d-flex flex-column">
              <a href="tsunami/map"><div class="icon"><i class="bi bi-tsunami"></i></div></a>
              <h4 class="title">Tsunamis</h4>
              <!-- <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p> -->
            </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <a id="about-us" class="extra"></a>

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title mt-5">
          <h2>About Us</h2>
          <p>Calamity watch has been designed by 3 enthusiastic undergraduate students of Computer Science. The idea of providing the user with natural disasters data and welfare organizations was inspired by the 2023 earthquake of Turkey and Syria. Our goal for developing this website was to present natural disasters data in an interactive way, provide donation links of welfare organizations to provide help to the affected people.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
            <div class="outer">
              <div class="pic pic1">
              </div>
            </div>
              <div class="member-info">
                <h4>Hamaz Hamza</h4>
                <span>2nd year BSCS Student - NUST/SEECS</span>
                <!-- <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p> -->
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="outer">
                <div class="pic pic2">
                </div>
              </div>
              <div class="member-info">
                <h4>Omer Farooq</h4>
                <span>2nd year BSCS Student - NUST/SEECS</span>
                <!-- <p>Aut maiores voluptates amet et quis praesentium qui senda para</p> -->
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="outer">
                <div class="pic pic3">
                </div>
              </div>
              <div class="member-info">
                <h4>Ali Murad</h4>
                <span>2nd year BSCS Student - NUST/SEECS</span>
                <!-- <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p> -->
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Doctors Section -->

    <a id="contact-us" class="extra"></a>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact pt-4">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>We do not have offices because we are students at the moment, however you may visit us to our classrooms located in RIMMS, IAEC and SEECS. We would be delighted to talk to you and spend some productive time together.</p>
        </div>
      </div>

      <div>
        <!-- <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> -->
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.569821408504!2d72.98749217454639!3d33.64239433926228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df967686954da9%3A0x34436c99dba44537!2sNUST%20School%20of%20Electrical%20Engineering%20and%20Computer%20Science%20(NUST-SEECS)!5e0!3m2!1sen!2s!4v1684418416842!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <!-- <div class="col-lg-4"> -->
            <div class="info d-flex flex-row justify-content-between">
              <div class="address col-4">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>JXRR+X24, Indus Loop, H-12, Islamabad</p>
              </div>

              <div class="email col-4">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>calamity.watch@support.com</p>
              </div>

              <div class="phone col-4">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+92 1002 3123123</p>
              </div>

            </div>

          <!-- </div> -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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