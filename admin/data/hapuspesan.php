<?php
include "koneksi.php";

$id = $_GET['id'];
$sql= $conn->query("DELETE FROM pesan WHERE id_pesan='$id'");

if ($sql) {
	?>
	<script type="text/javascript">
		alert("Hapus Data Berhasil!");
		document.location='?halaman=datapesan';
	</script>
	<?php
}
else  {
	echo "Gagal Hapus Data";
}
?>