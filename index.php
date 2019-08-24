<?php
include 'koneksi.php';

$sql1 = "SELECT * FROM slider order By id_slider desc";
$sql2 = "SELECT * FROM berita limit 3";
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SMP Tahfidz Al Hikmah Semarang</title>
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
                  <!-- Brand -->
                  <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                    <!-- <h1><span>e</span>Tahfidz</h1> -->
                    <h3>SMP <span>Tahfidz Al Hikmah<span></h3>
                      <!-- Uncomment below if you prefer to use an image logo -->
                      <!-- <img src="img/logosmp.png" alt="logo" title="" width="60%"> -->
                    </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                    <ul class="nav navbar-nav navbar-right">
                      <li class="active">
                        <a class="page-scroll" href="index.php">Home</a>
                      </li>
                      <li>
                        <a class="page-scroll" href="profil.php">Profil</a>
                      </li>
                      <li>
                        <a class="page-scroll" href="pendaftaran.php">Pendaftaran</a>
                      </li>
                      <li>
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

      <!-- Start Slider Area -->

      <div id="home" class="slider-area">

        <div class="bend niceties preview-2">
          <div id="ensign-nivoslider" class="slider">

            <?php while($slider = mysqli_fetch_array($result1)){

              ?>
              <img src="admin/images/slider/<?= $slider['gambar_slider']; ?>" alt=""/>
              <!-- <img src="img/slider/slider2.jpg" alt="" title="#slider-direction-2" /> -->
              <!-- <img src="img/slider/slider3.jpg" alt="" title="#slider-direction-3" /> -->

              <!-- direction 1 -->
<!--               <div id="slider-direction" class="slider-direction">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="slider-content">
                        <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                          <h1 class="title"><?= $slider['ket_slider']; ?></h1>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <?php
            }
            ?>
          </div>

          <!-- direction 2 -->
          <div id="slider-direction-2" class="slider-direction slider-two">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="slider-content text-center">
                    <!-- layer 1 -->
<!--                     <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                      <h2 class="title1">The Best Business Information </h2>
                    </div> -->
                    <!-- layer 2 -->
                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                      <h1 class="title2">We're In The Business Of Get Quality Business Service</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- direction 3 -->
          <div id="slider-direction-3" class="slider-direction slider-two">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="slider-content">
                    <!-- layer 1 -->
<!--                     <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                      <h2 class="title1">The Best business Information </h2>
                    </div> -->
                    <!-- layer 2 -->
                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                      <h1 class="title2">Helping Business Security  & Peace of Mind for Your Family</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Slider Area -->

      <!-- Start About area -->
      <div id="about" class="about-area area-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Profil</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- single-well start-->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="well-left">
                <div class="single-well">
                  <a href="#">
                    <img src="img/1.jpg" alt="">
                  </a>
                </div>
              </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="well-middle">
                <div class="single-well">
                  <a href="#">
                    <h4 class="sec-head">SMP Tahfidz Al Hikmah Semarang</h4>
                  </a>
                  <p style="text-align:justify">
                    Merupakan rintisan sekolah unggulan berasrama yang mempersiapkan generasi hafidz/hafidzah yang mampu menghayati dan mengamalkan isi serta kandungan Al Qur'an, bertaqwa, berintegritas, berakhlaqul karimah dan memiliki intelektualitas tinggi.
                  </p>
                  <p style="text-align:justify">
                    Program pendidikan SMP Tahfidz Al Hikmah dilaksanakan dengan mengintegrasikan pendidikan formal dengan kurikulum Tahfidz berbasis pesantren dibawah tenaga pengajar dan mentor tahfidz yang berkompeten dan profesional dibidangnya.
                  </p>
                </div>
              </div>
            </div>
            <!-- End col-->
          </div>
        </div>
      </div>
      <!-- End About area -->

      <!-- Start Suscrive Area -->
      <div class="suscribe-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
              <div class="suscribe-text text-center">
                <h4><i><b>Visi</b></i></h4>
                <p>“Mencetak generasi hafidz qur’an yang berakhlak mulia, berintegritas, berkarakter, cerdas dan terampil.”</p>
                <br>
                <h4><b><i>Misi</i></b></h4>
                <p>1.  Mempersiapkan generasi Islam hafidz-hafidzah yang mampu menghayati, mendalami dan mengamalkan isi serta kandungan Al-Qur’an.<br>
                  2.  Menghasilkan generasi yang berakhlak mulia, berintegritas, berkarakter positif dan mampu bersaing dengan perkembangan zaman.<br>
                  3.  Membentuk siswa produktif, mandiri dan peduli pada lingkungan.<br>
                  4.  Menyelenggarakan pendidikan profesional, kreatif dan inovatif.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Suscrive Area -->

      <!-- Start Blog Area -->
      <div id="blog" class="blog-area">
        <div class="blog-inner area-padding">
          <div class="blog-overly"></div>
          <div class="container ">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                  <h2>Berita - Berita</h2>
                </div>
              </div>
            </div>
            <div class="row">

              <?php while($berita = mysqli_fetch_array($result2)){

                ?>
                <!-- Start Left Blog -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="single-blog">
                    <div class="single-blog-img">
                      <img src="admin/images/berita/<?= $berita['gambar_brt']; ?>" alt="">
                    </div>
                    <div class="blog-meta">
                      <span class="date-type">
                        <i class="fa fa-calendar"></i><?= $berita['tanggal_brt']; ?>
                      </span>
                    </div>
                    <div class="blog-text">
                      <h4>
                        <a href="detailberita.php?judul=<?= $berita['judul_brt'];?>"><?= $berita['judul_brt']; ?></a>
                      </h4>
                      <p>
                        <?= substr($berita['isi_brt'], 0,65); ?>....
                      </p>
                    </div>
                    <span>
                      <a href="detailberita.php?judul=<?= $berita['judul_brt'];?>" class="ready-btn">Selengkapnya</a>
                    </span>
                  </div>
                  <!-- Start single blog -->
                </div>
                <!-- End Left Blog-->
                <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
      <!-- End Blog -->
      <!-- Start Suscrive Area -->
      <div class="suscribe-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
              <div class="suscribe-text text-center">
                <h4><b>Informasi Seputar Pendaftaran Siswa Baru</b></h4>
                <a class="sus-btn" href="pendaftaran.php">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Suscrive Area -->


      <!-- Start portfolio Area -->
      <div id="portfolio" class="portfolio-area area-padding fix">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <br>
                <h2>Galeri</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start Portfolio -page -->

            <div class="awesome-project-content">
              <!-- single-awesome-project start -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-awesome-project">
                  <div class="awesome-img">
                    <a href="#"><img src="img/galeri/1.jpg" alt="" /></a>
                    <div class="add-actions text-center">
                      <div class="project-dec">
                        <a class="venobox" data-gall="myGallery" href="img/galeri/1.jpg">
                          <h4>Business City</h4>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- single-awesome-project end -->
              <!-- single-awesome-project start -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-awesome-project">
                  <div class="awesome-img">
                    <a href="#"><img src="img/galeri/2.jpg" alt="" /></a>
                    <div class="add-actions text-center">
                      <div class="project-dec">
                        <a class="venobox" data-gall="myGallery" href="img/galeri/2.jpg">
                          <h4>Blue Sea</h4>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- single-awesome-project end -->
              <!-- single-awesome-project start -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-awesome-project">
                  <div class="awesome-img">
                    <a href="#"><img src="img/galeri/3.jpg" alt="" /></a>
                    <div class="add-actions text-center">
                      <div class="project-dec">
                        <a class="venobox" data-gall="myGallery" href="img/galeri/3.jpg">
                          <h4>Beautiful Nature</h4>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- single-awesome-project end -->
              <!-- single-awesome-project start -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-awesome-project">
                  <div class="awesome-img">
                    <a href="#"><img src="img/galeri/4.jpg" alt="" /></a>
                    <div class="add-actions text-center">
                      <div class="project-dec">
                        <a class="venobox" data-gall="myGallery" href="img/galeri/4.jpg">
                          <h4>Creative Team</h4>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- single-awesome-project end -->
              <!-- single-awesome-project start -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-awesome-project">
                  <div class="awesome-img">
                    <a href="#"><img src="img/galeri/5.jpg" alt="" /></a>
                    <div class="add-actions text-center text-center">
                      <div class="project-dec">
                        <a class="venobox" data-gall="myGallery" href="img/galeri/5.jpg">
                          <h4>Beautiful Flower</h4>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- single-awesome-project end -->
              <!-- single-awesome-project start -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-awesome-project">
                  <div class="awesome-img">
                    <a href="#"><img src="img/galeri/6.jpg" alt="" /></a>
                    <div class="add-actions text-center">
                      <div class="project-dec">
                        <a class="venobox" data-gall="myGallery" href="img/galeri/6.jpg">
                          <h4>Night Hill</h4>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- single-awesome-project end -->
            </div>
          </div>
        </div>
      </div>
      <!-- awesome-portfolio end -->
      <!-- Start Suscrive Area -->
      <div class="suscribe-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
              <div class="suscribe-text text-center">
                <h4>"Sebaik-baik kalian adalah yang mempelajari Al Qur'an dan mengajarkannya"</h4>
                <p><i>HR Bukhori</i></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Suscrive Area -->      
      <!-- Start contact Area -->
      <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
          <div class="contact-overly"></div>
          <div class="container ">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                  <h2>Kontak Kami</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- Start contact icon column -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="contact-icon text-center">
                  <div class="single-icon">
                    <i class="fa fa-mobile"></i>
                    <p>
                      Telp: (024) 6716657<br>
                      <span>Senin - Sabtu (07:00-13:00)</span>
                    </p>
                  </div>
                </div>
              </div>
              <!-- Start contact icon column -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="contact-icon text-center">
                  <div class="single-icon">
                    <i class="fa fa-envelope-o"></i>
                    <p>
                      Email: alhikmahsemarang@gmail.com<br>
                      <span>Web: www.smptahfidzalhikmah.com</span>
                    </p>
                  </div>
                </div>
              </div>
              <!-- Start contact icon column -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="contact-icon text-center">
                  <div class="single-icon">
                    <i class="fa fa-map-marker"></i>
                    <p>
                      Alamat: Jl. Pesantren No 3 Pedurungan Lor<br>
                      <span>Pedurungan Semarang 50192</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">

              <!-- Start Google Map -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <!-- Start Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.9523155538545!2d110.48176951435843!3d-7.014890870662945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708d6d00b2683f%3A0xe4d042ea0e86f3c6!2sSMP+Tahfidz+Al+Hikmah!5e0!3m2!1sen!2sid!4v1564920267930!5m2!1sen!2sid" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                <!-- End Map -->
              </div>
              <!-- End Google Map -->

              <!-- Start  contact -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form contact-form">
                  <!-- <div id="sendmessage">Your message has been sent. Thank you!</div> -->
                  <!-- <div id="errormessage"></div> -->

                  <form method="post" action="">
                    <input name="nama_pesan" id="nama_pesan" type="text" class="form-control" placeholder="Masukkan Nama..." >
                    <input name="nohp_pesan" id="nohp_pesan" type="text" class="form-control" placeholder="No Telepon..." >
                    <input name="email_pesan" id="email_pesan" type="email" class="form-control" placeholder="Masukkan Email..." >
                    <textarea name="isi_pesan" id="isi_pesan" cols="" rows="" class="form-group" placeholder="Isi Pesan..."></textarea>
                    <!-- <input type="submit" id="submit" name="send" class="submitBnt" value="Send"> -->
                    <div class="text-center">
                      <button type="submit" name="simpan">Kirim Pesan</button>
                    </div>
                    <div id="simple-msg"></div>
                  </form>

                </div>
              </div>
              <!-- End Left contact -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact Area -->

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
                  Copyright 2019 &copy; SMP Tahfidz Al Hikmah Semarang
                </p>
              </div>
              <!-- <div class="credits"> -->
                <div class="copyright text-center">
                  by <a href="https://instagram.com/najib_ibra/">Najib Ibra</a>
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

    <?php
    include 'koneksi.php';
    if(isset($_POST['simpan'])){

     $sql= "INSERT INTO pesan (nama_pesan, nohp_pesan, email_pesan, isi_pesan) 
     VALUES ('".$_POST['nama_pesan']."',
     '".$_POST['nohp_pesan']."',
     '".$_POST['email_pesan']."',
     '".$_POST['isi_pesan']."')";

     $s1 = mysqli_query($conn,$sql);


     if($s1){
       ?>
       <script>alert("Terima Kasih Telah Mengirim Pesan"); document.location= 'index.php';
     </script>
     <?php
   }
   else{
    ?>
    <script>alert("Gagal Mengirim Pesan"); document.location= 'index.php';
  </script>
  <?php

}
} ?> 