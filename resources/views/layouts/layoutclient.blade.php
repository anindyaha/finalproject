<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DITA TRANS | @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/katalog.css')}}" rel="stylesheet">
  <script src="https://kit.fontawesome.com/bd20a423ca.js" crossorigin="anonymous"></script>

  <!-- =======================================================
  * Template Name: Sailor
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center shadow p-3 mb-5 bg-body-tertiary rounded">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto">DITA TRANS</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="{{assets('img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar ">
        <ul>
          <li><a href="home">Home</a></li>
          <li><a href="katalog">Katalog</a></li>

          <div class="peminjaman">
            <li><a class="peminjaman-btn" id="peminjaman-btn">Peminjaman</a></li>
            <span class="pmj-quantity">0</span>
          </div>


          <li><a href="logout">Log Out</a></li>

          <li><a href="katalog" class="getstarted">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <div class="body-content">
    <div class="content ">
        @yield('content')
    </div>
</div>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Sailor</h3>
              <p>
                Jl.Ngesong Dukuh Kupang 3 No.8 <br>
                Surabaya, JawaTimur<br><br>
                <strong>Phone:</strong>+62 812 777 993 97<br>
                <strong>Email:</strong> ditatrans@gmail.com<br>
              </p>

            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="katalog">Katalog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="logout">Log Out</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>DITA TRANS</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{asset('vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js"></script>
  <script src="{{ asset('assets/js/script.js"></script>

  </body>

</html>
