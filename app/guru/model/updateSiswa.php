<?php
	//---------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//---------------------------------------
	
	$nis = $_POST['nisn'];
	$nm = $_POST['nama'];
	$al = $_POST['alamat'];
	$ag = $_POST['agama'];
	$tl = $_POST['tempat_lhr'];
	$tgl = $_POST['tgl_lhr'];
	$gol = $_POST['gol_darah'];
	$thn = $_POST['thn_pelajaran'];
	$kelas = $_POST['kel'];

	$folder_simpan = '../../../assets/img/siswa/';
	$folder = '../../../assets/img/siswa/';
	$gambar = $_FILES['image']['name'];
	$gambar_jenis = $_FILES['image']['type'];

	$nama_gmbr = pathinfo($gambar,PATHINFO_FILENAME);
	$ext_gmbr = pathinfo($gambar,PATHINFO_EXTENSION);
	$i = 1;
	while(file_exists($folder_simpan.$nama_gmbr."($i)".'.'.$ext_gmbr)){
	    $i++;
	}
	$nama_jadi = $nama_gmbr."($i)".'.'.$ext_gmbr;
	$gambar_simpan = $folder_simpan.basename($nama_jadi);
	//-----------------
	move_uploaded_file($_FILES['image']['tmp_name'], $folder_simpan.basename($nama_jadi));
	$fol = $folder_simpan.$nama_jadi;

	if(empty($gambar))   //jika gambar kosong atau tidak di ganti
	{
     	$update = mysql_query("UPDATE siswa SET nama = '$nm', alamat='$al', agama='$ag' , tempat_lhr = '$tl', tgl_lhr='$tgl', gol_darah ='$gol', id_kelas='$kelas', thn_pelajaran='$thn' WHERE nis='$nis'") 
     	or die ("gagal update ");
		echo "<script>alert ('data telah di update');
		document.location='../index.php?pilih=dt_diri' </script>";
	}
	elseif (!empty($gambar)) // jika gambar di ganti
	{
        $update=mysql_query("UPDATE siswa SET nama = '$nm', alamat='$al', agama='$ag' , tempat_lhr = '$tl', tgl_lhr='$tgl',gol_darah ='$gol' ,thn_pelajaran='$thn', foto='$nama_jadi' WHERE nis='$nis'")
        or die ("gagal update gambar ");
		echo "<script>alert ('data telah di update');
		document.location='../index.php?pilih=dt_diri' </script> ";
	}
?>