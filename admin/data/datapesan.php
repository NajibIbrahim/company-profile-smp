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
                <li class="breadcrumb-item">Data Pesan
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
                  <h4 class="card-title">Data Pesan</h4>
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
                  <div class="card-block card-dashboard">
                  </div>
                  
                  <div class="table-responsive">
                    <table class="table table-bordered mb-3">
                      <thead class="bg-warning">
                        <tr>
                          <th width="10px">No</th>
                          <th>Nama</th>
                          <th width="100px">No Telp</th>
                          <th width="290px">Email</th>
                          <th>Isi Pesan</th>
                          <th width="180px">Aksi</th>
                        </tr>
                      </thead>
                      <?php
                // $conn = mysqli_connect("localhost", "root", "", "pondok");
                      include 'koneksi.php';
                      if ($conn->connect_errno) {
                        echo die("Gagal Masuk Database: ".$conn->connect_error);
                      }
                      $mysql="SELECT * FROM pesan";
                      $query= mysqli_query($conn,$mysql);
                      $nomor=1;
                      while ($data=mysqli_fetch_array($query)) {

                        ?>
                        <tbody>
                          <tr>
                            <th><?php echo $nomor++; ?></th>
                            <td><?php echo $data['nama_pesan'];?></td>
                            <td><?php echo $data['nohp_pesan'];?></td>
                            <td><?php echo $data['email_pesan'];?></td>
                            <td><?= substr($data['isi_pesan'], 0,100); ?> ....</td>
                            <td>
                              <a href="?halaman=lihatpesan&id=<?php echo $data['id_pesan'];?>" class="btn btn-info">
                                <i class="icon-eye"></i>
                              </a>
                              <a href="?halaman=hapuspesan&id=<?php echo $data['id_pesan'];?>" class="btn btn-danger">
                                <i class="icon-delete"></i>
                              </a>
                            </td>
                          </tr>
                        </tbody>
                        <?php

                      }
                      ?>
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