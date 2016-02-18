<?php 
	require '../../../koneksi.php';
	$con = new koneksiDb;
	$con->kon();

	$q = mysql_query("SELECT * FROM siswa");
?>
<table class="table table-striped table-bordered table-hovered" id="loadSiswaTbl">
	<thead>
		<tr>
			<th width="10%">NIS</th>
			<th width="15%">Nama</th>
			<th width="10%">Alamat</th>
			<th width="10%">Email</th>
			<th width="5%">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no = 1;
			while ($array = mysql_fetch_assoc($q)) {
				?>
					<tr>
						<td id="nisNya<?php echo $array['id']; ?>"><?php echo $array['nis']; ?></td>
						<td id="namaNya<?php echo $array['id']; ?>"><?php echo $array['nama']; ?></td>
						<td id="alamatNya<?php echo $array['id']; ?>"><?php echo $array['alamat']; ?></td>
						<td id="passNya<?php echo $array['id']; ?>"><?php echo $array['email']; ?></td>
						<td align="center">
							<a onclick="btn_preview(<?php echo $array['id']; ?>);" title="Lihat"><i class="fa fa-eye"></i></a>
							<a onclick="btn_edit(<?php echo $array['id']; ?>);" title="Edit"><i class="fa fa-edit"></i></a>
							<a onclick="btn_hapus(<?php echo $array['id']; ?>);" title="Hapus"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<?php
			$no++;
			}
		 ?>
	</tbody>
</table>
<script>
	$(document).ready(function(){
		$("#loadSiswaTbl").dataTable();
	});
</script>