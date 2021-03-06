
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


<body data-spy="scroll" data-target=".fixed-top">


@include('layouts\nav')


@yield('contenu')


    <!-- Essential Scripts =====================================-->

    <!-- Main jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
   <!-- Woow animtaion -->
    <script src="{{ asset('plugins/counterup/wow.min.js') }}"></script>
    <script src="{{ asset('plugins/counterup/jquery.easing.1.3.js') }}"></script>
     <!-- Counterup -->
    <script src="{{ asset('plugins/counterup/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('plugins/counterup/jquery.counterup.min.js') }}"></script>

    <!-- Google Map -->
    <script src="{{ asset('plugins/google-map/gmap3.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>
    <!-- Contact Form -->
    <script src="{{ asset('plugins/jquery/contact.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

  </body>
  </html>
