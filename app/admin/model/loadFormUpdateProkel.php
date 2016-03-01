<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$id_jurusan = $_POST['id'];
	//------------------------------------
	$q_jurusan = "SELECT * FROM jurusan WHERE jurusan.id_jurusan = $id_jurusan";
	$eks_jurusan = mysql_query($q_jurusan);
	$array = mysql_fetch_assoc($eks_jurusan);
	if ($array['aktif'] == "on") {
		$selected = "checked";
	} else {
		$selected = "";
	}
 ?>
 <style>
	.container {
		margin: 10px 0 10px 0;
	}
	.switch input {
	  display: none;
	}

	.switch i {
	  display: inline-block;
	  cursor: pointer;
	  padding-right: 25px;
	  transition: all ease 0.2s;
	  -webkit-transition: all ease 0.2s;
	  border-radius: 30px;
	  -webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5);
	  -moz-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5);
	  box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5);
	}

	.switch i:before {
	  display: block;
	  content: '';
	  width: 30px;
	  height: 30px;
	  border-radius: 30px;
	  background: white;
	  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
	  -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
	  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
	}

	.switch :checked + i {
	  padding-right: 0;
	  padding-left: 25px;
	  -webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5), inset 0 0 50px #1c7ebb;
	  -moz-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5), inset 0 0 50px #1c7ebb;
	  box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5), inset 0 0 50px #1c7ebb;
	}
	.switch.switch-info :checked + i {
	  -webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5), inset 0 0 50px #2ec1cc;
	  -moz-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5), inset 0 0 50px #2ec1cc;
	  box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5), inset 0 0 50px #2ec1cc;
	}
 </style>
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
 			<input type="text" id="namanya" value="<?php echo $array['nama_jurusan']; ?>" class="form-control" autocomplete="off">
		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Inisial</p></div>
 		<div class="col-md-4">
 			<input type="text" class="form-control" id="inisialnya" value="<?php echo $array['inisial']; ?>" autocomplete="off">
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Deskripsi</p></div>
 		<div class="col-md-4">
 			<textarea style="resize: none;" name="deskripsinya" id="deskripsinya" class="form-control"><?php echo $array['deskripsi']; ?></textarea>
 		</div>
 	</div>
 	<div class="container">
 		<div class="col-md-2"><p>Aktif</p></div>
 		<div class="col-md-4">
 			<label class="switch switch-info"><input type="checkbox" id="updatenya" <?= $selected; ?>><i></i></label>
 		</div>
 	</div> 	
 </div>
</form>