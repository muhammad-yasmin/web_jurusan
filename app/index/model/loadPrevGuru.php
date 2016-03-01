<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$idnya = $_GET['id'];

	$q_guru = "SELECT guru.nip,guru.nama,guru.alamat,guru.foto,guru.email,guru.id,
				guru.telepon,guru.tgl_lahir,guru.qr,agama.agama,goldar.nama_goldar
				FROM guru
				INNER JOIN goldar ON guru.id_gol_darah = goldar.id
				INNER JOIN agama ON guru.id_agama = agama.id
		  		WHERE guru.id = $idnya";
	$eks_guru = mysql_query($q_guru);
	$array = mysql_fetch_assoc($eks_guru);
 ?>
<div class="col-lg-3">
 	<div class="container">
 		<div class="col-md-4">
 			<?php echo "<img src='../../../assets/img/guru/$array[foto]' alt='Foto Guru' width='200' height='200'/> "; ?>
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-4" style="margin:0 0 0 0;">
 			<?php echo $array['qr']; ?>
 		</div>
 	</div>
</div>
<div class="col-lg-6">
 	<div class="container">
 		<div class="col-md-2"><p>NIS</p></div>
 		<div class="col-md-4"><p><?php echo $array['nip']; ?></p></div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Nama</p></div>
 		<div class="col-md-4"><p><?php echo $array['nama']; ?></p></div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Tempat, Tanngal Lahir</p></div>
 		<div class="col-md-4">
 			<p><?php echo $array['tgl_lahir']; ?></p>
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Agama</p></div>
 		<div class="col-md-4"><p><?php echo $array['agama']; ?></p></div>
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
<div class="col-lg-6" style="display: none;">
 	<div class="container">
 		<div class="col-md-2"><p>NIP</p></div>
 		<div class="col-md-4"><input type="text" name="printNip" value="<?php echo $array['nip']; ?>"></div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Nama</p></div>
 		<div class="col-md-4"><input type="text" name="printNama" value="<?php echo $array['nama']; ?>"></div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Tanngal Lahir</p></div>
 		<div class="col-md-4">
 			<input type="text" name="printTanggal" value="<?php echo $array['tgl_lahir']; ?>">
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Agama</p></div>
 		<div class="col-md-4"><input type="text" name="printAgama" value="<?php echo $array['agama']; ?>"></div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Alamat</p></div>
 		<div class="col-md-4"><input type="text" name="printAlamat" value="<?php echo $array['alamat']; ?>"></div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Golongan Darah</p></div>
 		<div class="col-md-4"><input type="text" name="printGol" value="<?php echo $array['nama_goldar']; ?>"></div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Foto</p></div>
 		<div class="col-md-4"><input type="text" name="printFoto" value="<?php echo $array['foto']; ?>"></div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>QR</p></div>
 		<div class="col-md-4"><input type="text" name="printQr" value="<?php echo $array['qr']; ?>"></div>
 	</div>
</div>