<?php
session_start();
include "koneksi.php";

if (!$_SESSION['user']['level'] == "admin") {
  echo "<script>alert('Anda harus Login'); </script>";
  header('location:../index.php');
  // exit();
}


?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>Admin | SMP TAHFIDZ AL HIKMAH SEMARANG</title>
  <link rel="apple-touch-icon" sizes="60x60" href="../app-assets/images/ico/apple-icon-60.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../app-assets/images/ico/apple-icon-76.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../app-assets/images/ico/apple-icon-120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../app-assets/images/ico/apple-icon-152.png">
  <link rel="shortcut icon" type="image/x-icon" href="../../img/logo.png">
  <link rel="shortcut icon" type="image/png" href="../../img/logo.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
  <!-- font icons-->
  <link rel="stylesheet" type="text/css" href="../app-assets/fonts/icomoon.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/pace.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN ROBUST CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
  <!-- END ROBUST CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <!-- END Custom CSS-->
</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
  <!-- <div id="preloader"></div> -->

  <!-- navbar-fixed-top-->
  <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav">
          <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a data-toggle="collapse" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
          <li class="nav-item"><a href="index.html" class="navbar-brand nav-link"><img alt="branding logo" src="../../img/logosmp.png" data-expand="../../img/logosmp.png" data-collapse="../../img/logosmp.png" class="brand-logo" width="110%"></a></li>
          <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
        </ul>
      </div>
      <div class="navbar-container content container-fluid">
        <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
          <ul class="nav navbar-nav">
            <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5">         </i></a></li>
          </ul>
          <ul class="nav navbar-nav float-xs-right">
            <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
              <span class="icon-user4"><i></i></span>
              <!-- <span class="avatar avatar-online"><img src="../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span> -->
              <span class="user-name">
                <?php 
                if ($_SESSION['user']['level'] == "admin") {
                  echo $_SESSION['user']['username'];
                }
                ?> 
              </span></a>
              <div class="dropdown-menu dropdown-menu-right">
               <!--  <a href="#" class="dropdown-item">
                  <i class="icon-head"></i> Edit Profile
                </a> -->

                <a href="logout.php" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- ////////////////////////////////////////////////////////////////////////////-->

  <?php 
  if ($_SESSION['user']['level'] == "admin") {
         // echo "halo Admin";
   ?>
   <!-- main menu-->
   <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <!-- main menu header-->
    <div class="main-menu-header">
      <input type="text" placeholder="" class="menu-search form-control round"/>
    </div>
    <!-- / main menu header-->


    <!-- main menu content-->
    <div class="main-menu-content">
      <ul id="main-menu-navigation" icdata-menu="menu-navigation" class="navigation navigation-main">
        <li class=" nav-item"><a href="?halaman=home"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</span></a>
        </li>
        <li class=" nav-item"><a href="?halaman=dataslider"><i class="icon-image3"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">Slider</span></a>
        </li>
        <li class=" nav-item"><a href="?halaman=databerita"><i class="icon-paper"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">Berita</span></a>
        </li>
        <li class=" nav-item"><a href="?halaman=dataakun"><i class="icon-user4"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">Akun</span></a>
        </li>
        <li class=" nav-item"><a href="?halaman=datapesan"><i class="icon-mail6"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">Pesan</span></a>
        </li>                                     
      </ul>
    </div>
    <!-- /main menu content-->
    <!-- main menu footer-->
    <!-- include includes/menu-footer-->
    <!-- main menu footer-->


  </div>
  <!-- / main menu-->

  <?php
} 
?>

<!--   <div class="app-content content container-fluid">
    <div class="content-wrapper">

    j
  </div>
</div> -->


<!-- ////////////////////////////////////////////////////////////////////////////-->
<!-- disini -->
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

switch ($_GET['halaman']) {
  case 'home':
  include 'home.php';
  break;

  case 'dataslider':
  include 'dataslider.php';
  break;

  case 'tambahslider':
  include 'tambahslider.php';
  break;

  case 'lihatslider':
  include 'lihatslider.php';
  break;

  case 'editslider':
  include 'editslider.php';
  break;

  case 'hapusslider':
  include 'hapusslider.php';
  break;

  case 'databerita':
  include 'databerita.php';
  break;

  case 'tambahberita':
  include 'tambahberita.php';
  break;

  case 'lihatberita':
  include 'lihatberita.php';
  break;

  case 'editberita':
  include 'editgaleri.php';
  break;

  case 'hapusberita':
  include 'hapusberita.php';
  break;

  case 'dataakun':
  include 'dataakun.php';
  break;

  case 'tambahakun':
  include 'tambahakun.php';
  break;

  case 'lihatakun':
  include 'lihatakun.php';
  break;

  case 'editakun':
  include 'editakun.php';
  break;

  case 'hapusakun':
  include 'hapusakun.php';
  break;

  case 'datapesan':
  include 'datapesan.php';
  break;

  case 'lihatpesan':
  include 'lihatpesan.php';
  break;

  case 'hapuspesan':
  include 'hapuspesan.php';
  break;

  default:
      // echo "Selamat Datang";
  include 'index.php';
  break;
}
?>



<footer class="footer footer-static footer-light navbar-border">
  <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright 2019 &copy; <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 warning darken-2">SMP TAHFIDZ AL HIKMAH </a>- by <b>NAJIB IBRA</b> </span><span class="float-md-right d-xs-block d-md-inline-block">Made with <i class="icon-heart5 pink"></i> in Semarang</span></p>
</footer>

<!-- BEGIN VENDOR JS-->
<script src="../app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
<script src="../app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
<script src="../app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
<script src="../app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="../app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
<script src="../app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
<script src="../app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="../app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
<script src="../app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="../app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN ROBUST JS-->
<script src="../app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="../app-assets/js/core/app.js" type="text/javascript"></script>
<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="../app-assets/js/scripts/pages/dashboard-2.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
<script type="text/javascript">

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#showgambar').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#inputgambar").change(function () {
    readURL(this);
  });

</script>
</body>
</html>
