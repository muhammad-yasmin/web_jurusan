<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$id_guru = $_POST['id'];
	$nipnya = $_POST['nip'];
	$namanya = $_POST['nama'];
	//------------------------------------
	$tempatnya = $_POST['tl'];
	$tanggalnya = $_POST['tgl'];
	$alamatnya = $_POST['alamat'];
	$agamanya = $_POST['agama'];
	$goldarnya = $_POST['gol'];

	$q_guru = "UPDATE guru SET nip = '$nipnya', nama = '$namanya', tl_lahir = '$tempatnya', tgl_lahir = '$tanggalnya', alamat = '$alamatnya', id_gol_darah = $goldarnya, id_agama = $agamanya WHERE id_guru = $id_guru";
	$eks_guru = mysql_query($q_guru);
 ?>