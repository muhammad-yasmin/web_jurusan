<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$id_produk = $_POST['id'];
	//------------------------------------
	$q_produk = "SELECT * FROM produk WHERE produk.id = $id_produk";
	$eks_produk = mysql_query($q_produk);
	$array = mysql_fetch_assoc($eks_produk);
?>
<style>
	.container {
		margin: 10px 0 10px 0;
	}
</style>
<div class="col-md-6">
	<form action="" class="form-horizontal" target="">
	 	<div class="col-lg-12 form-group">
		 	<div class="container" style="display: none;">
		 		<div class="col-md-2"><p>ID</p></div>
		 		<div class="col-md-4">
		 			<input class="form-control" type="text" id="idNya">
		 		</div>
		 	</div>
		 	<div class="container">
		 		<div class="col-md-2"><p>Nama</p></div>
		 		<div class="col-md-4">
		 			<input type="text" id="namanya" value="<?php echo $array['nama_produk']; ?>" class="form-control" autocomplete="off">
				</div>
		 	</div>
		 	<div class="container">
		 		<div class="col-md-2"><p>URL</p></div>
		 		<div class="col-md-4">
		 			<input type="text" class="form-control" id="inisialnya" value="<?php echo $array['url']; ?>" autocomplete="off">
		 		</div>
		 	</div>
		 	<div class="container">
		 		<div class="col-md-2"><p>Deskripsi</p></div>
		 		<div class="col-md-4">
		 			<textarea style="resize: none;" name="deskripsinya" id="deskripsinya" class="form-control"><?php echo $array['deskripsi']; ?></textarea>
		 		</div>
		 	</div>
		 	<div class="container">
		 		<div class="col-md-2"><p>Gambar</p></div>
		 		<div class="col-md-4">
		 			<input class="form-control" name="image" type="file" id="gambarnya">
		 		</div>
		 	</div>
		</div>
	</form>
</div>
