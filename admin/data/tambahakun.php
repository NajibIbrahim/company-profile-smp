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
             <form class="form"  method="post"  action="">
               <div class="form-body">       
                <div class="form-group">
                  <label for="companyName">Nama</label>
                  <input type="text" class="form-control border-warning" placeholder="Nama Akun" name="nama_akun">
                </div>
                <div class="form-group">
                 <label for="companyName">Username</label>
                 <input type="text" class="form-control border-warning" placeholder="Username" name="username">
               </div>
               <div class="form-group">
                 <label for="companyName">Password</label>
                 <input type="text" class="form-control border-warning" placeholder="Password" name="password">
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
if(isset($_POST['simpan'])){
  $level="admin";
  $password = md5($_POST['password']);

  $sql= "INSERT INTO `akun`(`nama_akun`,`username`, `password`,`level`) 
  VALUES ('".$_POST['nama_akun']."',
  '".$_POST['username']."',
  '$password',
  '$level')";

  $s1 = mysqli_query($conn,$sql);


  if($s1){
    ?>
    <script>alert("Alhamdulillah Berhasil Menyimpan Data"); document.location= '?halaman=dataakun';
  </script>
  <?php
}
else
{
  ?>
  <script>alert("Gagal Menyimpan Data"); document.location= '?halaman=dataakun';
</script>
<?php

}
} ?>