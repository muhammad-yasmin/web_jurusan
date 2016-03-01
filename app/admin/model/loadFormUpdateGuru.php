<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$id_guru = $_POST['id'];
	//------------------------------------
	$q_guru = "SELECT
			   guru.nip,guru.nama,guru.alamat,guru.tl_lahir,
			   guru.foto,guru.email,
			   guru.tgl_lahir,guru.qr,guru.email,
			   agama.agama,goldar.nama_goldar
			   FROM guru
			   INNER JOIN goldar ON guru.id_gol_darah = goldar.id
			   INNER JOIN agama ON guru.id_agama = agama.id WHERE guru.id_guru = $id_guru";
	$eks_guru = mysql_query($q_guru);
	$array = mysql_fetch_assoc($eks_guru);
 ?>
 <style>
	.container {
		margin: 10px 0 10px 0;
	}
 </style>
<form action="" id="formUpdate" class="form-horizontal">
 <div class="col-lg-12 form-group">
 	<div class="container" style="display: none;">
 		<div class="col-md-2"><p>ID</p></div>
 		<div class="col-md-4">
 			<input class="form-control" type="text" id="idNya">
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>NIS</p></div>
 		<div class="col-md-4">
 			<input class="form-control" type="text" id="nipnya" autocomplete="off" value="<?php echo $array['nip']; ?>">
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Nama</p></div>
 		<div class="col-md-4">
 			<input type="text" id="namanya" value="<?php echo $array['nama']; ?>" class="form-control" autocomplete="off">
		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Tempat Lahir</p></div>
 		<div class="col-md-4">
 			<input type="text" class="form-control" id="tempatnya" value="<?php echo $array['tl_lahir']; ?>" autocomplete="off">
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Tanngal Lahir</p></div>
 		<div class="col-md-4">
 			<input type="date" class="form-control" id="tanggalnya" value="<?php echo $array['tgl_lahir']; ?>" autocomplete="off">
 		</div>
 	</div>
 	<!-- Agama baru -->
 	<div class="container">
 		<div class="col-md-2"><p>Agama</p></div>
 		<div class="col-md-4">
 			<select name="agama" class="form-control" id="agamanya">
 				<option value="">-- Pilih Agama --</option>
 				<?php 
 				$q_agama = mysql_query("SELECT guru.id_agama FROM guru WHERE id_guru = $id_guru");
 				$array_agama_guru = mysql_fetch_assoc($q_agama);
 				$id_agama_guru = $array_agama_guru['id_agama'];
 				$q_ambil_agama = mysql_query("SELECT * FROM agama");
 				$id = 1;
 				while ($array_agama = mysql_fetch_assoc($q_ambil_agama)) {
 					if ($array_agama['id'] == $id_agama_guru) {
 						$terpilih = "selected";
 					} else {
 						$terpilih = "";
 					}
 					?>
 					<option value="<?php echo $id; ?>" <?php echo $terpilih; ?>><?php echo $array_agama['agama']; ?></option>
 					<?php
 				$id++;
 				}
 				?>
 			</select>
 		</div>
 	</div>
 	<!-- Agama baru -->
 	<div class="container">
 		<div class="col-md-2"><p>Alamat</p></div>
 		<div class="col-md-4">
 			<textarea class="form-control" name="alamatnya" id="alamatnya" style="resize: none;"><?php echo $array['alamat']; ?></textarea>
 		</div>
 	</div>
 	<!-- Golongan darah baru -->
 	<div class="container">
 		<div class="col-md-2"><p>Golongan Darah</p></div>
 		<div class="col-md-4">
 			<select name="goldar" class="form-control" id="goldarnya">
 				<option value="">-- Pilih Golongan Darah --</option>
 				<?php 
 				$q_goldarah = mysql_query("SELECT guru.id_gol_darah FROM guru WHERE id_guru = $id_guru");
 				$array_goldar_guru = mysql_fetch_assoc($q_goldarah);
 				$id_goldar_guru = $array_goldar_guru['id_gol_darah'];
 				$q_ambil_darah = mysql_query("SELECT * FROM goldar");
 				$id = 1;
 				while ($array_darah = mysql_fetch_assoc($q_ambil_darah)) {
 					if ($array_darah['id'] == $id_goldar_guru) {
 						$terpilih = "selected";
 					} else {
 						$terpilih = "";
 					}
 					?>
 					<option value="<?php echo $id; ?>" <?php echo $terpilih; ?>><?php echo $array_darah['nama_goldar']; ?></option>
 					<?php
 				$id++;
 				}
 				?>
 			</select>
 		</div>
 	</div>
 	<!-- <div class="container">
 		<div class="col-md-2"><p>Foto</p></div>
 		<div class="col-md-4">
 			<?php //echo "<img src='../../../assets/img/siswa/$array[foto]' alt='Foto Siswa' width='150' height='150'/> "; ?>
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>QR</p></div>
 		<div class="col-md-4">
 			<?php //echo $array['qr']; ?>
 		</div>
 	</div> -->
 </div>
</form>