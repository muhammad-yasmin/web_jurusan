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
				INNER JOIN bio_siswa ON siswa_tabel.id_siswa = bio_siswa.id_bio_siswa
				INNER JOIN agama ON agama.id = bio_siswa.id_agama
				INNER JOIN goldar ON goldar.id = bio_siswa.id_gol_darah
				INNER JOIN jurusan ON jurusan.id_jurusan = siswa_tabel.id_jurusan
				INNER JOIN th_pelajaran ON th_pelajaran.id_th_pelajaran = bio_siswa.id_th_ajaran
				INNER JOIN dt_ayah ON dt_ayah.id_ayah = siswa_tabel.id_siswa AND dt_ayah.agama_ayah = agama.id
				INNER JOIN dt_ibu ON dt_ibu.id_ibu = siswa_tabel.id_siswa AND dt_ibu.agama_ibu = agama.id
		  		WHERE siswa_tabel.id_siswa = $id_sis";
	$eks_siswa = mysql_query($q_siswa);
	$array = mysql_fetch_assoc($eks_siswa);
 ?>
<style>
	.container {
		margin: 10px 0 10px 0;
	}
</style>
<form action="" id="formUpdate">
 <div class="col-lg-12">
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
 	<div class="container">
 		<div class="col-md-2"><p>Agama</p></div>
 		<div class="col-md-4">
 			<input type="text" class="form-control" id="agamanya" value="<?php echo $array['agama']; ?>" autocomplete="off">
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Alamat</p></div>
 		<div class="col-md-4">
 			<input type="text" class="form-control" id="alamatnya" value="<?php echo $array['alamat']; ?>" autocomplete="off">
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Tahun Pelajaran</p></div>
 		<div class="col-md-4">
			<input type="text" class="form-control" id="thpelajarannya" value="<?php echo $array['th_pelajaran']; ?>" autocomplete="off">
		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Kelas</p></div>
 		<div class="col-md-4">
 			<input type="text" class="form-control" id="kelasnya" value="<?php echo $array['kelas']; ?>" autocomplete="off">
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Jurusan</p></div>
 		<div class="col-md-4">
 			<input type="text" class="form-control" id="jurusannya" value="<?php echo $array['nama_jurusan']; ?>" autocomplete="off">
		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Golongan Darah</p></div>
 		<div class="col-md-4">
 			<input type="text" class="form-control" id="goldarnya" value="<?php echo $array['nama_goldar']; ?>" autocomplete="off">
 		</div>
 	</div>
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