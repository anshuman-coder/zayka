<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign Up</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.3.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <?php
  include 'sidebar.php';
  ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Sign Up</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Sign Up</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Login-form ======= -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col col-lg-9 col-sm-1 col-md-6">
          <form action="signup.php" method="POST">
            <div class="form-group">
              <label for="Name">Name</label>
              <input type="text" name="name" class="form-control" id="Name" aria-describedby="emailHelp" placeholder="Enter Name">
            </div>
            <br>
            <div class="form-group">
              <label for="Email1">Email</label>
              <input type="email" class="form-control" id="Email1" placeholder="Email" name="email">
            </div>
            <br>
            <div class="form-group">
              <label for="Password1">Password</label>
              <input type="password" class="form-control" id="Password1" placeholder="Password" name="password">
            </div>
            <br>
            <div class="form-group">
              <label for="Phone1">Mobile</label>
              <input type="number" class="form-control" id="Phone1" placeholder="Phone" name="phone">
            </div>
            <br>
            <div class="form-group">
              <label for="dob1">Date Of birth</label>
              <input type="date" class="form-control" id="dob1" placeholder="DOB" name="dob">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" value="yes" name="rememberMe">
              <label class="form-check-label" for="exampleCheck1">Remember me!</label>
            </div>
            <br>
            <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
          </form>
        </div>
      </div>
    </div>


    <!-- End Login-form -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- <script>
    $('.ui.checkbox')
      .checkbox();
  </script> -->

</body>

</html>