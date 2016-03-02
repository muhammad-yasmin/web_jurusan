<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$q_produk = "SELECT * FROM produk";
	$eks_produk = mysql_query($q_produk);
 ?>
 <table class="table table-bordered" id="tblProduk">
 	<thead>
 		<tr>
 			<th width="1%">No</th>
 			<th width="15%">Nama Produk</th>
 			<th width="20%">Deskripsi</th>
 			<th width="5%">Opsi</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 			$no = 1;
 			while ($array = mysql_fetch_assoc($eks_produk)) {
 				?>
				<tr>
					<td align="center" id="urut<?php echo $array['id']; ?>"><?php echo $no; ?></td>
					<td id="nama<?php echo $array['id']; ?>"><?php echo $array['nama_produk']; ?></td>
					<td id="urel<?php echo $array['id']; ?>"><?php echo $array['deskripsi']; ?></td>
					<td align="center">
						<a onclick="btn_edit(<?php echo $array['id']; ?>);" title="Edit"><i class="fa fa-edit"></i></a>
						<a onclick="btn_del(<?php echo $array['id']; ?>);" title="Hapus"><i class="fa fa-trash"></i></a>
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
 	$("#tblProduk").dataTable();
 });
 </script>