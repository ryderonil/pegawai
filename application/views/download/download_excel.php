 <table width=650 border=1>
	<tr><th rowspan=2>No</th><th rowspan=2>Nama</th><th colspan=2>Tanggal</th><th colspan=3>Harga (Rp)</th><th rowspan=2>Jumlah</th><th rowspan=2>Status</th><th rowspan=2>Aksi</th></tr>
		  <tr><th>Keberangkatan</th><th>Kepulangan</th><th>QRD</th><th>TPL</th><th>DBL</th></tr>
	<?php 
	$a = 1; 
		foreach ($paket as $row):
		
		
	?>
	
	<tr align="left">
		
		<td><?php echo  $a; $a++;?></td>
		<td align=center><?php echo $row['nama_paket'];?></td>
		
		<td align=center><?php echo $row['jadwal_awal'];?></td>
		<td align=center><?php echo $row['jadwal_akhir'];?></td>
		<td align=center><?php echo $row['harga_qrd'];?></td>
		<td align=center><?php echo $row['harga_tpl'];?></td>
		<td align=center><?php echo $row['harga_dbl'];?></td>
		<td align=center><?php echo $row['jumlah_max'];?></td>
		<td align=center><?php if($row['blokir'] == 'N'){
		echo anchor("admin/disable_paket/".$row['id_paket'],"Aktif", "onClick='return confirm(\"Anda yakin ingin menonaktifkan paket?\");'");	
		}else{ 
		echo anchor("admin/unable_paket/".$row['id_paket'],"Non-Aktif", "onClick='return confirm(\"Anda yakin ingin mengaktifkan\");'");
		}?>  </td>
		
	<td>
	<?php echo anchor('admin/edit_paket/'.$row['id_paket'], 'Edit');?>
		</td>
		
	</tr>
		
	<?php endforeach;?>
</table>