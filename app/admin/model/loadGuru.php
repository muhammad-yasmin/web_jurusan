<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$q_guru = "SELECT guru.nip, guru.nama,
			   guru.alamat, guru.foto, guru.email,
			   guru.tgl_lahir, guru.qr, agama.agama,
			   guru.id_guru, goldar.nama_goldar
			   FROM guru
			   INNER JOIN goldar ON guru.id_gol_darah = goldar.id
			   INNER JOIN agama ON guru.id_agama = agama.id";
	$eks_guru = mysql_query($q_guru);
 ?>
  <table class="table table-striped table-bordered table-hovered" id="tblGuru">
 	<thead>
 		<tr>
 			<th width="5%">NIP</th>
 			<th width="15%">Nama</th>
 			<th width="15%">Alamat</th>
 			<th width="10%">Email</th>
 			<th width="7%">Agama</th>
 			<th width="5%">Opsi</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 			$no = 1;
 			while ($array = mysql_fetch_assoc($eks_guru)) {
 				?>
				<tr>
					<td id="nip<?php echo $array['id_guru']; ?>"><?php echo $array['nip']; ?></td>
					<td id="nama<?php echo $array['id_guru']; ?>"><?php echo $array['nama']; ?></td>
					<td id="alamat<?php echo $array['id_guru']; ?>"><?php echo $array['alamat']; ?></td>
					<td id="email<?php echo $array['id_guru']; ?>"><?php echo $array['email']; ?></td>
					<td id="agama<?php echo $array['id_guru']; ?>"><?php echo $array['agama']; ?></td>
					<td align="center">
						<a onclick="btn_prev(<?php echo $array['id_guru']; ?>);" title="Lihat"><i class="fa fa-eye"></i></a>
						<a onclick="btn_edit(<?php echo $array['id_guru']; ?>);" title="Edit"><i class="fa fa-edit"></i></a>
						<a onclick="btn_del(<?php echo $array['id_guru']; ?>, '<?= $array['nama']; ?>');" title="Hapus"><i class="fa fa-trash"></i></a> 
					</td>
				</tr>
 				<?php
 			$no++;
 			}
 		 ?>
 	</tbody>
 </table>
 <script>
 $(document).ready(function() {
 	$("#tblGuru").dataTable();
 });
 </script>