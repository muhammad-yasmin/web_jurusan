<?php 
	require '../../../koneksi.php';
	$con = new koneksiDb;
	$con->kon();
	
	$idNya = $_POST['id'];

	$q = mysql_query("SELECT * FROM siswa_tabel WHERE id = '$idNya'");
	$array = mysql_fetch_assoc($q);
?>
<div class="col-md-12">
	<div class="container">
		<div class="col-md-4"><p>NIS</p></div>
		<div class="col-md-8"><p><?php echo $array['nis']; ?></p></div>
	</div>
	<div class="container">
		<div class="col-md-4"><p>Nama</p></div>
		<div class="col-md-8"><p><?php echo $array['nama']; ?></p></div>
	</div>
	<div class="container">
		<div class="col-md-4"><p>Alamat</p></div>
		<div class="col-md-8"><p><?php echo $array['alamat']; ?></p></div>
	</div>
	<div class="container">
		<div class="col-md-4"><p>Password</p></div>
		<div class="col-md-8"><p><?php echo $array['email']; ?></p></div>
	</div>
</div>