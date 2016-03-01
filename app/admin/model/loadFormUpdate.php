<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$id_sis = $_POST['id'];
	//------------------------------------
	$q_siswa = "SELECT siswa_tabel.nis,siswa_tabel.nama_siswa,siswa_tabel.jenis_kelamin,bio_siswa.id_agama,
				siswa_tabel.kelas,siswa_tabel.password,bio_siswa.tl_siswa,bio_siswa.tgl_siswa,
				bio_siswa.alamat,bio_siswa.foto,bio_siswa.qr,agama.agama,goldar.nama_goldar,
				jurusan.nama_jurusan,siswa_tabel.id_siswa,th_pelajaran.th_pelajaran,dt_ayah.nama_ayah,dt_ibu.nama_ibu
				FROM siswa_tabel
				LEFT JOIN bio_siswa ON siswa_tabel.id_siswa = bio_siswa.id_bio_siswa
				LEFT JOIN agama ON agama.id = bio_siswa.id_agama
				LEFT JOIN goldar ON goldar.id = bio_siswa.id_gol_darah
				LEFT JOIN jurusan ON jurusan.id_jurusan = siswa_tabel.id_jurusan
				LEFT JOIN th_pelajaran ON th_pelajaran.id_th_pelajaran = bio_siswa.id_th_ajaran
				LEFT JOIN dt_ayah ON dt_ayah.id_ayah = siswa_tabel.id_siswa AND dt_ayah.agama_ayah = agama.id
				LEFT JOIN dt_ibu ON dt_ibu.id_ibu = siswa_tabel.id_siswa AND dt_ibu.agama_ibu = agama.id
		  		WHERE siswa_tabel.id_siswa = $id_sis";
	$eks_siswa = mysql_query($q_siswa);
	$array = mysql_fetch_assoc($eks_siswa);
 ?>
<form action="" id="formUpdate" class="form-horizontal">
 <div class="col-lg-12 form-group">
 	<div class="container" style="display:none;">
 		<div class="col-md-2"><p>ID</p></div>
 		<div class="col-md-4">
 			<input class="form-control" type="text" id="idNya">
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>NIS</p></div>
 		<div class="col-md-4">
 			<input class="form-control" type="text" id="nisnya" autocomplete="off" value="<?php echo $array['nis']; ?>">
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Nama</p></div>
 		<div class="col-md-4">
 			<input type="text" id="namanya" value="<?php echo $array['nama_siswa']; ?>" class="form-control" autocomplete="off">
		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Tempat Lahir</p></div>
 		<div class="col-md-4">
 			<input type="text" class="form-control" id="tempatnya" value="<?php echo $array['tl_siswa']; ?>" autocomplete="off">
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Tanngal Lahir</p></div>
 		<div class="col-md-4">
 			<input type="text" class="form-control" id="tanggalnya" value="<?php echo $array['tgl_siswa']; ?>" autocomplete="off">
 		</div>
 	</div>
 	<!-- Agama baru -->
 	<div class="container">
 		<div class="col-md-2"><p>Agama</p></div>
 		<div class="col-md-4">
 			<select name="agama" class="form-control" id="agamanya">
 				<option value="">-- Pilih Agama --</option>
 				<?php 
 				$q_agama = mysql_query("SELECT bio_siswa.id_agama FROM bio_siswa WHERE id_bio_siswa = $id_sis");
 				$array_agama_siswa = mysql_fetch_assoc($q_agama);
 				$id_agama_siswa = $array_agama_siswa['id_agama'];
 				$q_ambil_agama = mysql_query("SELECT * FROM agama");
 				$id = 1;
 				while ($array_agama = mysql_fetch_assoc($q_ambil_agama)) {
 					if ($array_agama['id'] == $id_agama_siswa) {
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
 	<!-- thAjaranBaru -->
 	<div class="container">
 		<div class="col-md-2"><p>Tahun Pelajaran</p></div>
 		<div class="col-md-4">
 			<select name="thajaran" class="form-control" id="thpelajarannya">
 				<option value="">-- Pilih Tahun --</option>
 				<?php 
 				$q_thajaran = mysql_query("SELECT bio_siswa.id_th_ajaran FROM bio_siswa WHERE id_bio_siswa = $id_sis");
 				$array_thajaran_siswa = mysql_fetch_assoc($q_thajaran);
 				$id_thajaran_siswa = $array_thajaran_siswa['id_th_ajaran'];
 				$q_ambil_thajaran = mysql_query("SELECT * FROM th_pelajaran");
 				$id = 1;
 				while ($array_thajaran = mysql_fetch_assoc($q_ambil_thajaran)) {
 					if ($array_thajaran['id_th_pelajaran'] == $id_thajaran_siswa) {
 						$terpilih = "selected";
 					} else {
 						$terpilih = "";
 					}
 					?>
 					<option value="<?php echo $id; ?>" <?php echo $terpilih; ?>><?php echo $array_thajaran['th_pelajaran']; ?></option>
 					<?php
 				$id++;
 				}
 				?>
 			</select>
		</div>
 	</div>
 	<!-- thAjaranBaru -->
 	<div class="container">
 		<div class="col-md-2"><p>Kelas</p></div>
 		<div class="col-md-4">
 			<input type="text" class="form-control" id="kelasnya" value="<?php echo $array['kelas']; ?>" autocomplete="off">
 		</div>
 	</div>
 	<!-- jurusan baru -->
 	<div class="container">
 		<div class="col-md-2"><p>Jurusan</p></div>
 		<div class="col-md-4">
	 		<select name="jurusan" class="form-control" id="jurusannya">
 				<option value="">-- Pilih Jurusan --</option>
 				<?php 
 				$q_jurusan = mysql_query("SELECT siswa_tabel.id_jurusan FROM siswa_tabel WHERE id_siswa = $id_sis");
 				$array_jurusan_siswa = mysql_fetch_assoc($q_jurusan);
 				$id_jurusan_siswa = $array_jurusan_siswa['id_jurusan'];
 				$q_ambil_jurusan = mysql_query("SELECT * FROM jurusan");
 				$id = 1;
 				while ($array_jurusan = mysql_fetch_assoc($q_ambil_jurusan)) {
 					if ($array_jurusan['id_jurusan'] == $id_jurusan_siswa) {
 						$terpilih = "selected";
 					} else {
 						$terpilih = "";
 					}
 					?>
 					<option value="<?php echo $id; ?>" <?php echo $terpilih; ?>><?php echo $array_jurusan['nama_jurusan']; ?></option>
 					<?php
 				$id++;
 				}
 				?>
 			</select>
		</div>
 	</div>
 	<!-- jurusan baru -->
 	<!-- Golongan darah baru -->
 	<div class="container">
 		<div class="col-md-2"><p>Golongan Darah</p></div>
 		<div class="col-md-4">
 			<select name="goldar" class="form-control" id="goldarnya">
 				<option value="">-- Pilih Golongan Darah --</option>
 				<?php 
 				$q_goldarah = mysql_query("SELECT bio_siswa.id_gol_darah FROM bio_siswa WHERE id_bio_siswa = $id_sis");
 				$array_goldar_siswa = mysql_fetch_assoc($q_goldarah);
 				$id_goldar_siswa = $array_goldar_siswa['id_gol_darah'];
 				$q_ambil_darah = mysql_query("SELECT * FROM goldar");
 				$id = 1;
 				while ($array_darah = mysql_fetch_assoc($q_ambil_darah)) {
 					if ($array_darah['id'] == $id_goldar_siswa) {
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
 	<!-- Golongan darah baru -->
 	<div class="container">
 		<div class="col-md-2"><p>Nama Ayah</p></div>
 		<div class="col-md-4">
 			<input type="text" class="form-control" id="ayahnya" value="<?php echo $array['nama_ayah']; ?>" autocomplete="off">
		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Nama Ibu</p></div>
 		<div class="col-md-4">
 			<input type="text" class="form-control" id="ibunya" value="<?php echo $array['nama_ibu']; ?>" autocomplete="off">
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