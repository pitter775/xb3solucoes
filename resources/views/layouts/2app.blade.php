<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta name="theme-color" content="#ff7c00">
    <meta content="pitter775@gmail.com" name="author">
    <meta property="og:description" content="XB3 Sistema de Pesquisas Inteligentes."/>
    <meta property="og:image" content="{{ asset('img') }}/logowhats.jpg" />
    <meta property="og:type" content="website"/>
    <meta property="og:locale" content="pt_BR"/> 

    <link rel="apple-touch-icon" sizes="76x76" href="">
    <link rel="icon" type="image/png" href="{{ asset('img') }}/logop.png">

    <title> XB3 Pesquisas Inteligentes </title>








    <!-- CSS Files -->
    <link href="{{ asset('vendor') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('vendor') }}/ic  .css" rel="stylesheet" />
    <link href="{{ asset('vendor') }}/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="{{ asset('vendor') }}/venobox/venobox.css" rel="stylesheet" />
    <link href="{{ asset('vendor') }}/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{ asset('vendor') }}/aos/aos.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('css') }}/style.css" rel="stylesheet" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R3RDVZG5HK"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-R3RDVZG5HK');
    </script>

</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <!-- <h1 class="text-light"><a href="index.html"><span>Squadfree</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#hero"><img src="{{ asset('img') }}/logop.png" alt="" class="img-fluid logop"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Home</a></li>
          <li><a href="#about">Serviços</a></li>
          <!-- <li><a href="#services">Serviços</a></li> -->
          <li><a href="#counts">XB3</a></li>
          <li><a href="#contact">Contato</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

    @yield('content')


    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor') }}/jquery/jquery.min.js"></script>
    <script src="{{ asset('vendor') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('vendor') }}/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{ asset('vendor') }}/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{ asset('vendor') }}/counterup/counterup.min.js"></script>
    <script src="{{ asset('vendor') }}/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('vendor') }}/venobox/venobox.min.js"></script>
    <script src="{{ asset('vendor') }}/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('vendor') }}/aos/aos.js"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('js') }}/main.js"></script>
    <!-- <script src="{{ asset('js') }}/whats.js"></script> -->
    <!-- <script defer async src='https://duz4dqsaqembt.cloudfront.net/client/whats.js'></script> -->

    @stack('scripts')
</body>
</html>