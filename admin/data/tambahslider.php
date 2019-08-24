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
              <li class="breadcrumb-item">Slider
              </li>
              <li class="breadcrumb-item">Tambah Slider
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
             <h4 class="card-title" id="basic-layout-form">Tambah Slider</h4>
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
                 <input type="text" id="judul" class="form-control border-warning" placeholder="Judul Slider" name="judul_slider">
               </div>
               <div class="form-group">
                <label for="companyName">Keterangan</label>
                <input type="text" id="judul" class="form-control border-warning" placeholder="Keterangan" name="ket_slider">
              </div>
              <div class="form-group">
               <label>Upload Gambar</label>
               <label name="gambar_slider" class="file center-block">
                <input type="file" name="gambar_slider">
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


       <?php
       include 'koneksi.php';
       if(isset($_POST['simpan'])){

        $nama = $_FILES['gambar_slider']['name'];
        $lokasi = $_FILES['gambar_slider']['tmp_name'];

        $foto = "../images/slider/$nama";
        move_uploaded_file($lokasi, $foto);

        $sql = "INSERT INTO slider (judul_slider, ket_slider, gambar_slider)
        VALUES ('".$_POST['judul_slider']."','".$_POST['ket_slider']."', '$nama')";

        $s1 = mysqli_query($conn,$sql);


        if($s1){
          ?>
          <script>alert("Alhamdulillah Berhasil Menyimpan Data"); document.location= '?halaman=dataslider';
        </script>

        <?php
                   // echo 'Berhasil';

      }
      else
      {
                // echo 'gagal';
        ?>

        <script>alert("Gagal Menyimpan Data"); document.location= '?halaman=dataslider';
      </script>
      <?php

    }
  } ?>

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

