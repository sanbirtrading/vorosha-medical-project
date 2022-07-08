<?php include 'forms/appointment.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Appointment</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="shortcut icon" type="image/png" href="assets/img/VoroshaLogo.png" sizes="20*20" >
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center ">
      <div class="align-items-center d-none d-md-flex" >
        <i class="bi bi-clock"></i> Monday - Saturday, 9 am to 8 pm
      </div> 
      <div class="d-flex align-items-center">
        <i style="margin-left: 20px;" class='bx bxl-whatsapp'></i>Call us now +8801707587410
      </div>
    </div>
  </div>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo me-auto"><img src="assets/img/VoroshaLogo.png" alt=""></a>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Introduction</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#features">Training</a></li>
     
          <li><a class="nav-link scrollto" href="#pricing">Packages</a></li>
          <li><a class="nav-link scrollto" href="#test">Aptitude Test</a></li>
          <li><a class="nav-link scrollto" href="#terms">Terms & Conditions</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="blog.html">Blog</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <a href="appointment.php" class="btn-get-started scrollto">Appointment</a>
    </div>
  </header>
<section id="appointment" class="appointment section-bg ">
  <div class="container" data-aos="fade-up">
    <div class="section-title"  style="margin-top: 190px;">
      <h2>Make an Appointment</h2>
    </div>
    <form action="" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
      <div class="row">
        <div class="col-md-4 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
        </div>
        <div class="col-md-4 form-group">
          <input type="number" class="form-control" name="age" id="phone" placeholder="Your Age" required>
          </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 form-group mt-3 mt-md-0">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
        </div>
        <div class="col-md-6 form-group">
        <select name="role" required id="dropdown" class="form-select">
        <option value disabled selected >Your Gender</option>
        <option value="student">a)	Male </option>
        <option value="teacher">b)	Female  </option>
        <option value="job">c)	Other  </option>
        </select>
        </div>
      </div>
      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="6" placeholder="Message (Optional)"></textarea>
      </div>
      <div class="my-3">
      <?php echo $alert; ?>
      </div>
      <div class="text-center">
        <button name="submit" type="submit">Make an Appointment</button>
      </div>
    </form>
  </div>
</section>

</main>
 <footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6">
          <div class="footer-info">
            <h3>VOROSHA Mental Health Services</h3>
            <p style="text-align: justify;">
              We  also provide different types of trainings to <br> corporate organizations and we are also acting <br> as emotional wellness partner to different organizations.
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#about">Introduction</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#appoinment">Book Appointment</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Training</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#"> Behavioral training to improve behavior </a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#"> Whole body wellness training</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#"> Training for the new parents</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#"> Conflict resolution in career</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#"> Employee assistant training programs
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="copyright" style="color: #555555;">
      &copy; Copyright <strong><span>VOROSHA Mental Health Services</span></strong>. All Rights Reserved
    </div>
  </div>
</footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>