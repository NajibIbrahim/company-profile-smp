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
              <li class="breadcrumb-item">Akun
              </li>
              <li class="breadcrumb-item">Tambah Akun
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
             <h4 class="card-title" id="basic-layout-form">Tambah Akun</h4>
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

            <?php
            include "koneksi.php";
            $sql = $conn->query("SELECT * FROM akun WHERE id_akun='$_GET[id_akun]'");
            $row = $sql->fetch_assoc();

            ?>

            <form class="user"  method="post"  action="">
             <div class="form-body">       
              <div class="form-group">
                <label for="companyName">Nama</label>
                <input type="text" class="form-control border-warning" name="nama_akun" value="<?php echo $row['nama_akun']; ?>" required/>
              </div>
              <div class="form-group">
               <label for="companyName">Username</label>
               <input type="text" class="form-control border-warning" name="username" value="<?php echo $row['username']; ?>" required/>
             </div>
             <div class="form-group">
               <label for="companyName">Password</label>
               <input type="text" class="form-control border-warning" name="password" value="<?php echo $row['password']; ?>" required/>
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
if (isset($_POST['simpan'])) {

  $nama_akun     = $_POST['nama_akun'];
  $username = $_POST['username'];
      // $level   = $_POST['level']; 

  $sql = $conn->query("UPDATE akun SET 
    nama_akun   =  '$nama_akun',
    username    =  '$username' WHERE id_akun='$_GET[nama_akun]'");
  if ($sql) {

    ?>
    <script type="text/javascript">
      alert("Data Berhasil di Update"); document.location = '?halaman=dataakun';
    </script>
    <?php

  } else {

    ?>
    <script type="text/javascript">
      alert("Data Gagal di Update"); document.location = '?halaman=dataakun';
    </script>
    <?php

  }

}
?>