<h2>Pendaftaran</h2>
          <table width=650 border=1>
	<?php if(count($hasilnya) > 0){ ?>
	<tr><th rowspan=2>No</th><th rowspan=2>Nama</th><th colspan=2>Tanggal</th><th colspan=3>Harga</th><th width="50px" rowspan=2>Jumlah Pendaftar</th><th width="50px" rowspan=2>Jumlah Maks</th><th rowspan="2">Sisa</th></tr>
		  <tr><th>Keberangkatan</th><th>Kepulangan</th><th>QRD</th><th>TPL</th><th>DBL</th></tr>
	<?php 
	$c = 1;
		foreach ($hasilnya as $row):
		$paket = $row['id_paket'];
		$a = $this->db->query("SELECT COUNT(`id_paket`) AS jumlah FROM jamaah WHERE `id_paket`='$paket'");
		
		//$paket = $row['nama_paket'];
		//$a = $this->db->query("SELECT COUNT(`nama_paket`) AS jumlah FROM jamaah WHERE `nama_paket`='$paket'");
		$b=$a->row()->jumlah;
		
	?>
	
	<tr align="left">
		
		<td align=center><?php echo  $c++;?></td>
		<td align=center><?php echo $row['nama_paket'];?></td>
		
		<td align=center><?php echo $row['jadwal_awal'];?></td>
		<td align=center><?php echo $row['jadwal_akhir'];?></td>
		<td align=center><?php echo anchor('bpw/isi_pendaftaran/'.$row['id_paket'].'/'.'qrd', $row['harga_qrd']);?></td>
		<td align=center><?php echo anchor('bpw/isi_pendaftaran/'.$row['id_paket'].'/'.'tpl', $row['harga_tpl']);?></td>
		<td align=center><?php echo anchor('bpw/isi_pendaftaran/'.$row['id_paket'].'/'.'dbl', $row['harga_dbl']);?></td>
		<td align=center><?php echo $b;?></td>
		<td align=center><?php echo $row['jumlah_max'];?></td>
		<td align=center><?php echo $row['jumlah_max']-$b;?></td>
	</tr>
		
	<?php endforeach;?>
</table>
<center><div class="pagination"><?php echo "".$this->pagination->create_links().""; ?></div></center>
 <?php } 
 else {
 	?>
 	<table>
 	<tr>
 		<td></td>
 	</tr>
 	</table>
 	<div><p align="center" style="color: red "><?php echo 'Belum ada data paket yang dimasukan'; ?></p></div>
 	<?php } 
 	if(count($hasilnya) > 0){
 	foreach ($hasilnya as $row):
 		echo "<h4>".$row['nama_paket']."</h4>";
 		echo "<p>".$row['ket']."</p>";
 	endforeach;}
 	?>