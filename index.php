<?php
  session_start();
  unset($_SESSION['accountNo']);

?>
  

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Imperial</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/bank-icon.ico" rel="icon">
  <link href="assets/img/bank-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
  
        <div class="logo">
          <h1><a href="index.html" ><img src="assets/img/bank-icon.ico">Imperial Bank</a></h1>
        
        </div>
  
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a href="transfermoney.php" class="nav-link scrollto" href="#customer_list">Transfer Money</a></li>
            <li><a href="transactionhistory.php" class="nav-link scrollto" href="#customer_list">Transfer History</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  
      </div>
    </header><!-- End Header -->
  
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
  
      <div class="container">
        <div class="row">
          <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Welcome to Imperial Bank</h1>
            <h2 data-aos="fade-up" data-aos-delay="400">We understanding what the citizens need and bringing out technology solutions to fill gaps wherever there are any.</h2>
            <div data-aos="fade-up" data-aos-delay="800">
              <a href="#about" class="btn-get-started scrollto">Get started</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
            <img src="assets/img/Bank-img.svg" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>
  
    </section><!-- End Hero -->
  
    <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>About Us</h2>
          </div>
  
          <div class="row content">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
              <p>
                Since we at Imperial Bank first opened our doors in 1955, we've been committed to providing customers with better products and services, backed by a hometown experience.
                <br>
                By that we mean whenever you walk into an Imperial Bank branch, you can expect to receive the attention and respect you deserve and the helpful, customized advice you seek. And because we're a locally-run bank, if our staff and you aren't already on a first-name basis, you'll definitely leave that way.
              </p>
            
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <ul>
                <li><i class="ri-check-double-line"></i> If you're looking for affordable financing with a quick turnaround, we're your bank.</li>
                <li><i class="ri-check-double-line"></i> If you're looking for convenient services that save you valuable time, we're your bank.</li>
                <li><i class="ri-check-double-line"></i> If you're looking for a checking and savings account to keep you organized and financially strong, we're your bank.</li>
              </ul>
            </div>
          </div>
  
        </div>
      </section><!-- End About Us Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Features</h2>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="300">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line" style="color: #ffbb2c;"></i>
            <h3><a href="">Secure Pay</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
            <h3><a href="">Graphical Dashboard</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
            <h3><a href="">2 Step Verification</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
            <h3><a href="">Instant Message Alert</a></h3>
          </div>
        </div>
        </div>
        </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->

 <!-- ======= Testimonials Section ======= -->
 <section id="testimonials" class="testimonials section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Magnam dolores commodi suscipit eum quidem consectetur velit</p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Imperial Bank is the best bank for monitring data it provides data in graphical manner from that we can understand or account is in proft or loss. Also I use saving options whic is wonderful.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The transaction system of bank is very fast. We can easily manage our transaction history with digramatical manner.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  This bank gives instant gives instant alert after every transaction. Personally I like UI of this dashboard and profile section.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  This is the wonderful bank I ever seen. You can easily create account in just 10 minutes and star your online banking.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Contact Us</h2>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="contact-about">
            <h3>Imperial Bank</h3>
            <p>For Any query related to bank or account please contact us. We are trying to solve your all problems.</p>
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
          <div class="info">
            <div>
              <i class="ri-map-pin-line"></i>
              <p>128 Gaushala Pratap Nagar<br>Jaipur, Rajasthan 302033</p>
            </div>

            <div>
              <i class="ri-mail-send-line"></i>
              <p>info@example.com</p>
            </div>

            <div>
              <i class="ri-phone-line"></i>
              <p>+91 1234567890</p>
            </div>

          </div>
        </div>

        <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-lg-6 text-lg-left text-center">
        <div class="copyright">
          &copy; Copyright <strong>Imperial Bank</strong>. All Rights Reserved
        </div>
        <div class="credits"> 
          Designed by <a >Kushagra Mathur</a>
        </div>
      </div>
      <div class="col-lg-6">
        <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
          <a href="#intro" class="scrollto">Home</a>
          <a href="#about" class="scrollto">About</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Use</a>
        </nav>
      </div>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>

