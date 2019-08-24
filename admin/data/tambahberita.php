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
              <li class="breadcrumb-item active">Tambah Berita
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="content-body"><!-- Basic form layout section start -->
        <section id="basic-form-layouts">
         <div class="row match-height">
          <div class="col-md-6">
           <div class="card">
            <div class="card-header">
             <h4 class="card-title" id="basic-layout-form">Tambah Berita</h4>
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
           <div class="card-block">
             <form class="form" method="post" enctype="multipart/form-data">
               <div class="form-body">       
                <div class="form-group">
                 <label for="companyName">Judul</label>
                 <input type="text" id="judul" class="form-control border-warning" placeholder="Judul Berita" name="judul_brt">
               </div>
<!--                <div class="form-group">
                <label for="companyName">Tag</label>
                <select id="tag" name="tag" class="form-control border-warning" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Tag">
                  <option>Pilih Tag Berita</option>
                  <option value="low">Low</option>
                  <option value="medium">Medium</option>
                  <option value="high">High</option>
                </select>
              </div> -->
              <div class="form-group">
               <label for="companyName">Isi Berita</label>
               <textarea id="isi" rows="5" class="form-control border-warning" name="isi_brt" placeholder="Isi Berita"></textarea>
             </div>
             <div class="form-group">
               <label>Upload Gambar</label>
               <label name="gambar_brt" class="file center-block">
                <input type="file" name="gambar_brt">
                <span class="file-custom"></span>
              </label>
            </div>

          </div>

          <div class="form-actions center">
            <button type="reset" name="reset" class="btn btn-danger mr-1">
             <i class="icon-cross2"></i> Reset
           </button>
           <button type="submit" name="simpan" class="btn btn-success">
             <i class="icon-check2"></i> Simpan
           </button>
         </div>
       </form>
     </div>
   </div>
 </div>
</div>

</div>
</div>

</section>
<!-- // Basic form layout section end -->
</div>
</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php
include 'koneksi.php';
date_default_timezone_set('Asia/Jakarta');
// move_uploaded_file($file,"foto/$name");
    // ambil data dari formulir
// $id = $_POST['id'];
$judul_brt = $_POST['judul_brt'];
$tanggal_brt = date("Y-m-d");
// $id_label = $_POST['id_label'];
$isi_brt = $_POST['isi_brt'];
$gambar = $_FILES['gambar_brt']['name'];
$tmp = $_FILES['gambar_brt']['tmp_name'];

// $fotobaru = date('dmY').$gambar;
$fotobaru = $gambar;
    // Set path folder tempat menyimpan fotonya
$path = "../images/berita/$fotobaru";

                // $sql = "INSERT INTO berita (judul, isi, gambar)
                // VALUES ('".$_POST['judul']."', '".$_POST['isi']."', '$nama')";
                // $s1 = mysqli_query($c,$sql);
                    // Proses upload
    if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // buat query
      $sql = "INSERT INTO berita (judul_brt, tanggal_brt, isi_brt, gambar_brt)
      VALUES ('$judul_brt',
      '$tanggal_brt',
      '$isi_brt',
      '$fotobaru')";

      $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
      if($query){
        ?>
        <script>alert("Alhamdulillah Berhasil Menyimpan Data"); document.location= '?halaman=databerita';
      </script>
      <?php
    }
    else
    {
      ?>
      <script>alert("Gagal Menyimpan Data"); document.location= '?halaman=databerita';
    </script>
    <?php

  }
} ?> 