<table border="1" bordercolor="#CCCCCC" cols="20" class="table table-striped table-hover" id="tblSiswa">
  <tbody>
    <tr>
  	  <td align="center"><b>NIS</b></td>
      <td align="center"><b>NAMA</b></td>
    	<td align="center"><b>KELAS</b></td>
  		<td align="center"><b>JURUSAN</b></td>
    </tr>
    <?php 
    	require '../../../config/connection.php';
    	$con = new clsDb;
    	$con->konek();
    	
    	$q = mysql_query("SELECT
    						siswa_tabel.nis,
    						siswa_tabel.nama_siswa,
    						jurusan.nama_jurusan,
    						siswa_tabel.kelas
    						FROM siswa_tabel
    						INNER JOIN jurusan ON siswa_tabel.id_jurusan = jurusan.id_jurusan");

    	while($array = mysql_fetch_assoc($q)){
      
      $nis=$array["nis"];
      $nama=$array["nama_siswa"];
      $kel=$array["kelas"];
      $jur=$array["nama_jurusan"];
      echo "
        <tr>
      	  <td align='center'>$nis</td>
          <td align='center'>$nama</td>
          <td align='center'>$kel</td>
          <td align='center'>$jur</td>
        </tr>";
      }
    ?>
    </tbody>
</table>

<script>
  $(document).ready(function(){
    $("#tblSiswa").dataTable()
  });
</script>