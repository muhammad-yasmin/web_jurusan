<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$id_guru = $_POST['id'];

	$q_guru = "SELECT
			   guru.nip,guru.nama,guru.alamat,guru.tl_lahir,
			   guru.foto,guru.email,
			   guru.tgl_lahir,guru.qr,
			   agama.agama,goldar.nama_goldar
			   FROM guru
			   INNER JOIN goldar ON guru.id_gol_darah = goldar.id
			   INNER JOIN agama ON guru.id_agama = agama.id
			   WHERE id_guru = $id_guru";
	$eks_guru = mysql_query($q_guru);
	$array = mysql_fetch_assoc($eks_guru);
 ?>
 <div class="col-lg-2">
 	<div class="container">
		<?php echo "<img src='../../../assets/img/guru/$array[foto]' alt='Foto Siswa' width='150' height='150' class='img-circle'/> "; ?>
 	</div>
 	<div class="container">
		<?php echo $array['qr']; ?>
 	</div>
 </div>
 <div class="col-lg-6">
 	<div class="container">
 		<div class="col-md-2"><p>NIP</p></div>
 		<div class="col-md-4"><p><?php echo $array['nip']; ?></p></div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Nama</p></div>
 		<div class="col-md-4"><p><?php echo $array['nama']; ?></p></div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Tempat, Tanggal Lahir</p></div>
 		<div class="col-md-4">
 			<p><?php echo $array['tl_lahir'].', '.$array['tgl_lahir']; ?></p>
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Agama</p></div>
 		<div class="col-md-4"><p><?php echo $array['agama']; ?></p></div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Email</p></div>
 		<div class="col-md-4"><p><?php echo $array['email']; ?></p></div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Alamat</p></div>
 		<div class="col-md-4"><p><?php echo $array['alamat']; ?></p></div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Golongan Darah</p></div>
 		<div class="col-md-4"><p><?php echo $array['nama_goldar']; ?></p></div>
 	</div>
 </div>