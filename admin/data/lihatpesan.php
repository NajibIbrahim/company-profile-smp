<?php
include "koneksi.php";
$sql = $conn->query("SELECT * FROM pesan WHERE id_pesan='$_GET[id]'");
$d = $sql->fetch_assoc();

?>
<div class="app-content content container-fluid">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-xs-12 mb-1">
        <h2 class="content-header-title">SMP Tahfidz Al Hikmah</h2>
      </div>
      <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
        <div class="breadcrumb-wrapper col-xs-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?halaman=home">Home</a>
            </li>
            <li class="breadcrumb-item">Pesan
            </li>
            <li class="breadcrumb-item">Lihat Pesan
              <!-- <li class="breadcrumb-item active">Data Akun -->
              </li>
            </ol>
          </div>
        </div>
      </div>
      <!-- Table head options with primary background start -->
      <div class="row">
        <div class="col-xs-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Lihat Pesan</h4>
              <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                  <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                  <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                  <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-body collapse in">
              <div class="table-responsive">
                <table class="table table-bordered mb-3">
                  <thead>
                    <tr>
                      <th width="200px" class="bg-warning">Nama Pengirim</th><td><?php echo $d['nama_pesan'];?></td>
                    </tr>
                    <tr>
                      <th class="bg-warning">No Telepon</th><td><?php echo $d['nohp_pesan'];?></td>
                    </tr>
                    <tr>
                      <th class="bg-warning">Email</th><td><?php echo $d['email_pesan'];?></td>
                    </tr>
                    <!-- <th width="150px">Tag</th> -->
                    <tr >
                      <th class="bg-warning">Isi</th><td><?php echo $d['isi_pesan'];?></td>
                    </tr>
                  </thead>

                </table> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Table head options with primary background end -->

    </div>
  </div>
</div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->