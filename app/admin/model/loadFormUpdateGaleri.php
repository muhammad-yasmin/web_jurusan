<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$id_galeri = $_POST['id'];
	//------------------------------------
	$q_galeri = "SELECT * FROM galeri WHERE galeri.id = $id_galeri";
	$eks_galeri = mysql_query($q_galeri);
	$array = mysql_fetch_assoc($eks_galeri);
 ?>
	<style>
	.container {
		margin: 10px 0 10px 0;
	}
	.gambarnya {
		padding: 0 100px 0 100px;
	}
	</style>
<div class="col-lg-12">
	<div class="gambarnya" align="center">
		<?php echo "<img src='../../../assets/img/galeri/$array[gambar]' alt='$array[gambar]' width='500'height='250' class='img'"; ?>
	</div>
</div>
<div class="col-md-12">	
	<form action="../model/updateGaleri.php" id="formUpdate" method="post" target="" class="form-horizontal" enctype="multipart/form-data">
	 	<div class="col-lg-4 col-md-offset-2">
		 	<input type="text" id="idnya" name="idnya" hidden>
			<div class="container">
				<div class="col-md-2"><p>Gambar</p></div>
				<div class="col-md-4">
					<input class="form-control" name="image" type="file" id="gambarnya">
				</div>
			</div>
			<div class="container">
				<div class="col-md-2"><p>Caption</p></div>
				<div class="col-md-4">
					<input type="text" name="captionnya" id="captionnya" value="<?= $array['capt']; ?>" class="form-control" autocomplete="off">
				</div>
			</div>
			<div class="container">
				<div class="col-md-2"><p>Deskripsi</p></div>
				<div class="col-md-4">
					<textarea name="deskripsinya" id="deskripsinya" style="resize: none;" class="form-control"><?= $array['deskripsi']; ?></textarea>
				</div>
			</div>
	 	</div>
	</form>
</div>
