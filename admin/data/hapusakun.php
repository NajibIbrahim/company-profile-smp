<?php
include "koneksi.php";

$id = $_GET['id'];
$sql= $conn->query("DELETE FROM akun WHERE id_akun='$id'");

if ($sql) {
	?>
	<script type="text/javascript">
		alert("Hapus Data Berhasil!");
		document.location='?halaman=dataakun';
	</script>
	<?php
}
else  {
	echo "Gagal Hapus Data";
}
?>