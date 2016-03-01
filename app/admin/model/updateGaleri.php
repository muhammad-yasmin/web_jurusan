<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$id = $_POST['idnya'];
	$cap = $_POST['captionnya'];
	$des = $_POST['deskripsinya'];
	$filename=$_FILES['image']['name'];
	$move=move_uploaded_file($_FILES['image']['tmp_name'],'../../../assets/img/galeri/'.$filename);
	if(empty($filename)) {
	  	$update="UPDATE galeri SET deskripsi='$des', capt = '$cap' WHERE id = $id";
		$eks_update = mysql_query($update);
		?>
		<script>
			alert("Berhasil update");
			window.location = '../view/?page=galeri';
		</script>
		<?php		
	} else if (!empty($filename)) {
	    $update="UPDATE galeri SET deskripsi='$des', capt = '$cap', gambar = '$filename' WHERE id = $id";
		$eks_update = mysql_query($update);
		?>
		<script>
			alert("Berhasil update");
			window.location = '../view/?page=galeri';
		</script>
		<?php

	}
 ?>