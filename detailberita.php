<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Berita | SMP Tahfidz Al Hikmah Semarang</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon">
  <link href="img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lexend Deca:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
    ======================================================= -->
  </head>

  <body data-spy="scroll" data-target="#navbar-example">

    <div id="preloader"></div>

    <header>
      <!-- header-area start -->
      <div id="sticker" class="header-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">

              <!-- Navigation -->
              <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <!-- Brand -->
                  <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                    <!-- <h1><span>e</span>Business</h1> -->
                    <h3>SMP <span>Tahfidz Al Hikmah<span></h3>
                      <!-- Uncomment below if you prefer to use an image logo -->
                      <!-- <img src="img/logo.png" alt="" title=""> -->
                    </a>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                    <ul class="nav navbar-nav navbar-right">
                      <li>
                        <a class="page-scroll" href="index.php">Home</a>
                      </li>
                      <li>
                        <a class="page-scroll" href="profil.php">Profil</a>
                      </li>
                      <li>
                        <a class="page-scroll" href="pendaftaran.php">Pendaftaran</a>
                      </li>
                      <li class="active">
                        <a class="page-scroll" href="berita.php">Berita</a>
                      </li>
                      <li>
                        <a class="page-scroll" href="galeri.php">Galeri</a>
                      </li>
                      <li>
                        <a class="page-scroll" href="kontak.php">Kontak</a>
                      </li>
                    </ul>
                  </div>
                  <!-- navbar-collapse -->
                </nav>
                <!-- END: Navigation -->
              </div>
            </div>
          </div>
        </div>
        <!-- header-area end -->
      </header>
      <!-- header end -->

      <!-- Start Bottom Header -->
      <div class="header-bg page-area">
        <div class="home-overly"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <div class="header-bottom">
                  <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                    <h1 class="title2">Detail Berita</h1>
                  </div>
                  <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                    <h2 class="title3">SMP Tahfidz Al Hikmah Semarang</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Header -->
      <div class="blog-page area-padding">
        <div class="container">
          <div class="row">

           <?php
           include "koneksi.php";

           $sql = $conn->query("SELECT * FROM berita WHERE judul_brt='$_GET[judul]'");
           $d = $sql->fetch_assoc();

           ?>
           <!-- Start single blog -->
           <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <a href="blog-details.html">
                     <img src="admin/images/berita/<?= $d['gambar_brt']; ?>" alt="">
                   </a>
                 </div>
                 <div class="blog-meta">
                   <span class="date-type">
                     <i class="fa fa-calendar"></i><?php echo $d['tanggal_brt']; ?>
                   </span>
                 </div>
                 <div class="blog-text">
                  <h4>
                   <?php echo $d['judul_brt']; ?>
                 </h4>
                 <p style="text-align: justify;">
                  <?php echo $d['isi_brt']; ?>
                </p>
              </div>
            </div>
          </div>
          <!-- End single blog -->

        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Blog Area -->

<div class="clearfix"></div>

<!-- Start Footer bottom Area -->
<footer>
  <div class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="footer-content">
            <div class="footer-head">
              <div class="footer-logo">
                <img src="img/logosmp.png" alt="" title="" width="80%">
              </div>
              <p>
                Jl. Pesantren No. 3 Pedurungan Semarang<br>
                alhikmahsemarang@gmail.com<br>
                (024) 6716657<br>
                50192
              </p>
            </div>
          </div>
        </div>

        <!-- end single footer -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="footer-content">
            <div class="footer-head">
              <h4><b>informasi</b></h4>
              <div class="footer-contacts">
                <p>Penyelenggara & Pengelola :<br><b>Yayasan Al Hikmah As Salafiyah Semarang</b></p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="https://www.instagram.com/ppalhikmahsmg/"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="https://web.facebook.com/ppalhikmahsmg/"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a https://www.youtube.com/channel/UCld4GHv_Tu-IoTsuRrGj5Yw"><i class="fa fa-youtube"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ----- -->
      </div>
    </div>
  </div>
  <div class="footer-area-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="copyright text-center">
            <p>
              Copyright 2019 &copy; <strong>SMP Tahfidz Al Hikmah Semarang</strong>.
            </p>
          </div>
          <!-- <div class="credits"> -->
            <div class="copyright text-center">
              by <a href="https://instagram.com/najib_ibra/"><b> Najib Ibra</b></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
</body>

</html>
