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
<form action="../model/insertGaleri.php" method="post" id="formAdd" enctype="multipart/form-data">
 <div class="col-lg-12">
 	<div class="container">
		<div class="col-md-2"><p>Gambar</p></div>
		<div class="col-md-4">
			<input class="form-control" name="image" type="file" id="gambarnya">
		</div>
	</div>
 	<div class="container">
		<div class="col-md-2"><p>Caption</p></div>
		<div class="col-md-4">
			<input type="text" name="captionnya" id="captionnya" placeholder="Judul" class="form-control" autocomplete="off">
		</div>
	</div>
	<div class="container">
		<div class="col-md-2"><p>Deskripsi</p></div>
		<div class="col-md-4">
			<textarea name="deskripsinya" id="deskripsinya" style="resize: none;" placeholder="Deskripsi" class="form-control"></textarea>
		</div>
	</div>
 </div>
</form>