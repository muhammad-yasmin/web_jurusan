<table border="1" bordercolor="#CCCCCC" cols="20" class="table table-striped table-hover ">
  <tbody>
      <tr>
	  <td align="center"><b>NIP</b></td>
      <td align="center"><b>NAMA</b></td>
      	<td align="center"><b>ALAMAT</b></td>
		<td align="center"><b>EMAIL</b></td>
    </tr>
<?php 
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	
	$q = mysql_query("SELECT
						guru.nip,
						guru.nama,
						guru.alamat,
						guru.email
						FROM guru");

	while($array = mysql_fetch_assoc($q)){
  
  $nis=$array["nip"];
  $nama=$array["nama"];
  $kel=$array["alamat"];
  $jur=$array["email"];
  echo "<tr>
  	  <td align='center'>$nis</td>
      <td align='center'>$nama</td>
      <td align='center'>$kel</td>
      <td align='center'>$jur</td>
    </tr>";
  }

?>
    </tbody>
</table>