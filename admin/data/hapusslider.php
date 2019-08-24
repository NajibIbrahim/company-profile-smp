<?php
include "koneksi.php";

$id = $_GET['id'];

$sql2 = mysqli_query($conn, "SELECT gambar_slider FROM slider WHERE id_slider='$id' ");
$pecah = mysqli_fetch_array($sql2);
$gambar = $pecah['gambar_slider'];
if(is_file("../images/slider/$gambar"))
{
	unlink("../images/slider/$gambar");
}


$sql= $conn->query("DELETE FROM slider WHERE id_slider='$id'");


if ($sql) {
	?>
	<script type="text/javascript">
		alert("Hapus Data Berhasil!");
		document.location='?halaman=dataslider';
	</script>
	<?php
}
else  {
	echo "Gagal Hapus Data";
}
?>