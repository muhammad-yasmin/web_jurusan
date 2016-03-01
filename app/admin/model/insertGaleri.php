<?php 
	//---------------------------------------
	require "../../../config/connection.php";
	$con = new clsDb;
	$con->konek();
	//---------------------------------------
	$cap = $_POST['captionnya'];
	$des = $_POST['deskripsinya'];
	$filename=$_FILES['image']['name'];
	$move=move_uploaded_file($_FILES['image']['tmp_name'],'../../../assets/img/galeri/'.$filename);
	if(empty($filename)) {
	  	$update="INSERT INTO galeri VALUES(DEFAULT,'', '$cap', '$des', 'off')";
		$eks_update = mysql_query($update);
		?>
		<script>
			alert("Berhasil tambah");
			window.location = '../view/?page=galeri';
		</script>
		<?php		
	} else if (!empty($filename)) {
	    $update="INSERT INTO galeri VALUES(DEFAULT, '$filename', '$cap', '$des', 'off')";
		$eks_update = mysql_query($update);
		?>
		<script>
			alert("Berhasil tambah");
			window.location = '../view/?page=galeri';
		</script>
		<?php

	}
 ?>