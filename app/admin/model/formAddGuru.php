<?php
	require "../../../config/connection.php";
	$con = new clsDb;
	$con->konek();
?>
<style>
	.container {
		margin: 10px 0 10px 0;
	}
	p {
		margin: 10px 0 0 10px;
	}
</style>
<form action="" id="formUpdate">
 <div class="col-lg-12">
 	<div class="container" style="display:none;">
 		<div class="col-md-2"><p>ID</p></div>
 		<div class="col-md-4">
 			<input class="form-control" type="text" id="idtambahnya">
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>NIP</p></div>
 		<div class="col-md-4">
 			<input class="form-control" max="13" type="text" id="niptambahnya" autocomplete="off" placeholder="NIP">
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Nama</p></div>
 		<div class="col-md-4">
 			<input type="text" id="namatambahnya" placeholder="Nama" class="form-control" autocomplete="off">
		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Tempat Lahir</p></div>
 		<div class="col-md-4">
 			<input type="text" class="form-control" id="tempattambahnya" placeholder="Tempat Lahir" autocomplete="off">
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Tanngal Lahir</p></div>
 		<div class="col-md-4">
 			<input type="date" class="form-control" id="tanggaltambahnya" placeholder="Tanggal Lahir" autocomplete="off">
 		</div>
 	</div>
 	<!-- Agama baru -->
 	<div class="container">
 		<div class="col-md-2"><p>Agama</p></div>
 		<div class="col-md-4">
 			<select name="agama" class="form-control" id="agamatambahnya">
 				<option value="">-- Pilih Agama --</option>
 				<?php
 				$q_ambil_agama = "SELECT id, agama FROM agama";
 				$eks_agama = mysql_query($q_ambil_agama);
 				$id = 1;
 				while ($array_agama = mysql_fetch_assoc($eks_agama)) {
 					?>
 					<option value="<?php echo $id; ?>"><?php echo $array_agama['agama']; ?></option>
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
 			<textarea name="alamat" id="alamattambahnya" style="resize:none;" class="form-control" placeholder="Alamat"></textarea>
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Email</p></div>
 		<div class="col-md-4">
 			<input type="text" name="email" id="emailtambahnya" class="form-control" placeholder="Email"/>
 		</div>
 	</div>
 	<!-- Golongan darah baru -->
 	<div class="container">
 		<div class="col-md-2"><p>Golongan Darah</p></div>
 		<div class="col-md-4">
 			<select name="goldar" class="form-control" id="goldartambahnya">
 				<option value="">-- Pilih Golongan Darah --</option>
 				<?php 
 				$q_ambil_darah = mysql_query("SELECT * FROM goldar");
 				$id = 1;
 				while ($array_darah = mysql_fetch_assoc($q_ambil_darah)) {
 					?>
 					<option value="<?php echo $id; ?>"><?php echo $array_darah['nama_goldar']; ?></option>
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