<?php include 'forms/test.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Test</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
      <div class="d-flex align-items-center ">
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

  <main id="main">

<section id="features" class="features">
		<div class="container" data-aos="fade-up">
			<div class="section-title " style="margin-top: 190px;">
				<h2>Aptitude test:</h2>
      </div>
			<div class="row">
				<div class="col-lg-3 text-center " style="margin-top: 3%;  margin-bottom: 3%;" data-aos="fade-right">
					<img src="assets/img/ssnew1.jpeg" class="img-fluid" style=" height: 70vh;   box-shadow: 6px 6px 8px #a7a6a6,-3px -3px 4px #dfdddd;border-radius: 30px; " alt="">
				</div>
				<div class="col-lg-3 text-center " style="margin-top: 3%;  margin-bottom: 3%;" data-aos="fade-right">
					<img src="assets/img/ssnew2.jpeg" class="img-fluid" style=" height: 70vh; box-shadow: 6px 6px 8px #a7a6a6,-3px -3px 4px #dfdddd;border-radius: 30px; " alt="">
				</div>

			
      <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
        <form action="forms/test.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
        <div class="form-group">
          <p id="quest">1) I am confident and I believe I will achieve all my life goals</p>
          <select name="b" required id="dropdown" class="form-select">
            <option value disabled selected>Select Answer</option>
            <option value="student">a) I will</option>
            <option value="teacher">b) I don’t think so</option>
            <option value="job">c) Sometimes</option>
            <option value="other">d) Not sure</option>
          </select>
        </div>
        <div class="form-group">
          <p id="quest">2) When something unpleasant happens, I always tend to blame myself</p>
          <select name="c" required id="dropdown" class="form-select">
            <option value disabled selected>Select Answer</option>
            <option value="student">a) I always blame myself</option>
            <option value="teacher">b) I often blame myself</option>
            <option value="job">c) I see it as it was luck to end up like this</option>
            <option value="other">d) I never blaim myself, I just let it go</option>
          </select>
        </div>
        <div class="form-group">
          <p id="quest">3) If someone do compliment me, I take it</p>
          <select name="d" required id="dropdown" class="form-select">
            <option value disabled selected>Select Answer</option>
            <option value="teacher">a) Positively</option>
            <option value="job">b) I don’t care about it</option>
            <option value="other">c) I take it negatively</option>
            <option value="other">d) I don’t care</option>
          </select>
        </div>
        <div class="form-group">
          <p id="quest">4) When I meet someone for the very first time, my view of point towards him is</p>
          <select name="e" required id="dropdown" class="form-select">
            <option value disabled selected>Select Answer</option>
            <option value="student">a) Treat them cautiously</option>
            <option value="teacher">b) I try to remain formal as much as possible</option>
            <option value="job">c) I try to mix up with them as quickly as possible</option>
            <option value="other">d) I try to focus on the negative side, what negative he/she can do</option>
          </select>
        </div>
        <div class="form-group">
          <p id="quest">5) Do you look back and try to observe the mistakes you made in life to avoid them in the future?</p>
          <select name="f" required id="dropdown" class="form-select">
            <option value disabled selected>Select Answer</option>
            <option value="student">a) I do</option>
            <option value="teacher">b) I don’t do that</option>
            <option value="job">c) I live carefree</option>
          </select>
        </div>
        <div class="form-group">
          <p id="quest">6) Do you get angry when your boss tries to humiliate you when you mistake?</p>
          <select name="g" required id="dropdown" class="form-select">
            <option value disabled selected>Select Answer</option>
            <option value="teacher">a) I get angry and furious</option>
            <option value="job">b) I do apologize and ensure I will never repeat that again</option>
            <option value="other">c) I just try not to let things affect me</option>
            <option value="other">d) I remain carefree and argue with him</option>
          </select>
        </div>
        <div class="form-group">
          <p id="quest">7) Do you get panicked for every little thing that goes against your comfort zone?</p>
          <select name="h" required id="dropdown" class="form-select">
            <option value disabled selected>Select Answer</option>
            <option value="student">a) I always get panicked</option>
            <option value="teacher">b) I often get panicked</option>
            <option value="job">c) I sometimes get panicked</option>
            <option value="other">d) I never get panicked</option>
          </select>
        </div>
        <div class="form-group">
          <p id="quest">8) Do you try to value others intention towards something in positive way?</p>
          <select name="i" required id="dropdown" class="form-select">
            <option value disabled selected>Select Answer</option>
            <option value="student">a) I always do value</option>
            <option value="teacher">b) I never see it in positive way</option>
            <option value="job">c) I try to humiliate them</option>
            <option value="job">d) I often do value</option>
          </select>
        </div>
        <div class="form-group">
          <p id="quest">9) Is it possible for you to balance work life and family life?</p>
          <select name="j" required id="dropdown" class="form-select">
            <option value disabled selected>Select Answer</option>
            <option value="teacher">a) Yes, possible</option>
            <option value="job">b) Often, possible</option>
            <option value="other">c) Not possible</option>
          </select>
        </div>
        <div class="my-3">
        <?php echo $alert; ?>
        </div>
        <div class="text-center"><button type="submit">Submit</button></div>
        </form>
      </div>
    </div>
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