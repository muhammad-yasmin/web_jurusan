<?php 
	require '../../../koneksi.php';
	$con = new koneksiDb;
	$con->kon();
	
	$idNya = $_POST['id'];

	$q = mysql_query("SELECT * FROM siswa_tabel WHERE id = '$idNya'");
	$array = mysql_fetch_assoc($q);
?>
<form action="" id="formUpdate">
	<div class="col-md-12">
		<div class="form-group" style="disp">
			<label for="idSiswa" class="col-md-4 control-label">ID</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="id" id="idSiswa"/>
			</div>
		</div>
		<div class="form-group">
			<label for="nisSiswa" class="col-md-4 control-label">NIS</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="nis" id="nisSiswa" value="<?php echo $array['nis']; ?>" autocomplete="off"/>
			</div>
		</div>
		<div class="form-group">
			<label for="namaSiswa" class="col-md-4 control-label">Nama</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="nama" id="namaSiswa" value="<?php echo $array['nama']; ?>" autocomplete="off"/>
			</div>
		</div>
		<div class="form-group">
			<label for="alamatSiswa" class="col-md-4 control-label">Alamat</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="alamat" id="alamatSiswa" value="<?php echo $array['alamat']; ?>" autocomplete="off"/>
			</div>
		</div>
		<div class="form-group">
			<label for="passSiswa" class="col-md-4 control-label">Email</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="pass" id="emailSiswa" value="<?php echo $array['email']; ?>" autocomplete="off"/>
			</div>
		</div>
	</div>
</form>