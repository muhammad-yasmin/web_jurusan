<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$q_guru = "SELECT guru.nip,guru.nama,guru.alamat,guru.foto,guru.email,guru.id,
				guru.telepon,guru.tgl_lahir,guru.qr,agama.agama,goldar.nama_goldar
				FROM guru
				INNER JOIN goldar ON guru.id_gol_darah = goldar.id
				INNER JOIN agama ON guru.id_agama = agama.id";
	$eks_guru = mysql_query($q_guru);
 ?>
  <table class="table table-striped table-bordered table-hovered" id="tblGuru">
 	<thead>
 		<tr>
 			<th width="3%">No</th>
 			<th width="10%">NIP</th>
 			<th width="10%">Nama</th>
 			<th width="5%">Tanggal Lahir</th>
 			<th width="10%">Alamat</th>
 			<th width="5%">Opsi</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 			$no = 1;
 			while ($array = mysql_fetch_assoc($eks_guru)) {
 				?>
				<tr>
					<td id="urut<?php echo $array['id']; ?>"><?php echo $no; ?></td>
					<td id="nis<?php echo $array['id']; ?>"><?php echo $array['nip']; ?></td>
					<td id="nama<?php echo $array['id']; ?>"><?php echo $array['nama']; ?></td>
					<td id="tl<?php echo $array['id']; ?>"><?php echo $array['tgl_lahir']; ?></td>
					<td id="tgl<?php echo $array['id']; ?>"><?php echo $array['alamat']; ?></td>
					<td align="center">
						<a onclick="btn_prev(<?php echo $array['id']; ?>);" title="Lihat"><i class="fa fa-eye"></i> Lihat</a>
					</td>
				</tr>
 				<?php
 			$no++;
 			}
 		 ?>
 	</tbody>
 </table>