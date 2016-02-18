<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$id_sis = $_POST['id'];
	$nisnya = $_POST['nis'];
	$namanya = $_POST['nama'];
	$kelasnya = $_POST['kelas'];
	$jurusannya = $_POST['jurusan'];
	//------------------------------------
	$tempatnya = $_POST['tl'];
	$tanggalnya = $_POST['tgl'];
	$alamatnya = $_POST['alamat'];
	$agamanya = $_POST['agama'];
	$goldarnya = $_POST['gol'];
	$thpelajarannya = $_POST['th'];
	$ayahnya = $_POST['ayah'];
	$ibunya = $_POST['ibu'];

	$q_siswa = "UPDATE siswa_tabel SET nis = '$nisnya', nama_siswa = '$namanya', kelas = '$kelasnya',
				id_jurusan = '$jurusannya' WHERE id_siswa = $id_sis";
	$eks_siswa = mysql_query($q_siswa);
	$q_bio_siswa = "UPDATE bio_siswa SET tl_siswa = '$tempatnya', tgl_siswa = '$tanggalnya', alamat = '$alamatnya',
					id_agama = '$agamanya', id_gol_darah = '$goldarnya', id_th_ajaran = '$thpelajarannya'
					WHERE id_bio_siswa = $id_sis";
	$eks_bio_siswa = mysql_query($q_bio_siswa);
	$q_ayah_siswa = "UPDATE dt_ayah SET nama_ayah = '$ayahnya' WHERE id_ayah = $id_sis";
	$eks_ayah_siswa = mysql_query($q_ayah_siswa);
	$q_ibu_siswa = "UPDATE dt_ibu SET nama_ibu = '$ibunya' WHERE id_ibu = $id_sis";
	$eks_ibu_siswa = mysql_query($q_ibu_siswa);
 ?>