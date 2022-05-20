
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="seo & digital marketing">
    <meta name="keywords" content="marketing,digital marketing,creative, agency, startup,promodise,onepage, clean, modern,seo,business, company">
    <meta name="author" content="Themefisher.com">

   <title>Promodise - seo and digital marketing solution </title>
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <!-- Icofont Css -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('plugins/animate-css/animate.css') }}">
    <!-- Icofont -->
    <link rel="stylesheet" href="{{ asset('plugins/icofont/icofont.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">


</head>


<body data-spy="scroll" data-target="#mainNav">
    @include("layouts.nav")
<!--MAIN HEADER AREA END -->
<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
  <div class="overlay dark-overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
        <div class="banner-content content-padding">
          <h1 class="text-white">Let's Connect with us</h1>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, perferendis?</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--MAIN HEADER AREA END -->
<!--  Contact START  -->
<section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-12 col-md-12">
        <div class="mb-5">
          <h2 class="mb-2">Get in touch</h2>
          <p>Have a project on mind,want to make an consultant. Don't hesistate to contact us.Let's have atalk
            together.Colaborat eyour project to done quickly</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 col-sm-12">
        <form class="contact__form" method="post" action="mail.php">
          <!-- form message -->
          <div class="row">
            <div class="col-12">
              <div class="alert alert-success contact__msg" style="display: none" role="alert">
                Your message was sent successfully.
              </div>
            </div>
          </div>
          <!-- end message -->
          <div class="row">
            <div class="col-md-6 form-group">
              <input name="name" type="text" class="form-control" placeholder="Name" required>
            </div>
            <div class="col-md-6 form-group">
              <input name="email" type="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="col-md-12 form-group">
              <input name="subject" type="text" class="form-control" placeholder="Subject" required>
            </div>
            <div class="col-12 form-group">
              <textarea name="message" class="form-control" rows="6" placeholder="Message" required></textarea>
            </div>
            <div class="col-12 mt-4">
              <input name="submit" type="submit" class=" btn btn-hero btn-circled" value="Send Message">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-5 pl-4 mt-4 mt-lg-0">
        <h4>Office Address</h4>
        <p class="mb-3">John lake park 9/12 street park London</p>
        <h4>Contact Info</h4>
        <p class="mb-3">+23 456 7920</p>
        <h4>Contact Mail</h4>
        <p class="mb-3">support@email.com</p>
        <h4>Website</h4>
        <p>www.companyname.com</p>
      </div>
    </div>
  </div>
</section>
<!--  CONTACT END  -->

<!--  Google Map START  -->
<div id="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/marker.png"></div>
<!--  Google Map END  -->
<!--  FOOTER AREA START  -->
<section id="footer" class="section-padding">
  <div class="container">
    <div class="row justify-content-around">
      <div class="col-lg-4">
        <div class="footer-widget footer-link">
          <h4>We concern about you<br> to grow business rapidly.</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsam hic non sunt recusandae atque unde saepe nihil earum voluptatibus aliquid optio suscipit nobis quia vel quod, iure quae.</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6">
        <div class="footer-widget footer-link">
          <h4>About</h4>
          <ul>
            <li><a href="about.html">About</a></li>
            <li><a href="service.html">Service</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            <li><a href="#!">Team</a></li>
            <li><a href="#!">Testimonials</a></li>
            <li><a href="blog.html">Blog</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="footer-widget footer-link">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="#!">How it Works</a></li>
            <li><a href="#!">Support</a></li>
            <li><a href="#!">Privacy Policy</a></li>
            <li><a href="#!">Report Bug</a></li>
            <li><a href="#!">License</a></li>
            <li><a href="#!">Terms & Condition</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="footer-widget footer-text">
          <h4>Our location</h4>
          <p class="mail"><span>Mail:</span> promdise@gmail.com</p>
          <p><span>Phone :</span>+202-277-3894</p>
          <p><span>Location:</span> 455 West Orchard Street Kings Mountain, NC 28086,NOC building</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="footer-copy">
          Copyright &copy; 2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  FOOTER AREA END  -->



<!--    Essential Scripts    =====================================-->
    <!-- Main jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
   <!-- Woow animtaion -->
    <script src="{{ asset('plugins/counterup/wow.min.js') }}"></script>
    <script src="{{ asset('plugins/counterup/jquery.easing.1.3.js') }}"></script>

    <!-- Google Map -->
    <script src="{{ asset('plugins/google-map/gmap3.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>
    <!-- Contact Form -->
    <script src="{{ asset('plugins/jquery/contact.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- main script -->
    <script src="{{asset('js/script.js')}}"></script>

  </body>
  </html>
