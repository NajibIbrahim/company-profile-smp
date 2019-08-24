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
                <li class="breadcrumb-item">Berita
                </li>
                <li class="breadcrumb-item">Data Berita
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
                  <h4 class="card-title">Data Berita</h4>
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
                    <a href="?halaman=tambahberita" class="btn btn-success">
                      <i class="icon-plus3"></i> Tambah Berita
                    </a>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-bordered mb-3">
                      <thead class="bg-warning">
                        <tr>
                          <th width="10px">No</th>
                          <th width="230px">Judul</th>
                          <th width="150px">Tanggal</th>
                          <!-- <th width="150px">Tag</th> -->
                          <th >Isi</th>
                          <th width="180px">Gambar</th>
                          <th width="230px">Aksi</th>
                        </tr>
                      </thead>
                      <?php
                // $conn = mysqli_connect("localhost", "root", "", "pondok");
                      include 'koneksi.php';
                      if ($conn->connect_errno) {
                        echo die("Gagal Masuk Database: ".$conn->connect_error);
                      }
                      $mysql="SELECT * FROM berita";
                      $query= mysqli_query($conn,$mysql);
                      $nomor=1;
                      while ($data=mysqli_fetch_array($query)) {

                        ?>
                        <tbody>
                          <tr>
                            <th><?php echo $nomor++; ?></th>
                            <td><?php echo $data['judul_brt'];?></td>
                            <td><?php echo $data['tanggal_brt'];?></td>
                            <!-- <td><?php echo $data['tag_brt'];?></td> -->
                            <td><?= substr($data['isi_brt'], 0,100); ?> ....</td>
                            <td><img width="50%" src="../images/berita/<?php echo $data['gambar_brt'];?>"></td>
                            <td>
                              <a href="?halaman=lihatberita&id=<?php echo $data['id_brt'];?>" class="btn btn-info">
                                <i class="icon-eye"></i>
                              </a>
<!--                               <a href="?halaman=editberita&id=<?php echo $data['id_brt'];?>" class="btn btn-success">
                                <i class="icon-pencil2"></i>
                              </a> -->
                              <a href="?halaman=hapusberita&id=<?php echo $data['id_brt'];?>" class="btn btn-danger">
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