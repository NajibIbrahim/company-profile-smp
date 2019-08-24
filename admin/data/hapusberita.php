<?php
include "koneksi.php";

$id = $_GET['id'];

$sql2 = mysqli_query($conn, "SELECT gambar_brt FROM berita WHERE id_brt='$id' ");
$pecah = mysqli_fetch_array($sql2);
$gambar = $pecah['gambar_brt'];
if(is_file("../images/berita/$gambar"))
{
	unlink("../images/berita/$gambar");
}


$sql= $conn->query("DELETE FROM berita WHERE id_brt='$id'");


if ($sql) {
	?>
	<script type="text/javascript">
		alert("Hapus Data Berhasil!");
		document.location='?halaman=databerita';
	</script>
	<?php
}
else  {
	echo "Gagal Hapus Data";
}
?>