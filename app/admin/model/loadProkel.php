<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$q_prokel = "SELECT * FROM jurusan";
	$eks_prokel = mysql_query($q_prokel);
 ?>
 <table class="table table-bordered table-hover" id="tblProkel">
 	<thead>
 		<tr>
 			<th width="1%">No</th>
 			<th width="15%">Jurusan</th>
 			<th width="5%">Inisial</th>
 			<th width="5%">Opsi</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 			$no = 1;
 			while ($array = mysql_fetch_assoc($eks_prokel)) {
 				?>
				<tr>
					<td align="center" id="urut<?php echo $array['id_jurusan']; ?>"><?php echo $no; ?></td>
					<td id="nama<?php echo $array['id_jurusan']; ?>"><?php echo $array['nama_jurusan']; ?></td>
					<td id="alamat<?php echo $array['id_jurusan']; ?>"><?php echo $array['inisial']; ?></td>
					<td align="center">
						<a onclick="btn_edit(<?php echo $array['id_jurusan']; ?>);" title="Edit"><i class="fa fa-edit"></i></a>
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
 	$("#tblProkel").dataTable();
 });
 </script>