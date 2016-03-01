<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$id_galeri = $_POST['id'];

	$namafilenya = "SELECT gambar FROM galeri WHERE id = $id_galeri";
	$getfile = mysql_fetch_object(mysql_query($namafilenya));
	unlink('../../../assets/img/galeri/'.$getfile->gambar);

	$q_galeri = "DELETE FROM galeri WHERE id = $id_galeri";
	$eks_galeri = mysql_query($q_galeri);
?>