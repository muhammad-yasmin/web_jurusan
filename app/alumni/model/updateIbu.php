<?php 
	//---------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//---------------------------------------

	$id = $_POST['id_ibu'];
	$nama = $_POST['nama'];
	$kerja = $_POST['pekerjaan'];
	$uang = $_POST['penghasilan'];
	$telp = $_POST['notelp'];
	$agama = $_POST['agama'];
	$lahir = $_POST['tempat_lhr'];
	$tgl = $_POST['tgl_lhr'];


	$q = mysql_query("UPDATE dt_ibu SET nama_ibu = '$nama', 
					  pekerjaan_ibu = '$kerja',
					  penghasilan_ibu = '$uang',
					  no_telp_ibu = '$telp',
					  agama_ibu = '$agama',
					  tempat_lhr_ibu = '$lahir',
					  tgl_lhr_ibu = '$tgl'
					  WHERE id_ibu = '$id'");

	if ($q) {
		echo "
			<div class='alert alert-success'>
				<strong>Berhasil !</strong><p> simpan data</p>
			</div>
			<script>document.location='../index.php?pilih=dt_ibu'</script>
		";
	} else {
		echo "
			<div class='alert alert-danger'>
				<strong>Gagal !</strong><p> simpan data</p>
			</div>
			<script>document.location='../index.php?pilih=dt_ibu'</script>
		".$q;
	}
?>