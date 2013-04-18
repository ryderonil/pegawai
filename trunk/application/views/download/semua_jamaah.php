<?php 
 	 ini_set("memory_limit","130M");

	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Jama'ah Umrah / Haji.xls");
	header("Pragma: no-cache");
	header("Expires: 0"); 
?>
<h2>Data Jama'ah Umrah / Haji</h2>
<br />
<table width=100% border=1>
          
          <tr><th rowspan=2>No</th><th rowspan=2>Nama Jamaah</th><th colspan=2>Tanggal</th><th rowspan=2>Paket</th><th rowspan=2>Tempat dan Tanggal Lahir</th>
          <th rowspan=2>Alamat Rumah</th>
          </tr>
		  <tr><th>Keberangkatan</th><th>Kepulangan</th>
		  <?php
		  $c = 1; 
		foreach ($hasilnya->result() as $row):
		$paket = $row->id_paket;
		$a = $this->db->query("SELECT * FROM paket WHERE `id_paket`='$paket'");
		
		$tanggal_awal=$a->row()->jadwal_awal;
		$tanggal_akhir=$a->row()->jadwal_akhir;
		$nama_paket=$a->row()->nama_paket;
		
	?>
	
	<tr align="left">
		
		<td><?php echo  $c; $c++;?></td>
		<td align=center><?php echo $row->nama;?></td>
		
		<td align=center><?php echo $tanggal_awal;?></td>
		<td align=center><?php echo $tanggal_akhir;?></td>
		<td align=center><?php echo $nama_paket.'('.$row->harga.')';?></td>
		<td align=center><?php echo $row->tempat_lahir.','.$row->tgl_lahir;?></td>
		<td align=center><?php echo $row->alamat_rumah;?></td>
		
	</tr>
		
	<?php endforeach;?></table>