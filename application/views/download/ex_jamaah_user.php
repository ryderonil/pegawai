<?php 
ini_set("memory_limit","130M");

	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=Data Jama'ah Tiap User.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
?>

 <h2>Daftar Jama'ah Setiap User </h2>
 <?php 
   $no = $nomor_user->row()->id_user;
   $xxxx = $this->db->query("SELECT * FROM user WHERE `id_user`='$no'");
 	$jeneng_paket = $xxxx->row()->nama_kl;
   ?> 
   <h4>
Daftar Jama'ah dari <?php echo $jeneng_paket?>
</h4>
		<table width=650 border=1>
          <?php if(count($hasilnya) > 0){ ?>
          <tr><th rowspan=2>No</th><th rowspan=2>Nama Jamaah</th><th colspan=2>Tanggal</th><th rowspan=2>Paket</th></tr>
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
		
		<td><?php echo  $c++;?></td>
		<td align=center><?php echo $row->nama;?></td>
		
		<td align=center><?php echo $tanggal_awal;?></td>
		<td align=center><?php echo $tanggal_akhir;?></td>
		<td align=center><?php echo $nama_paket.'('.$row->harga.')';?></td>
		
	</tr>
		
	<?php endforeach;?></table>
	
 <?php } 
 else {
 	?>
 	<?php } ?>